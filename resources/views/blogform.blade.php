<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<form class="container" action="{{ url('get_blog/') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <h2 class="text-center"> Fill Blog Form </h2>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" class="form-control" name="description"> </textarea>
  </div>
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
  </div>
  <div class="form-group">
    <label for="product_price">Product Price</label>
    <input type="text" class="form-control" name="product_price" placeholder="Enter Price Of Product">
  </div>
  <div class="form-group">
    <label for="file_name">Blog Image</label>
    <input type="file" class="form-control-file" name="blog_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
