@foreach($todos as $todo)
    <li id="{{$todo->id}}">
        <a href="#" onclick="task_done('{{$todo->id}}');" class="toggle"></a>
        <span id="span_{{$todo->id}}">{{$todo->title}}</span>
        <a href="#" onclick="task_done('{{$todo->id}}');"><i class="fa fa-check-square"></i> Done</a>
        <a href="#" onclick="delete_task('{{$todo->id}}');"><i class="fa fa-trash-o fa-lg"></i> Delete</a>
        <a href="#" onclick="edit_task('{{$todo->id}}','{{$todo->title}}');"><i class="fa fa-pencil fa-fw"></i> Edit</a>
    </li>
@endforeach