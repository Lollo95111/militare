<x-layout>



<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
<h1>REgistrati</h1>
@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      <p>{{$error}}</p>
    </div>
@endforeach
@endif


<form action="{{route('register')}}" method="POST">

  @csrf
<div class="mb-3">
    <label class="form-label">nome</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password"  class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Conferma Password</label>
    <input type="password" name="password_confirmation" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
</div>
</div>




</x-layout>
