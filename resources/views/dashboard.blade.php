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
    <nav-bar-component></nav-bar-component>
    <div class="row">
        <div class="col col-md-4 mt-5">
            <manual-event-component></manual-event-component>
        </div>
        <div class="col col-md-8 p-2">
            <calendar-component
                :events="calendarEvents">
            </calendar-component>
        </div>
    </div>
</div>
</body>
<script>
        {{-- User data : holds api_token for requests --}}
    const USER = @json(['api_token' => Auth::user()->api_token]);
</script>
<script src="/js/app.js"></script>
</html>
