@extends('layouts.main')

@section('content')
  <div class="content">
    <h1>Users</h1>
    @foreach ($users as $user)
      <section>
        <h2>{{ $user->email }}</h2>
        <p>id: {{ $user->id }}</p>
        <p>Password: {{ $user->password }}</p>
        <p>{{ $user->company_name }}</p>
        <p>Website: {{ $user->website }}</p>
        <p>Tax ID: {{ $user->tax_id }}</p>
      </section>
    @endforeach
  </div>
@stop
