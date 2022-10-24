<script>
import axios from "axios";

export default {
  data() {
    return {
      name: '222',
    }
  },

  created() {
    this.test()
  },
  methods: {
    test() {
      axios
          .get('/api/user')
          .then(response => (this.name = response.data))
    }
  }
}

</script>

<template>
  <div>666{{name}}</div>
</template>