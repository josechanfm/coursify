<template>
  <AdminLayout title="Offer Editor" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <div>{{ lesson.teacher.name_zh}} ({{ lesson.teacher.code}} ) {{ lesson.date }} at {{ lesson.start }} to {{ lesson.end }}</div>
      <hr>
      <div>
        <div>Students</div>
        <ol>
          <li v-for="student in lesson.students">
            <span v-if="student.pivot.attend=='ATT'">
              <a-button @click="attend(student,'ABS')">Unattend</a-button>
            </span>
            <span v-else>
              <a-button @click="attend(student,'ATT')">Attend</a-button>
            </span>
          </li>
        </ol>
      </div>
      <div class="flex justify-center gap-2">
        <a href="javascript:history.back();" class="inline">
          <a-button>Back</a-button>
        </a>
      </div>
    </div>
  </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { defineComponent, reactive } from "vue";

export default {
  components: {
    AdminLayout,
  },
  props: ["offer","lesson"],
  data() {
    return {
      breadcrumb:[
          {label:"Area", url:route('admin.areas.index')},
          {label:"Course", url:route('admin.courses.index')},
          {label:"Offer", url:route('admin.offers.index')},
          {label:"Edit", url:null},
      ],
      dateFormat: "YYYY-MM-DD",
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
  created() {},
  computed: {
  },
  methods: {
    attend(student,attendance){
      const formData = new FormData();
      formData.append('lesson_id',this.lesson.id);
      formData.append('student_id',student.id);
      formData.append('attend',attendance)

      this.$inertia.post(route("admin.klass.attendance.attend"), formData, {
        onSuccess: (page) => {
          console.log(page)
        },
        onError: (err) => {
          console.log(err);
        },
      });

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
        this.offer,
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