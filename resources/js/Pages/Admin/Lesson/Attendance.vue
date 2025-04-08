<template>
<AdminLayout title="Offer Editor" :breadcrumb="breadcrumb">
	
    <div class="container mx-auto">
		<div class="bg-white m-5 p-5 rounded-md shadow">
			<div class="text-base flex flex-col gap-2">
				<div>
					課程時間: {{ lesson.date }} {{displayTime(lesson.start)}} ~ {{displayTime(lesson.end) }}
				</div>
				<div>
					教師: {{ lesson.teacher?.name_zh}} {{ lesson.teacher?.code}} 
				</div>
			</div>
			
			<a-divider />

			<div>
                <a-table 
                    class="shadow-md rounded-lg "
                    :dataSource="lesson.students" 
                    :columns="columns" 
                >
                    <template #headerCell="{title, column}">
                        <template v-if="column.dataIndex == 'operation'">
                            {{  }}
                            <a-button size="small" @click="setAllAttendance('1')">全部出席</a-button>
                            <a-button size="small" @click="setAllAttendance('0')">全部缺席</a-button>
                        </template>
                        <template v-else>
                            {{ title }}
                        </template>
                    </template>
                    <template #bodyCell="{ column, text, record, index }">
                        <template v-if="column.dataIndex == 'current_attendance'">
							{{ displayRate(offer.students.find( x => x.id == record.id)?.current_attendance_rate ) }}
                        </template>
                        <template v-else-if="column.dataIndex == 'total_attendance'">
							{{ displayRate(offer.students.find( x => x.id == record.id)?.total_attendance_rate ) }}
                        </template>
                        <template v-else-if="column.dataIndex == 'operation'">
							<a-switch v-model:checked="record.pivot.attend" class="attend-switch" @change="attend(record, record.pivot.attend)" checked-value="1" checkedChildren="出席" unCheckedValue="0" un-checked-children="缺席" />
                        </template>
                        <template v-else>
                            <div >
                                {{ record[column.dataIndex] }}
                            </div>
                        </template>
                    </template>
                </a-table>
			</div>
		</div>
    </div>
</AdminLayout>
</template>

<style>
.attend-switch{
    @apply flex items-center pt-1;
    height:30px;
    width:70px;
}
.attend-switch .ant-switch-handle{
    @apply top-[6px];
}
.attend-switch .ant-switch-inner-checked{
    font-size:14px !important;
}
.attend-switch .ant-switch-inner-unchecked{
    font-size:14px !important;
}

</style>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {
    defineComponent,
    reactive
} from "vue";
import dayjs, { Dayjs } from 'dayjs';

export default {
    components: {
        AdminLayout,
    },
    props: ["offer", "lesson"],
    data() {
        return {
            breadcrumb: [
				{ label: "Area", url: route('admin.areas.index') },
                { label: "Course", url: route('admin.courses.index') },
                { label: "Offer", url: route('admin.offers.index') },
                { label: "Attendance", url: null },
            ],
			
            columns: [
                {
                    title: "學生編號",
                    dataIndex: "code",
                }, {
                    title: "姓名(中文)",
                    dataIndex: "name_zh",
                }, {
                    title: "姓名(英文)",
                    dataIndex: "name_en",
                }, {
					title: "出席率(當前)",
					dataIndex: "current_attendance",
				}, {
					title: "總出席率",
					dataIndex: "total_attendance",
				},  {
                    title: "操作",
                    dataIndex: "operation",
                },
            ],
        };
    },
    created() {},
    computed: {},
    methods: {
        attend(student, attendance) {
            const formData = new FormData();
            formData.append('lesson_id', this.lesson.id);
            formData.append('student_id', student.id);
            formData.append('attend', attendance)

            axios.post(route("admin.klass.attendance.attend"), formData)
                .then(response => {
                    console.log(response.data); // 成功回调
                })
                .catch(error => {
                    console.error(error.response ? error.response.data : error.message); // 错误回调
                });
        },
        setAllAttendance(attendance){
            if( attendance == '0' ){
                var title = '確認全部學生缺席?'
            }else{
                var title = '確認全部學生出席?'
            }
            this.$confirm({
                closable: true,
                maskClosable: true,
                title: '學生出/缺席',
                content: title,
                onOk:()=>this.handleAllAttendance(attendance),
                onCancel:()=>{},
            });
        },
        async handleAllAttendance(attendance){
            
            await this.lesson.students.forEach( async (student, index) => {
                await this.attend( student , attendance)
            })
            this.$inertia.reload()
        },
        onFinish() {
            if (this.offer.id) {
                this.updateRecord();
            } else {
                this.storeRecord();
            }
        },
        storeRecord() {
            this.$inertia.post(route("admin.offers.store"), this.offer, {
                onSuccess: (page) => {
                    console.log(page);
                },
                onError: (err) => {
                    console.log(err);
                },
            });
        },
        updateRecord() {
            this.$inertia.patch(
                route("admin.offers.update", this.offer.id),
                this.offer, {
                    onSuccess: (page) => {
                        console.log(page);
                    },
                    onError: (error) => {
                        console.log(error);
                    },
                }
            );
        },
        displayRate(rate){
            return Math.round( rate * 100 ) + "%"
        },
        displayTime(time) {
            return dayjs(time, 'HH:mm:ss').format('HH:mm');
        },
    },
};
</script>
