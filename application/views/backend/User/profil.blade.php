@extends('template.backend.template')
@section('content')

<br>
@if($notif != null)
    <div class="alert alert-info" role="alert">
    {{ $notif }}
    </div>
@endif
<br>
<form method="post" action="{{ current_url() }}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection