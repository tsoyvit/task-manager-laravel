@extends('layouts.app')
@section('content')

    <h2 class="mb-5" style="line-height: 48px; font-size: 2rem;">
        {{ __('task.Viewing an issue') }} {{ $task->name }}
        @can('update', $task)
        <a href="{{ route('tasks.edit', $task) }}"
           class="ml-2 inline-flex items-center justify-center w-8 h-8 text-blue-500 hover:text-white hover:bg-blue-500 bg-blue-100 rounded-full transition"
           title="{{ __('task.Edit') }}">
            ⚙
        </a>
        @endcan
    </h2>
    <p>
        <span class="font-black">{{ __('task.name') }}:</span>
        {{ $task->name }}
    </p>
    <p>
        <span class="font-black">{{ __('task.status') }}:</span>
        {{ $task->status->name }}
    </p>
    <p>
        <span class="font-black">{{ __('task.description') }}:</span>
        {{ $task->description }}
    </p>

    @if($task->labels->count())
        <p>
            <span class="font-black">{{ __('label.labels') }}:</span>
        </p>
        <div>
            @foreach($task->labels as $label)
                <div class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    {{ $label->name }}
                </div>
            @endforeach
        </div>
    @endif

@endsection
