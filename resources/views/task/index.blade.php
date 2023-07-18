<h2>All tasks</h2>

<table>
    <thead>
    <tr>
        <th>name</th>
        <th>Due date</th>
        <th>Priority</th>
        <th>Priority</th>
    </tr>
    </thead>

    <tbody>
    @foreach($tasks as $task)
        <tr>
            <th>{{$task->name}}</th>
            <th>{{$task->due_date}}</th>
            <th>{{$task->priority}}</th>
            <th><a href="{{route('tasks.complete',$task->name)}}">Complete</a></th>
        </tr>
    @endforeach
    </tbody>
</table>
