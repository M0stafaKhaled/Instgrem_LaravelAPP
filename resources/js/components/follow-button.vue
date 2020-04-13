<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser" style="text-align: center; ">Follow</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    followUser() {
      axios.post("/follow/1").then(response => {
        alert(response.data);
      });
    }
  }
};
</script>
