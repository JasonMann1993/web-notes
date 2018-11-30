<template>
  <form @submit.prevent="addTodo(newTodo)">
    <div class="form-group">
      <input type="text" class="form-control" v-model="newTodo.title">
    </div>
    <div class="form-group">
      <button class="btn btn-info">add todo</button>
    </div>
  </form>
</template>

<script>
  export default {
    name: "todo-form",
    computed: {
      newTodo(){
        return this.$store.state.newTodo
      }
    },
    methods: {
      addTodo(newTodo) {
        this.$store.dispatch('saveTodo',newTodo)
      }
    }
  }
</script>

<style scoped>

</style>
