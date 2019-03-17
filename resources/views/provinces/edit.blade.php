@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<h1>este es edit</h1>
    	{!! Form::open(array('url' => route('provinces.update',['id'=>$province->id]),'method' => 'put')) !!}
		<div class="form-group">	
			<label for="name">Name</label>
			{{Form::text("name",$province->name,["class" => "form-control", "placeholder" => "name", ])}}
		</div>
		
		<div class="form-group">
			<label for="code">Code</label>
			{{Form::text("code",$province->code,["class" => "form-control", "placeholder" => "code", ])}}
		</div>
		<div class="form-group">
    	{{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    	</div>
		{!! Form::close() !!}
		
    </div>
</div>
@endsection