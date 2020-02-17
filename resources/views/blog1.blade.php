<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<h2 class="text-center">Database Table Information </h2><br>
<table id="" class="table table-striped table-bordered table-sm container" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">id</th>
      <th class="th-sm">name</th>
      <th class="th-sm">email</th>
      <th class="th-sm">password</th>
      <th class="th-sm">Action</th>
    </tr>
  </thead>
  <tbody>
        @if(!empty($blog) && $blog->count())
            @foreach($blog as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->password }}</td>
                    <td>
                        <button class="btn btn-info">Add</button>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>
        @endif
    </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    {!! $blog->links() !!}
  </ul>

</nav>

