<x-layout>



<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
<h1>LOGGATI</h1>



<form action="{{route('login')}}" method="POST">

@csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" value="{{old('email')}}"class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
</div>
</div>
</div>















</x-layout>
