@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estados</div>

                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>code</th>
                                <th>Actions</th>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($provinces as $province)
                            <tr>
                                <td>{{$province->id}}</td>
                                <td>{{$province->name}}</td>
                                <td>{{$province->code}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                      <a class="btn btn-secondary" href="../provinces/{{$province->id}}/edit"><i class="fa fa-pencil"></i></a>
                                      <a class="btn btn-secondary" href="../provinces/{{$province->id}}"><i class="fa fa-eye"></i></a>

                                    </div>
                                </td>
                                <td>
                                    
                                    {!! Form::open(array('url' => route('provinces.destroy',['id'=>$province->id]),'method' => 'delete')) !!}

                                    <button type="submit"><i class="fa fa-trash"></i></button>
                                    

                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $provinces->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
