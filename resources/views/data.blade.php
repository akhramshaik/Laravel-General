<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">




<div class="container">
  
  <table class="table table-bordered" id="users-table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
</div>

</body>
</html>
<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

</head>
<body>

<script type="text/javascript">
     $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://localhost:8000/get_data',
        columns: [
            {data: 'id'},
            {data: 'claim_reference_number_assigned_by_datarx'},
            {data: 'plan_type'},
            {data: 'action', name: 'action', orderable: false, searchable: false}

        ]
    });

     function editdata(data)
     {
       alert(data);
     }
</script>
