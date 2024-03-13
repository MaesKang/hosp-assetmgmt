@extends('default')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Asset') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-full">
                    {!! Form::open(['route' => 'assets.store']) !!}

                    <div class="mb-3">
                        {{ Form::label('asset_name', 'Asset_name', ['class'=>'form-label']) }}
                        {{ Form::text('asset_name', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('acquired_date', 'Acquired_date', ['class'=>'form-label']) }}
                        {{ Form::date('acquired_date', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('cost', 'Cost', ['class'=>'form-label']) }}
                        {{ Form::text('cost', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('depreciation_rate', 'Depreciation_rate', ['class'=>'form-label']) }}
                        {{ Form::text('depreciation_rate', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="mb-3">
                        {{ Form::label('owner_id', 'Owner_id', ['class'=>'form-label']) }}
                        {{ Form::text('owner_id', null, array('class' => 'form-control')) }}
                    </div>


                    {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@stop
