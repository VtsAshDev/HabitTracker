<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{config('app.name')}}</title>
  @vite('resources/css/app.css')
</head>
  <body class="bg-[#FFE0D6] min-h-screen flex flex-col justify-between">
    <x-header/>
     {{ $slot }}
    <x-footer/>
  </body>
</html>
