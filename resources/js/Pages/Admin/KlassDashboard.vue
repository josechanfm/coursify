<template>
  <AdminLayout title="Offer Editor" :breadcrumb="breadcrumb">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Config</h2>
    </template>
    <div class="bg-white m-5 p-5 rounded-md shadow">
      <div>{{  offer.code }}</div>
      <div>{{  offer.name_zh }}</div>
      <div>{{  offer.name_en }}</div>
      <div>
        <div>Teachers</div>
        <ol>
          <li v-for="teacher in offer.teachers">{{ teacher.code }} - {{ teacher.name_zh }}</li>
        </ol>
      </div>
      <div>
        <div>Students</div>
        <ol>
          <li v-for="student in offer.students">{{ student.code }} - {{ student.name_zh }}</li>
        </ol>
      </div>
      <div>
        <div>Lessons</div>
        <ol>
          <li v-for="lesson in offer.lessons">
            {{ lesson.teacher.name_zh}} ({{ lesson.teacher.code}} ) {{ lesson.date }} at {{ lesson.start }} to {{ lesson.end }}
            <a-button :href="route('admin.klass.attendance',{offer:offer.id, lesson:lesson.id})">Attendance</a-button>
          </li>
        </ol>
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
  props: ["offer"],
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