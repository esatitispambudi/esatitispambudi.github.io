@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">
                    <form method="POST" action="/user/{{$user -> id}}/update">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user -> name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user -> email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Batas Waktu</label>

                            <div class="col-md-6">
                            <input type="datetime-local"  class="form-control" id="birthdaytime" name="batas_waktu">
                            </div>
                        </div>





                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Type</label>

                            

                            <div class="col-md-6">
                            
                                <select class="form-control" aria-label="Default select example" name="type" value="{{$user -> email}}">
                                <option value="Customer" @if($user -> Type == "Customer") selected @endif >Customer</option>
                                <option value="Admin" @if($user -> Type == "Admin") selected @endif >Admin</option>
                               
                                </select>
                                                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
