@extends('default')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Owners') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-full">

                <div class="d-flex justify-content-end mb-3"><a href="{{ route('owners.create') }}" class="btn btn-info">Create</a></div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($owners as $owner)

                            <tr>
                                <td>{{ $owner->id }}</td>
                                <td>{{ $owner->name }}</td>

                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('owners.show', [$owner->id]) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('owners.edit', [$owner->id]) }}" class="btn btn-primary">Edit</a>
                                        {{-- {!! Form::open(['method' => 'DELETE','route' => ['owners.destroy', $owner->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!} --}}
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@stop
