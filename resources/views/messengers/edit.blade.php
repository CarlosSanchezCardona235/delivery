@extends('layouts.app')

@section('content')
<div class="container" id="edit-messenger">
    <div class="row justify-content-center">
    	
    	{!! Form::open(array('url' => route('messengers.update',['id'=>$messenger->id]),'method' => 'put')) !!}
		<div class="form-group">	
			<label for="name">Name</label>
			{{Form::text("name",$messenger->name,["class" => "form-control", "placeholder" => "name", ])}}
		</div>
		<div class="form-group">
			<label for="lastname">Lastname</label>
			{{Form::text("lastname",$messenger->lastname,["class" => "form-control", "placeholder" => "lastname", ])}}
		</div>
		<div class="form-group">	
			<label for="email">Email</label>
			{{Form::text("email",$messenger->email,["class" => "form-control", "placeholder" => "email", ])}}
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			{{Form::text("phone",$messenger->phone,["class" => "form-control", "placeholder" => "phone", ])}}
		</div>
		<div class="form-group">	
			<label for="age">Age</label>
			{{Form::text("age",$messenger->age,["class" => "form-control", "placeholder" => "age", ])}}
		</div>
		<div class="form-group">
			<label for="province_id">Province ID</label>
			{!! Form::select('province_id', $provinces, $messenger->province_id, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
    	{{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    	</div>
		{!! Form::close() !!}
		
    </div>
</div>
@endsection