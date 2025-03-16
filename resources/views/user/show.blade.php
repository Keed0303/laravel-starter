@extends('layouts.app')

@section('content')
  <table>
    <tr class="bg-white border-b border-gray-200">
      <th class="px-6 py-2 text-left bg-slate-500">Accounts</th>
    </tr>
    @foreach($user->getAttributes() as $key => $value)
      <tr class="bg-white border-b border-gray-200">
        <th class="px-6 py-2 text-left bg-slate-500">{{ ucfirst($key) }}</th>
        <td class="px-6 py-2 text-left bg-slate-400">{{ $value }}</td>
      </tr>
    @endforeach
    </tr>
  </table>

  

@endsection