


@extends('layouts.admin')



@section('content')

<h1>Create User</h1>
{!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
<div class="form-group">
{!!Form::label('name','Name:')!!}
{!!Form::text('name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('email','Email:')!!}
{!!Form::email('email',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
{!!Form::label('role_id','Role:')!!}
{!!Form::select('role_id',[''=>'Choose Options'] + $roles,'',['class'=>'form-control'])!!}
<!--{!!Form::select('role_id',['1'=>'Administrator','2'=>'Author','3'=>'Subscriber'],1,['class'=>'form-control'])!!}-->
</div>

<div class="form-group">
{!!Form::label('is_active','Status:')!!}
{!!Form::select('is_active',['1'=>'Active','0'=>'Inactive'],0,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::file('photo_id',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('password','Password:')!!}
{!!Form::password('password',['class'=>'form-control'])!!}
</div>
<br>
<div class="form-group">
{!!Form::submit('Create Post',['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close()!!}

   @include('includes.form_error')
    
@endsection