<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<form class="container" action="{{ url('/login_check/') }}" method="POST">
  @csrf
  @if($errors->any())
      <div class="alret alert-danger">
          <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <h2 class="text-center"> Login Form </h2>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter the name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="password">Enter Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter the Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
