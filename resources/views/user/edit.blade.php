@extends('layouts.app')

@section('content')
  <form action="{{ route('user.update', ['user' => $user]) }}" method="post" class="flex flex-col px-4 ">
    @csrf
    @method('put')
    <div class="flex flex-col">
      <label for="">Name</label>
      <input type="text" name="name" id="name" value="{{ $user->name }}" class=" active:border-blue-500 border border-slate-300 h-10 mb-1 pl-4">
    </div>

    <div class="flex flex-col">
      <label for="">Email</label>
      <input type="email" name="email" id="" value="{{ $user->email }}" class="border border-slate-300 h-10 mb-3  pl-4">
    </div>

    <div class="flex flex-col">
      <label for="">Password</label>
      <input type="text" name="" id="" class="border border-slate-300 h-10 mb-3  pl-4">
    </div>
    <div class="flex flex-col">
      <label for="">Confirm Password</label>
      <input type="text" name="" id="" class="border border-slate-300 h-10 mb-3  pl-4">
    </div>

    <button type="submit" class="bg-blue-200 text-blue-500 hover:bg-blue-300 hovertext-blue-600 px-5 py-2 w-28 rounded-lg">Submit</button>
  </form>
@endsection