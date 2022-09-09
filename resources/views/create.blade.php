    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Task</h2>
    </header>

    <form method="POST" action="/tasks" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">

<select  id="admins-dropdown" class="form-control", name="assigned_by_id">

    <option value="">-- Select Admin --</option>

    @foreach ($admins as $data)

    <option value="{{$data->id}}">

        {{$data->name}}

    </option>

    @endforeach

</select>



      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2"> title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          value="{{old('company')}}" />

     
      </div>



      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
           Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="">{{old('description')}}</textarea>

      
      </div>
   

<div class="form-group mb-3">

<select  id="admins-dropdown" class="form-control", name="assigned_to_id">

    <option value="">-- Select Assigned User --</option>

    @foreach ($nonAdmins as $data)

    <option value="{{$data->id}}">

        {{$data->name}}

    </option>

    @endforeach

</select>

</div>
      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Create Task
        </button>

      </div>
    </form>