@extends('layouts.app')
@section('h1', __('task_statuses.h1'))
@section('content')

    @include('partials.flash')

    @can('create', App\Models\TaskStatus::class)
        <div>
            <a href="{{ route('task_statuses.create') }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('task_statuses.create') }}</a>
        </div>
    @endcan

    <table class="mt-4">
        <thead class="border-b-2 border-solid border-black text-left">
        <tr>
            <th>ID</th>
            <th>{{ __('task_statuses.name') }}</th>
            <th>{{ __('task_statuses.created_at') }}</th>
            @auth
                <th>{{ __('task_statuses.actions') }}</th>
            @endauth
        </tr>
        </thead>

        <tbody>
        @foreach($taskStatuses as $taskStatus)
            <tr class="border-b border-dashed text-left">
                <td>{{ $taskStatus->id }}</td>
                <td>{{ $taskStatus->name }}</td>
                <td>{{ $taskStatus->created_at->format('d.m.Y') }}</td>
                <td>
                    @can('delete', $taskStatus)
                        <a class="text-red-600 hover:text-red-900"
                           href="{{ route('task_statuses.destroy', $taskStatus) }}"
                           data-confirm="{{ __('task_statuses.confirm_delete') }}" data-method="delete"
                           rel="nofollow">{{ __('task_statuses.delete') }}</a>
                    @endcan

                    @can('update', $taskStatus)
                        <a class="text-blue-600 hover:text-blue-900"
                           href="{{ route('task_statuses.edit', $taskStatus) }}">
                            {{ __('task_statuses.change') }}
                        </a>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
