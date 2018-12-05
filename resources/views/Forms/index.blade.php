@extends('layouts.app')

@section('content')

    <div class="col-12">

        {!! Form::open(['method' => 'get']) !!}

        <table class="table table-hover">
            <tr class="table-head">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            @foreach ($models as $model)
                <tr>
                    <td><a>{{ $model->id }}</a></td>
                    <td><a>{{ $model->name }}</a></td>
                    <td><a>{{ $model->email }}</a></td>
                    <td><a>{{ $model->subject }}</a></td>
                    <td><a>{{ $model->message }}</a>
                </tr>
            @endforeach
        </table>

        {!! Form::close() !!}
    </div>

@endsection
