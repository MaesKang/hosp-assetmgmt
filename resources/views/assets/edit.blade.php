@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($asset, array('route' => array('assets.update', $asset->id), 'method' => 'PUT')) }}

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

		{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
