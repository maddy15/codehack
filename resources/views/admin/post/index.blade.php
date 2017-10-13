@extends('layouts.admin')


@section('content')
<h1>Posts</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Owner</th>
        <th>Category</th>        
        <td>Title</td>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
@if($posts)
@foreach($posts as $post)
    <tr>
       <td>{{$post->id}}</td>
       <td><img src="{{$post->photo_id ? $post->photo->file: 'http://via.placeholder.com/350x350' }}" alt="" width="100px" height="100px" class="img-responsive"></td>
       <td>{{$post->user->name}}</td>
       <td>{{$post->category_id}}</td>
       <td>{{$post->title}}</td>
       <td>{{$post->body}}</td>
       <td>{{$post->created_at->diffForHumans()}}</td>
       <td>{{$post->updated_at->diffForHumans()}}</td>
       <td>
           {{Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]])}}
           {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
           
           {{Form::close()}}
       </td>
       
    </tr>
    
@endforeach
@endif
</tbody>
  </table>
@endsection