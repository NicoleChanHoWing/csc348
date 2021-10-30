@include('commons.head')
<h1>Posts List</h1>
<h5>Welcome {{$user->name}}</h5>
<br>
<a class="btn btn-primary samebuttonwith newpost float-right" href="{{url('posts/create')}}">New Post</a>
<a class="btn btn-primary samebuttonwith newpost float-right" href="{{url('logout')}}">Log out</a>
<br>

<table class="table table-light table-striped">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>UserID</th>
            <th>Created At</th>
            @if ($user->usertype==2)
            <th>Qty Views</th>
            <th>Qty Comments</th>
            @endif
            <th>Comment Post</th>
            <th>Edit Post</th>
            <th>Delete Post</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->userid}}</td>
            <td>{{$post->created_at}}</td>
            @if ($user->usertype==2)
            <td>{{$post->views}}</td>
            <td>{{$post->comments}}</td>
            @endif
            <td> <a class="btn btn-primary samebuttonwith" href="{{url('/posts/'.$post->id)}}">Comment Post</a></td>
            <td><a class="btn btn-primary samebuttonwith" href="{{url('posts/'.$post->id.'/edit')}}">Edit Post</a></td>
            <td>
                <form action="{{url('posts/'.$post->id)}}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input class="btn btn-primary samebuttonwith" type="submit" onclick="return confirm('Do you really want to delete the Post?')" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
