@extends('layouts.app') @section('content')

    <div class="col-10">
        {{-- main details --}}
        <div class="card card-pad">
            <div class="card-header">Invoice Details</div>
            <div class="card-body">
                {!! Form::open(['url' => url('/messages'), 'class' => 'md-form']) !!}
                <table class="table table-hover">
                    <tr>
                        <th>Name</th>
                        <td><input class="form-control" type="text" name="name"
                                   value="{{ old('name') }}"/>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input class="form-control" type="email" name="email"
                                   value="{{ old('email') }}"/>
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td><input class="form-control" type="text" name="subject"
                                   value="{{ old('subject') }}"/>
                            @if ($errors->has('subject'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><textarea name="message" cols="200" rows="5" value="{{ old('message') }}">

                            </textarea>
                            @if ($errors->has('message'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </td>
                    </tr>
                </table>
                <input type="submit" class="btn btn-success" value="Save" style="margin: 5px">
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection
