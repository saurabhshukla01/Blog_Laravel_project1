<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<form class="container" action="{{ url('get_form/') }}" method="POST">
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
  <h2 class="text-center"> Fill Form </h2>
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
  <div class="form-group">
    <label for="select_opt">Example select</label>
    <select class="form-control" name="select_opt">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="file_name">Example file input</label>
    <input type="file" class="form-control-file" name="file_name">
  </div>
  <div class="form-group">
    <label for="txt">Example textarea</label>
    <textarea class="form-control" rows="3" name="txt"> Type here .....</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
