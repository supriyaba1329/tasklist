@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')

<nav class="mb-4">
<a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
  </nav>

<!-- @if (count($tasks)>0)
      @foreach($tasks as $task)
      <div> {{ $task->title }}</div>
      @endforeach
    @else
    <div> There is no tasks </div>
    @endif -->

<!-- ____________both code same works____________ -->
@forelse($tasks as $task)
<div>
 
  <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
        @class(['line-through' => $task->completed])>{{ $task->title }}</a>
</div>
@empty
<div> there is no tasks </div>
@endforelse

<!-- @isset($name)
    <div>The name is: {{ $name }}</div>
    @endisset -->

@if ($tasks->count())
<nav class="mt-4">
  {{ $tasks->links() }}
</nav>
@endif
@endsection