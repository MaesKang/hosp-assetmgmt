@extends('default')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assets') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-full">

                        <div class="d-flex justify-content-end mb-3"><a href="{{ route('assets.create') }}" class="btn btn-info">Create</a></div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Asset Name</th>
                                    <th>Acquired Date</th>
                                    <th>Cost</th>
                                    <th>Depreciation Rate</th>
                                    <th>Owner</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($assets as $asset)

                                    <tr>
                                        <td>{{ $asset->id }}</td>
                                        <td>{{ $asset->asset_name }}</td>
                                        <td>{{ $asset->acquired_date }}</td>
                                        <td>{{ $asset->cost }}</td>
                                        <td>{{ $asset->depreciation_rate }}</td>
                                        <td>{{ $asset->owner_id }}</td>

                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('assets.show', [$asset->id]) }}" class="btn btn-info">Show</a>
                                                <a href="{{ route('assets.edit', [$asset->id]) }}" class="btn btn-primary">Edit</a>
                                                {{-- {!! Form::open(['method' => 'DELETE','route' => ['assets.destroy', $asset->id]]) !!}
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
