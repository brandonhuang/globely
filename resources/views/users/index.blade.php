@extends('layouts.main')

@section('content')
  <section>
    <div class="content">
      <h1>Users</h1>
    </div>
  </section>
  @foreach ($users as $user)
    <section>
      <div class="content">
        <h2>{{ $user->email }}</h2>
        <p>Type: {{ $user->type }}</p>
        <p>id: {{ $user->id }}</p>
        <p>Password: {{ $user->password }}</p>
        <p>{{ $user->company_name }}</p>
        <p>Website: {{ $user->website }}</p>
        <p>Tax ID: {{ $user->tax_id }}</p>
      </div>
    </section>
  @endforeach
@stop
