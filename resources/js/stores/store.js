import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    username: 'Nguyễn Tất Tiến',
    age: 24
  },

  getters: {
    getUsername: state => {
      return state.username;
    },
    getAge: state => {
      return state.age;
    }
  },

  mutations: {
    //  here we create commit
  },

  actions: {
    //  here will create action
  }
})

