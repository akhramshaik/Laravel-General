<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <!-- <p>The .table-bordered class adds borders to a table:</p>             -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->claim_reference_number_assigned_by_datarx}}</td>
        <td>{{$user->pharmacy_city}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>

  {!! $data->links() !!}

  
</div>

</body>
</html>
