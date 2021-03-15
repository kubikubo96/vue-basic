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
      <h6>Số Tiền bạn có: 0</h6>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
