<template>
  <div id="todos">
    <ul class="list-group">
      <li class="list-group-item" :class="{'completed':todo.completed}" v-for="(todo,index) in todos">

        <router-link :to="{ name: 'todo', params: { id: todo.id }}">{{ todo.title}}</router-link>

        <button type="button" class="btn btn-sm float-right" :class="[todo.completed ? 'btn-danger' : 'btn-success']"
                @click="toggleCompletion(todo)">{{ todo.completed ? 'todo' : 'complete' }}
        </button>
        <button type="button" class="btn btn-warning btn-sm float-right mr-2" @click="deleteTodo(index,todo)">delete
        </button>
      </li>
    </ul>
    <todo-form></todo-form>
  </div>
</template>

<script>
  import TodoForm from './TodoForm'

  export default {
    name: "todos",
    computed: {
      todos(){
        return this.$store.state.todos
      }
    },
    methods: {
      deleteTodo(index,todo) {
        this.$store.dispatch('removeTodo', todo, index)
      },
      toggleCompletion(todo) {
        this.$store.dispatch('completeTodo', todo)
      }
    },
    components: {
      TodoForm
    }
  }
</script>

<style scoped>
  .completed {
    color: #5cb85c;
    text-decoration: line-through;
  }
  .completed a{
    color:#5cb85c;
  }
  a{
    text-decoration: none;

  }
</style>
