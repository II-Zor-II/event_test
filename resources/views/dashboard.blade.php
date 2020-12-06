<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Appetiser Events</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="antialiased">
<div id="app" class="container-fluid">
    <navbar-component></navbar-component>
    <div class="row">
        <div class="col col-md-3">
            <manual-event-component></manual-event-component>
        </div>
        <div class="col col-md-9">
            <calendar-component></calendar-component>
        </div>
    </div>
</div>
</body>
<script src="/js/app.js"></script>
</html>
