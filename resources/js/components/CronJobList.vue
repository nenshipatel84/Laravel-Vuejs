<template>
    <div>
      <h1>Cron Jobs</h1>
      <ul>
        <!-- <li v-for="cronJob in cronJobs" :key="cronJob.id">
          <span>{{ cronJob.url }}</span> ({{ cronJob.schedule }})
          <button @click="deleteCronJob(cronJob.id)">Delete</button>
        </li> -->
        <table border="1">
        <thead>
          <tr>
            <th>URL</th>
            <th>Schedule</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <tr v-for="cronjob in cronJobs" :key="cronjob.id">
            <td>{{ cronjob.url }}</td>
            <td>{{ cronjob.schedule }}</td>
            <td><button @click="deleteCronJob(cronjob.id)">Delete</button></td>
            </tr>
        </tbody>
      </table>
        <li v-if="!cronJobs.length">No cron jobs found.</li>

      </ul>
    </div>
    <div>
        <a href="/">Create New</a>
    </div>
  </template>

  <script>
  import axios from 'axios';
  const apiUrl = '/api/cron-jobs';

  export default {
    data() {
        return {
            cronJobs: [],
        };
    },
    mounted() {
        axios.get('/api/cron-jobs') // Assuming your API endpoint
        .then(response => {
            this.cronJobs = response.data; // Update state with fetched data
        })
        .catch(error => {
            console.error('Error fetching cron jobs:', error);
        });
    },
    methods: {
      deleteCronJob(id) {
        axios.delete(`api/cron-jobs/${id}`)
          .then(() => this.$emit('cronJobDeleted'));
      },
    },
  };
  </script>
