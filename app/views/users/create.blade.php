@extends('layouts.master')

@section('head')
   @parent
   {{ HTML::style('css/datatables/dataTables.bootstrap.css'); }}
@stop

@section('content-header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <i class="fa fa-users"></i> Users <small>Control panel</small> </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ URL::to('system_setup/users') }}"><i class="fa fa-users"></i> Users</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
@stop

@section('content')

    <section class="content invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">Add a User</h2>
            </div><!-- /.col -->
        </div>

        @if(Session::has('flash_error'))
        <div class="row">
            <div class="col-xs-12">
                <div class="callout callout-danger">
                    <h4>Error!</h4> <br/>
                    {{ HTML::ul($errors->all()) }}
                </div>
            </div>
        </div>
        @endif

        {{ Form::open(array('url'=> 'system_setup/users','method'=>'post')) }}
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <fieldset>
                            <legend>Login info </legend>
                            
                            <div class="form-group">
                                {{ Form::label('username','Username') }}
                                {{ Form::text('username',Input::old('username'),array('class'=>'form-control','placeholder'=>'Enter username')) }}
                            </div>
                            
                            
                            <div class="form-group">
                                {{ Form::label('email','Email Address') }}
                                {{ Form::text('email',Input::old('email'),array('class'=>'form-control','placeholder'=>'Enter email address')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('password','Password') }}
                                <input name="password" type="password" value="" class="form-control" id="password">     
                            </div>
                                        
                            <div class="form-group">
                                {{ Form::label('confirmpassword','Confirm Password') }}
                                <input name="confirmpassword" type="password" value="" class="form-control" id="confirmpassword">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <fieldset>
                            <legend>Personal info </legend>
                            
                            <div class="form-group">
                                {{ Form::label('first_name','First Name') }}
                                {{ Form::text('first_name',Input::old('first_name'),array('class'=>'form-control','placeholder'=>'Enter first name')) }}
                            </div>
                                        
                            <div class="form-group">
                                {{ Form::label('last_name','Last Name') }}
                                {{ Form::text('last_name',Input::old('last_name'),array('class'=>'form-control','placeholder'=>'Enter last name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('gender','Gender') }}
                                {{ Form::select('gender', $gender, Input::old('gender'),array('class'=>'form-control','placeholder'=>'Enter gender')) }}
                            </div>
                            
                            
                            
                            <div class="form-group">
                                {{ Form::label('role','Role') }}
                                {{ Form::select('role', $roles, Input::old('role'),array('class'=>'form-control','placeholder'=>'Enter role')) }}
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-6">
                <div class="box-footer">
                    {{ Form::submit('Create User',array('class'=>'btn btn-primary','id'=>'submit')) }}
                </div>
            </div>
        </div>
        {{ Form::close() }}

    </section>
@stop                            
