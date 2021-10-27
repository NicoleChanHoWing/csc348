@include('commons.head')

<h1>Commenting Post</h1>
<div class="form-group col-6">
    <label for="id">ID:</label>
    <input class="form-control" disabled type="text" name="id" id="id" value="{{$post->id}}">
</div>
<br>

<div class="form-group col-6">
    <label for="title">Title:</label>
    <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
</div>
<br>

<div class="form-group col-6">
    <label for="content">Content:</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
</div>
<br>

<h3>Comments List</h3>
<br>
@foreach($comments as $comment)
<div class="form-group col-6">
    <div class="card">
        <h5 class="card-header h5">User:{{$comment->userid}}--Create At:{{$comment->created_at}} </h5>
        <div class="card-body">
            <p class="card-text">{{$comment->descripcion}}</p>
        </div>
    </div>
</div>
@endforeach

<form action="{{url('/comment/'.$post->id)}}" method="post">
@csrf

<input style="display: none;" type="text" name="userid" id="userid" value="1">
<input style="display: none;" type="text" name="id_post" id="id_post" value="{{$post->id}}">

<div class="form-group col-6">

    <label for="descripcion">Comment:</label>
    <br>
    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
</div>
<br>

<div class="form-group col-6">
    <input  class="btn btn-primary samebuttonwith" type="submit" value="Save Comment" id="save">
</div>
</form>

<a class="btn btn-secondary " href="{{url('posts')}}">Back to Posts List</a>
