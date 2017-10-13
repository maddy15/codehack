
@extends('layouts.admin')



@section('content')

@if(Session::has('message'))
    <p class="bg-success">{{session('message')}}</p>
@endif
<h1>Users</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <td>Profile</td>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
@if($users)
@foreach($users as $user)
    <tr>
       <td>{{$user->id}}</td>
<!--
       @if(!$user->photo_id)
        <td>{{'No Photo'}}</td>
        @else
        <td><img src="../{{$user->photo->file}}" alt="" width="100px" height="100px" class="img-responsive"></td>
       @endif
-->
       <td><img src="{{$user->photo_id ? $user->photo->file: 'http://via.placeholder.com/350x350' }}" alt="" width="100px" height="100px" class="img-responsive"></td>
       <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
       <td>{{$user->email}}</td>
       
       @if(!$user->role_id)
          <td> {{'No role'}}</td>
        @else
        <td>{{$user->role->name}}</td>
       @endif
       
       <td>{{$user->is_active ? 'Active' : 'Inactive'}}</td>
       <td>{{$user->created_at->diffForHumans()}}</td>
       <td>{{$user->updated_at->diffForHumans()}}</td>
       <td>
           {{Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]])}}
           {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
           
           {{Form::close()}}
       </td>
       
    </tr>
    
@endforeach
@endif
</tbody>
  </table>
@endsection