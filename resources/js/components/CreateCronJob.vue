<template>
    <div>
      <h2>Create Cron Job</h2>
      <form @submit.prevent="submitCronJob">
        <div class="form-group">
          <label for="url">URL:</label>
          <input type="text" id="url" v-model="url" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="schedule">Schedule:</label>
          <input type="text" id="schedule" v-model="schedule" class="form-control" required>
          <small class="form-text text-muted">
            Cron expression format (e.g., "* * * * *")
          </small>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        url: '',
        schedule: '',
      };
    },
    methods: {
      submitCronJob() {
        const data = { url: this.url, schedule: this.schedule };

        axios.post('/api/cron-jobs', data)
          .then(() => {
            this.$emit('submitCronJob', data);
            this.url = '';
            this.schedule = '';
          })
          .catch(error => {
            console.error('Error creating cron job:', error.response.data);
          });
      },
      navigateToComponent() {
        this.$router.push('/cron-job-list'); // Programmatic navigation using Vue Router
     },
    },
  };
  </script>
