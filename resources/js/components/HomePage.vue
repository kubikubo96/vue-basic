<template>
  <div>
    <h2>{{ name }}</h2>
    <Example v-bind:myData="myData" @inputData="updateMessage"/>

    <h1>11. Share Props Child To Parent : {{ childData }}</h1>
  </div>
</template>

<script>
  import Example from "./Example";

  export default {
    name: "HomePage",
    components: {
      Example,
    },
    data() {
      return {
        name: "This is HomePage",
        myData: [
          {id: 0, text: "Cà pháo"},
          {id: 1, text: "Mắm tôm"},
          {id: 2, text: "Miễn ăn được là được"},
        ],
        childData: "origin message",
      };
    },
    methods: {
      updateMessage(variable) {
        this.childData = variable;
      },
    },
  };
</script>
