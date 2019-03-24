@extends('layouts.app')

@section('content')
<div class="container" id="create-messenger">
    <div class="row justify-content-center">
    	
    	{!! Form::open(array('url' => route('messengers.store'),'method' => 'post')) !!}
		<div class="form-group">	
			<label for="name">Name</label>
			{{Form::text("name",null,["class" => "form-control", "placeholder" => "name", ])}}
		</div>
		<div class="form-group">
			<label for="lastname">Lastname</label>
			{{Form::text("lastname",null,["class" => "form-control", "placeholder" => "lastname", ])}}
		</div>
		<div class="form-group">	
			<label for="email">Email</label>
			{{Form::text("email",null,["class" => "form-control", "placeholder" => "email", ])}}
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			{{Form::text("phone",null,["class" => "form-control", "placeholder" => "phone", ])}}
		</div>
		<div class="form-group">	
			<label for="age">Age</label>
			{{Form::text("age",null,["class" => "form-control", "placeholder" => "age", ])}}
		</div>

		<div class="form-group">
			<label for="province_id">Province ID</label>
		<select name="province_id" id="provinces" class="form-control" >
		
		</select>
		</div>
		<div class="form-group">
    	{{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    	</div>
		{!! Form::close() !!}
		
    </div>
</div>
@endsection