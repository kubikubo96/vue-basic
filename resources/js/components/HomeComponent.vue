// HomeComponent.vue

<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Home Component</div>

        <div class="card-body">
          I'm the Home Component component.
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <h3>Sử dụng Vuex - Store quản lý state</h3>
      <h6>Họ Và Tên: {{getUsername}}</h6>
      <h6>Tuổi: {{age}}</h6>
    </div>
  </div>
</template>

<script>
  import {mapGetters} from 'vuex'

  export default {
    name: "HomeComponent",
    computed: {
      username() {
        return this.$store.state.username
      },
      ...mapGetters(['getUsername', 'getAge']),
      age() {
        return this.$store.state.age
      }
    }
  }
</script>
