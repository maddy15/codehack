
@extends('admin.index')



@section('content')
<h1>user edit</h1>
<div class="row">
<div class="col-sm-3">
    <img src="{{$user->photo_id ? $user->photo->file: 'http://via.placeholder.com/350x350' }}" alt="" class="img-responsive img-rounded">
</div>
<div class="col-sm-9">
{!!Form::model($user,['method'=>'PUT','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}
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
{!!Form::select('role_id',$roles,null,['class'=>'form-control'])!!}
<!--{!!Form::select('role_id',['1'=>'Administrator','2'=>'Author','3'=>'Subscriber'],1,['class'=>'form-control'])!!}-->
</div>

<div class="form-group">
{!!Form::label('is_active','Status:')!!}
{!!Form::select('is_active',['1'=>'Active','0'=>'Inactive'],null,['class'=>'form-control'])!!}
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
{!!Form::submit('Edit Post',['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close()!!}
</div>
  </div>
   @include('includes.form_error')
@endsection