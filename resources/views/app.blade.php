<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        @routes
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container mx-auto">
            @inertia
        </div>
    </body>
</html>
