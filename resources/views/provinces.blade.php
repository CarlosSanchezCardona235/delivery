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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($provinces as $province)
                            <tr>
                                <td>{{$province->id}}</td>
                                <td>{{$province->name}}</td>
                                <td>{{$province->code}}</td>
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
