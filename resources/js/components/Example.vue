<template>
  <div>
    <div>
      <h1>1. ví dụ building 2 chiều, lien ket 2 chieu</h1>
      <input type="text" v-model="name" />
      <input type="checkbox" v-model="accept" /> Tôi đồng ý với các điều khoản
      trên
      <h3>{{ name }}</h3>
    </div>

    <div>
      <h1 v-show="isShow">2. hide and show</h1>
      <button @click="isShow = !isShow">Ẩn/Hiện</button>
    </div>

    <div>
      <h1 v-bind:id="id">3. Có id là id-exc vì được building</h1>
      <input type="text" :disabled="inputDisabled" />
      <button @click="inputDisabled = !inputDisabled">Mở/Khóa</button>
    </div>

    <div>
      <h1 :class="{ daChon: selected }">4. style and class building</h1>
      <button @click="selected = !selected">Đổi màu</button>
    </div>

    <div>
      <h1>5. len ket element voi property</h1>
      <input type="text" v-model="channelName[0]" />
      <input type="text" v-model="channelName[1]" />
      <input type="text" v-model="channel.name" />
    </div>

    <div>
      <h1>6. event handling</h1>
      <input type="text" v-model="channel.name" />
      <button v-on:click="channel.name = 'handle click'">Click</button>
      <button @:click="channel.name = 'handle click'">Click</button>
      <!--viet tat-->
    </div>

    <div>
      <h1>7. prevent: huy bo submit (huy bo event mac dinh cua element)</h1>
      <form action="/abc">
        <input type="text" v-model="channel.name" />
        <button
          type="submit"
          v-on:click.prevent="channel.name = 'handle click'"
        >
          Click
        </button>
      </form>
    </div>

    <div>
      <h1>8. ánh xạ đến chính element</h1>
      <input ref="channelNameRes" type="text" v-model="channel.name" />
    </div>

    <div>
      <!--            todo list-->
      <div v-for="(index, task) in tasks" :key="index">
        {{ task }}
      </div>
    </div>

    <div>
      <!--            methods-->
      <h1>methods: {{ messageReverse }}</h1>
      <button v-on:click="reverseMessage">Reverse Message</button>
    </div>

    <div>
      <!--            share prop parent to child-->
      <h1>10. Share prop parent to child</h1>
      <ol>
        <li v-for="(item, index) in myData">
          {{ item.text }}
        </li>
      </ol>
    </div>

    <div>
      <button v-on:click="updateMessage">
        11. CLICK TO :share prop parent to child
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Example",
  data() {
    return {
      name: "This IS All Example",
      accept: true,
      isShow: true,
      id: "id-exc",
      inputDisabled: false,
      selected: true,
      channelName: ["kubi kubo", "tiennt"],
      channel: {
        name: "abc",
      },
      tasks: ["a", "b", "c"],
      messageReverse: "message Reverse!",
      childMessage: "this is child message",
    };
  },
  methods: {
    reverseMessage: function () {
      this.messageReverse = this.messageReverse.split("").reverse().join("");
    },
    updateMessage: function () {
      this.$emit("inputData", this.childMessage);
    },
  },
  props: ["myData"],
};
</script>

<style>
.daChon {
  color: red;
}
</style>
