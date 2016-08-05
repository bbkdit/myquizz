@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        <div class="form-login">
        {!! Form::open(['url'=>'formsubmit']) !!}
            
            <h4>Register Here </h4>
            {!!   Form::text('username',null,array('class'=> 'form-control input-sm chat-input','placeholder'=>'username') ) !!}<?php echo ($errors->first('username',"<li class='error'>:message</li>")); ?><br>
             {!!   Form::text('email',null, array('class'=> 'form-control input-sm chat-input','placeholder'=>'email'))  !!}
             <?php
             echo ($errors->first('email',"<li class='error'>:message</li>")); ?><br>
             {!! Form::password('password','', array('class'=> 'form-control input-sm chat-input','placeholder'=> 'passw')) !!}
             <?php echo ($errors->first('password',"<li class='error'>:message</li>")); ?><br><br>
            <div class="wrapper">
            {!!  Form::submit('Register',array('class'=>'btn btn-primary btn-md'))  !!} 
            </div>
            {!! Form::close() !!}
            </div>
            
                    </div>
    </div>
</div>
@if(Session::has('success'))
    Successfully inserted!!
@endif

@if(Session::has('error'))
  Failed Try again!!
@endif
<?php
//foreach ($errors->get('username') as $error); 
//foreach ($errors->get('email') as $error); 
//foreach ($errors->get('password') as $error); 

//echo ($errors->first('email',"<li class='error'>:message</li>"));
//echo ($errors->first('username',"<li class='error'>:message</li>"));
//echo ($errors->first('password',"<li class='error'>:message</li>"));
?>

@endsection
