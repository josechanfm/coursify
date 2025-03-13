<template>
  <AdminLayout title="規劃" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <a-card class="bg-white m-5 p-3 rounded-md shadow">
      <a-form
        ref="modalRef"
        :model="course"
        name="CourseForm"
        :label-col="{ style: 'width:150px' }"
        autocomplete="off"
        :rules="rules"
        :validate-messages="validateMessages"
        @finish="onFinish"
      >
        <a-form-item label="課程類別" name="area_id">
          <div v-if="course.id" class="text-base">{{ areas.find( x => x.id == course.area_id).name_zh }}</div>
          <a-select
            v-else
            v-model:value="course.area_id"
            :options="areas"
            :fieldNames="{ value: 'id', label: 'name_zh' }"
            @change="updateCourseCode"
          />
        </a-form-item>
        <a-form-item label="編號" name="code">
          <a-input type="input" hidden v-model:value="course.code" /><span class="px-1 text-base">{{ course.code }}</span>
        </a-form-item>
        <a-form-item label="類型" name="type">
          <a-select v-model:value="course.type" :options="courseTypes"/>
        </a-form-item>
        <a-form-item label="規劃名稱(中文)" name="name_zh">
          <a-input type="input"  v-model:value="course.name_zh" />
        </a-form-item>
        <a-form-item label="規劃名稱(英文)" name="name_en">
          <a-input type="input"  v-model:value="course.name_en" />
        </a-form-item>
        <a-form-item label="評估" name="assessment">
          <a-radio-group v-model:value="course.assessment" name="radioGroup">
            <a-radio :value="true">設有考試</a-radio>
            <a-radio :value="false">不設考試</a-radio>
          </a-radio-group>
        </a-form-item>
        <a-form-item label="敘述" name="description">
          <a-textarea v-model:value="course.description" />
        </a-form-item>
        <a-form-item label="方法" name="method">
          <a-textarea v-model:value="course.method" />
        </a-form-item>
        <a-form-item label="目標" name="target">
          <a-textarea v-model:value="course.target" />
        </a-form-item>

        <div class="flex flex-wrap justify-between">
          <div class="w-full md:w-1/3">
            <a-form-item label="必修" name="prerequisite">
              <a-input type="input"  v-model:value="course.prerequisite" />
            </a-form-item>
            <a-form-item label="授課語言" name="conduct_lang">
              <a-select v-model:value="course.conduct_lang" mode="multiple" :options="languageTypes"/>
            </a-form-item>
            <a-form-item label="講義語言" name="handhout_lang">
              <a-select v-model:value="course.handhout_lang" mode="multiple" :options="languageTypes"/>
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            
            <a-form-item label="畢業證書" name="certificate">
              <a-select v-model:value="course.certificate" :options="certificateTypes"/>
            </a-form-item>
            <a-form-item label="課時" name="hours">
              <a-input-number v-model:value="course.hours" />
            </a-form-item>
            <!-- <a-form-item label="Tution Fee" name="tution_fee">
              <a-input-number v-model:value="course.tution_fee" />
            </a-form-item>
            <a-form-item label="Other Fee" name="other_fee">
              <a-input-number v-model:value="course.other_fee" />
            </a-form-item> -->
            <a-form-item label="狀態" name="active">
              <a-switch v-model:checked="course.active" /> <span v-if="course.active">激活</span> <span v-else>暫停</span>
            </a-form-item>
          </div>
          <div class="w-full md:w-1/3">
            <!-- <a-form-item label="Payment" name="payment">
              <a-input type="input"  v-model:value="course.payment" />
            </a-form-item> -->
            <!-- <a-form-item label="Quota" name="quota">
              <a-input-number v-model:value="course.quota" />
            </a-form-item> -->
          </div>
        </div>



        <a-form-item label="Remark" name="remark">
          <a-textarea v-model:value="course.remark" />
        </a-form-item>
        <div class="flex justify-center gap-2">
          <a-button type="primary" html-type="submit"><check-outlined />保存</a-button>
          <a href="javascript:history.back();" class="inline">
            <a-button><rollback-outlined />返回</a-button>
          </a>
        </div>
      </a-form>
    </a-card>
  </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";
import * as AntdIcons from '@ant-design/icons-vue';

export default {
  components: {
    AdminLayout,
    ...AntdIcons,
  },
  props: ["areas", "area","courseTypes","languageTypes","certificateTypes", "course"],
  data() {
    return {
      
      breadcrumb:[
        {label:"Area" , url:route('admin.areas.index')},
        {label:"Course" , url:route('admin.courses.index')},
        {label: this.course.id? 'Create':'Edit' , url:null},
      ],
      rules: {
        code: { required: true },
        name_zh: { required: true },
      },
      validateMessages: {
        required: "${label} is required!",
        types: {
          email: "${label} is not a valid email!",
          number: "${label} is not a valid number!",
        },
        number: {
          range: "${label} must be between ${min} and ${max}",
        },
      },
      labelCol: {
        style: {
          width: "150px",
        },
      },
    };
  },
  created() {
    if( this.area ){
      this.course.area_id = this.area.id
      this.updateCourseCode()
    }
  },
  computed: {
    areaOptions() {
      return this.areas.map((a) => {
        return { value: a.id, label: a.abbr + "-" + a.name_zh };
      });
    },
  },
  methods: {
    updateCourseCode(){
      var area = this.areas.find( x => x.id == this.course.area_id)
      var last_name = Number( area.last_num??0 )
      this.course.code = area.abbr + ( "0000" + (last_name + 1) ).slice(-3);
    },
    onFinish() {
      if (this.course.id) {
        this.updateRecord();
      } else {
        this.storeRecord();
      }
    },
    storeRecord() {
      this.$inertia.post(route("admin.courses.store"), this.course, {
        onSuccess: (page) => {
          console.log(page);
        },
        onError: (err) => {
          console.log("duplicate code", this.course);
          console.log(err);
        },
      });
    },
    updateRecord() {
      this.$inertia.patch(
        route("admin.courses.update", this.course.id),
        this.course,
        {
          onSuccess: (page) => {
            console.log(page);
          },
          onError: (error) => {
            console.log(error);
          },
        }
      );
    },
  },
};
</script>