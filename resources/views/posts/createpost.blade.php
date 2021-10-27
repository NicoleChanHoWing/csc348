@include('commons.head')
<h1>Creating a New Post</h1>
<br>
<form action="{{url('/posts')}}" method="post">
@csrf
<input style="display: none;" type="text" name="userid" id="userid" value="1">

<div class="form-group col-6">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title">
</div>
<br>

<div class="form-group col-6">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
</div>
<br>

<div class="form-group col-6">
    <input  class="btn btn-primary samebuttonwith" type="submit" value="Save" id="save">
</div>


</form>

<a class="btn btn-secondary " href="{{url('posts')}}">Back to Posts List</a>
