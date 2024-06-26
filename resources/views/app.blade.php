<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="bg-white dark:bg-gray-900">
@inertia
</body>
</html>
