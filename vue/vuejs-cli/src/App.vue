<template>
  <div id="app">
    <!--<img src="./assets/logo.png">-->
    <!--<HelloWorld/>-->
    <!--<todos :todos="todos"></todos>-->
    <!--<todo-form :todos="todos"></todo-form>-->
    <router-view></router-view>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import Todos from './components/Todos'

export default {
  name: 'App',
  mounted(){
    this.$store.dispatch('getTodos')
  },
  computed: {
    todoCount() {
      return 1;
    }
  },
  components: {
    HelloWorld,Todos
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
