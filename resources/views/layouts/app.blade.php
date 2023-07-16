<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootcamp Cari</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles/>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <nav class="flex bg-slate-700 text-white h-16">
        <a href="{{ route('counter') }}" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('counter')) ? 'bg-slate-800' : '' }}">Counter</a>
        <a href="{{ route('calculator') }}" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('calculator')) ? 'bg-slate-800' : '' }}">Calculator</a>
        <a href="{{ route('todo-list') }}" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('todo-list')) ? 'bg-slate-800' : '' }}">TodoList</a>
        <a href="{{ route('cascading-dropdown') }}" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-800' : '' }}">Cascading Dropdown</a>
        <a href="{{ route('products') }}" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('products')) ? 'bg-slate-800' : '' }}">Products Search</a>
        <a href="/image-upload" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('image-upload')) ? 'bg-slate-800' : '' }}">Image Upload</a>
        <a href="/register" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('register')) ? 'bg-slate-800' : '' }}">Registration</a>
        <a href="/alpine" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('alpine')) ? 'bg-slate-800' : '' }}">Alpine JS</a>
    </nav>

    {{ $slot }}


<livewire:scripts/>
</body>
</html>
