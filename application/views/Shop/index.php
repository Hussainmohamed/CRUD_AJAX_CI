<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <link href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Add Products</h2>  
  <form class="form-inline" action="Shop/add_product" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="sr-only" for="email">Product Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name"  name="name">
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Product Category</label>
      <select class="form-control" name="category">
          <option value="">Select Category</option>
          <?php foreach($category as $row){ ?>
            <option value="<?php echo $row['Cname']; ?>"><?php echo $row['Cname']; ?></option>
          <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Product Price</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Price"  name="price">
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Product Images</label>
     <input class="form-control" multiple type="file" name="images[]" />
    </div>
   
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<table id="example" class="table table-responsive">
            <thead>
            <tr>
              <th>Images</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($records as $row){ ?>
            <tr>
              <td><?php $img=explode(",",$row['Images']);              
              foreach($img as $i){             
              ?>
              <ul type="none">
                <li><img src="../assets/images/<?php echo $i; ?>" width="50px" height="50px" /></li>
              </ul>              
              <?php } ?></td>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['Category']; ?></td>
              <td><?php echo $row['Price']; ?></td>
              <td><a href="javascript:void(0)" data-id="<?php echo $row['Id']; ?>" class="btn btn-info" >Edit</a></td>
              <td><a href="javascript:void(0)" data-id="<?php echo $row['Id']; ?>" class="btn btn-danger" >Delete</a></td>
            </tr>
            <?php } ?>
          </tbody>

</table>

</body>
</html>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src=""></script>
<script src=""></script>
<script>
  $(document).ready( function () {
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
             'excel', 'pdf'
        ]
    });
} );
  </script>