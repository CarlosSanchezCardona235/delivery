@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	
    	{!! Form::open(array('url' => route('provinces.store'),'method' => 'post')) !!}
		<div class="form-group">	
			<label for="name">Name</label>
			{{Form::text("name",null,["class" => "form-control", "placeholder" => "name", ])}}
		</div>
		
		<div class="form-group">
			<label for="code">Code</label>
			{{Form::text("code",null,["class" => "form-control", "placeholder" => "code", ])}}
		</div>
		<div class="form-group">
    	{{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    	</div>
		{!! Form::close() !!}
		
    </div>
</div>
@endsection