<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajax CRUD</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ajax CURD</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <br />
      <div align="right">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Thêm mới</button>
      </div>
      <br />
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="user_table" style="text-align: center;">
          <thead>
            <tr>
              <th style="text-align: center;" width="10%">Hình Ảnh</th>
              <th style="text-align: center;" width="35%">Họ</th>
              <th style="text-align: center;" width="35%">Tên</th>
              <th style="text-align: center;" width="30%">Hành Động</th>
            </tr>
          </thead>
        </table>
      </div>
      <br />
      <br />
    </div>
  </body>
</html>

<script>
$(document).ready(function(){

 $('#user_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('ajax-crud.index') }}",
  },
  columns:[
   {
    data: 'image',
    name: 'image',
    render: function(data, type, full, meta){
     return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
    },
    orderable: false
   },
   {
    data: 'first_name',
    name: 'first_name'
   },
   {
    data: 'last_name',
    name: 'last_name'
   },
   {
    data: 'action',
    name: 'action',
    orderable: false
   }
  ]
 });

});
</script>