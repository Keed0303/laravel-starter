@extends('layouts.app')

@section('content')
  <div class="p-4">
    <a href="/user/create"
        class="bg-blue-200 text-blue-500 px-3 py-2 hover:bg-blue-300 hover:text-blue-600 rounded">Create User</a>
  </div>

  <table class="min-w-full bg-white border border-gray-200">
    <thead class="bg-gray-100">
      <tr>
        <th scope="col" class="px-6 py-2 text-left border-b border-gray-200"><a href=""
                class="text-gray-700">ID</a></th>
        <th scope="col" class="px-6 py-2 text-left border-b border-gray-200"><a href=""
                class="text-gray-700">Name</a></th>
        <th scope="col" class="px-6 py-2 text-left border-b border-gray-200"><a href=""
                class="text-gray-700">Permission</a></th>
        <th scope="col" class="px-6 py-2 text-left border-b border-gray-200"><a href=""
                class="text-gray-700">Action</a></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $key => $role)
        <tr class="bg-white border-b border-gray-200">
          <td class="px-6 py-2 text-left">{{ $key }}</td>
          <td class="px-6 py-2 text-left">{{ $role->name }}</td>
          <td class="px-6 py-2 text-left">{{ $role->permission_id }}</td>
          <td class="px-6 py-2 text-left">
            <div class="flex items-center space-x-2">
                {{-- <a href="{{ route('user.show', ['user' => $user->id]) }}" class="text-blue-500 hover:bg-blue-200">View</a> --}}
              <a href="" class="text-blue-500 hover:bg-blue-200">View</a>
              {{-- <a href="{{ route('user.edit', ['user' => $user]) }}" class="text-yellow-500 hover:bg-yellow-200">Update</a> --}}
              <a href="" class="text-yellow-500 hover:bg-yellow-200">Update</a>

                {{-- <form  class="text-red-500 hover:bg-red-200" method="post" action="{{ route('user.destroy', ['user' => $user]) }}">
          @csrf
          @method('delete')
          <input type="submit" value="delete">
          </form> --}}
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
