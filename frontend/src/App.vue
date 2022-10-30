<script>
import axios from "axios";

export default {
  data() {
    return {
      page: null,
      value: ''
    }
  },

  created() {
    this.test()
  },
  mounted() {
    this.getData();
  },
  methods: {
    test() {
      axios
          .get('/api/user')
          .then(response => (this.name = response.data))
    },
    getData() {
      let url = '/api/data';

      if (this.page) {
        url += '?page=' + this.page;
      }
      axios
          .get(url)
          .then(response => (this.value = response.data))
    },
    nextPage() {
      this.page += 1;
      this.getData();
    },
  }
}

</script>

<template>
  <div>
    <button @click="nextPage">next</button>
  </div>
  <br>
  <br>
  <div>{{value}}</div>
</template>