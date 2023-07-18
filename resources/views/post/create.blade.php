<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="title" id="title">

    <label for="body">body</label>
    <input type="text" name="body" placeholder="body" id="body">

    <label for="User_id">User_id</label>
    <input type="text" name="user_id" placeholder="user_id">

    <button type="submit">submit</button>
</form>
