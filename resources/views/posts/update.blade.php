@include('commons.head')
<h1>Updating Post</h1>
<form action="{{url('/posts/'.$post->id)}}" method="post">
@csrf
{{method_field('PUT')}}
<input style="display: none;" type="text" name="userid" id="userid" value="1">

<div class="form-group col-6">
    <label for="id">ID</label>
    <input class="form-control" disabled type="text" name="id" id="id" value="{{$post->id}}">
</div>
<br>

<div class="form-group col-6">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
</div>
<br>

<div class="form-group col-6">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
</div>
<br>

<div class="form-group col-6">
    <input class="btn btn-primary samebuttonwith" type="submit" value="Save" id="save">
</div>
</form>

<a class="btn btn-secondary " href="{{url('posts')}}">Back to Posts List</a>
