<!DOCTYPE html>
<html lang="en" class="h-full bg-black text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Vision Street' }}</title>

    {{-- Vite asset bundling --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- CSRF token for forms --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Optional: favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Optional: fonts --}}
    @include('member.header.fonts')
    @include('member.header.styles')
</head>
