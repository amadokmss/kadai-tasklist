@extends('layouts.app')

@section('content')
    @if (Auth::check())
    
        {{ Auth::user()->name }}の
        <h1>タスク一覧</h1>
        
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {{ $tasks->links('pagination::bootstrap-4') }}
        {!! link_to_route('tasks.create', 'New Task', [], ['class' => 'btn btn-primary']) !!}
        
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskLists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
