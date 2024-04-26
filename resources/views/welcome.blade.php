<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <link rel="stylesheet" src="{{ Vite::asset('resources/css/app.css') }}" />
    <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>
    <title>Cron job</title>
</head>

<body>

    <div id="app">

        <hello-world></hello-world>
        <create-cron-job></create-cron-job>
    </div>

</body>

