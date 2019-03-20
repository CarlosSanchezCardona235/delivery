@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mensajeros</div>

                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <td>Phone</td>
                                <td>Age</td>
                                <td>Province ID</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messengers as $messenger)
                            <tr>
                                <td>{{$messenger->id}}</td>
                                <td>{{$messenger->name}}</td>
                                <td>{{$messenger->lastname}}</td>
                                <td>{{$messenger->email}}</td>
                                <td>{{$messenger->phone}}</td>
                                <td>{{$messenger->age}}</td>
                                <td>{{$messenger->province_id}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a class="btn btn-secondary" href="../messengers/{{$messenger->id}}/edit"><i class="fa fa-pencil"></i></a>
                                      <a class="btn btn-secondary" href="../messengers/{{$messenger->id}}"><i class="fa fa-eye"></i></a>

                                    </div>
                                </td>
                                <td>
                                    
                                    {!! Form::open(array('url' => route('messengers.destroy',['id'=>$messenger->id]),'method' => 'delete')) !!}

                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                    

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <a href="../messengers/create" type="button" class="btn btn-success">Agregar Nuevo</a>   
                        
                    {{ $messengers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
