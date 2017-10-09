
@extends('layouts.admin')



@section('content')

<h1>Users</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        
      </tr>
    </thead>
    <tbody>
@if($users)
@foreach($users as $user)
    <tr>
       <td>{{$user->id}}</td>
       <td>{{$user->name}}</td>
       <td>{{$user->email}}</td>
       
       @if(!$user->role_id)
          <td> {{'No role'}}</td>
        @else
        <td>{{$user->role->name}}</td>
       @endif
       
       <td>{{$user->is_active ? 'Active' : 'Inactive'}}</td>
       <td>{{$user->created_at->diffForHumans()}}</td>
       <td>{{$user->updated_at->diffForHumans()}}</td>
       
       
    </tr>
    
@endforeach
@endif
</tbody>
  </table>
@endsection