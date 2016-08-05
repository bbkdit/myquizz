@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        <div class="form-login">
        {!! Form::open(['url'=>'formsubmit']) !!}
            
            <h4>Welcome </h4>
            {!!   Form::text('username',null,array('class'=> 'form-control input-sm chat-input','placeholder'=>'username') ) !!}<br>
            
            <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            {!!  Form::submit('login',array('class'=>'btn btn-primary btn-md'))  !!} 
            {!!  Html::link('register','register')!!}
            </div>
            {!! Form::close() !!}
            
            </div>
        
        </div>
    </div>
</div>

@endsection


