
@foreach($tasks as $task)
    
  {{$task}}
@endforeach    


<div class="mt-6 p-4">
    {{$tasks->links()}}
  </div>
