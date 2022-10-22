<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="" content="{{ $metaDescription }}">

</head>

<body>
    <x-layouts.nav />
    @if (session('status'))
        {{ session('status') }}
    @endif
    {{ $slot }}
</body>

</html>
