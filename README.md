Laravel + Vue.js Cron Job Scheduler

Laravel Setup:

Create a new Laravel project using composer create-project laravel/laravel your-project-name.
Database:

We'll use Laravel's migrations to create a table to store cron job information.
Cron Job Model:

Create a model (app/Models/CronJob.php) to interact with the cron job table.
Laravel Controller:

Create a controller (app/Http/Controllers/CronJobController.php) to handle user requests for managing cron jobs.
Vue.js Component:

Create a Vue component (resources/js/components/CronJobList.vue) to display and manage cron jobs.
Vue.js Integration:

In your main Vue application (resources/js/app.js), mount the CronJobList component and fetch cron jobs from the Laravel API.
Create a form to add new cron jobs, sending data to the Laravel controller for creation.
Utilize events (cronJobDeleted) to update the cron job list after deletion.
Laravel Routes:

Define routes in routes/api.php for fetching and deleting cron jobs.


For run this project 
you need to run this in two seperate terminal
1. npm run dev [ for vue component ]
2. php artisan serv [ laravel local application ] 

Video link will share on whatsapp please check this too
Thanks
Nenshi Patel
