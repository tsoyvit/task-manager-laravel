@extends('layouts.app')
@section('content')

    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
        {{ __('app.greeting') }}
    </h1>

    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
        {{ __('app.homeBody') }}
    </p>

    <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
        <a href="{{ route('tasks.index') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            {{ __('app.push') }}
        </a>
    </div>

@endsection
