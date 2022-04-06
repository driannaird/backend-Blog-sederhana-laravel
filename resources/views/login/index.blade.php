@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center">
                Not register? <a href="/register">
                    Regis siki
                </a>
            </small>
          </main>
    </div>
</div>
@endsection