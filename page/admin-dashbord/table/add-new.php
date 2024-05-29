<?php
session_start();
?>
<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $item_name = $_POST['item_name'];
   $quantity = $_POST['quantity'];
   $status = $_POST['status'];
   $electonic_status = $_POST['electonic_status'];
   $purchase_date = $_POST['purchase_date'];
   $in_store_status = $_POST['in_store_status'];
   $handler = $_POST['handler'];


   $sql = "INSERT INTO `ati-store`(`item_id`, `item_name`, `quantity`, `status`, `electonic_status`,`purchase_date`, `in_store_status`, `handler`) VALUES ('','$item_name','$quantity','$status','$electonic_status','$purchase_date','$in_store_status','$handler')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: admin-dashbord.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- online fonts start -->
   <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold" rel="stylesheet">
   <!-- online fonts end -->

   <title>Item add</title>
</head>

<body>
   <?php
   include '../../../components/navbar/navbar.php';
   ?>

   <div class="container" style="margin-top:93px;">
      <div class="text-center mb-4">
         <h3>Add New item</h3>
         <p class="text-muted">Complete the form below to add a new item</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">

            <div class="col mb-3">
               <label class="form-label">Item Name:</label>
               <input type="text" class="form-control" name="item_name" placeholder="Hammer" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Quantity:</label>
               <input type="text" class="form-control" name="quantity" placeholder="01">
            </div>

            <div class="mb-3">
               <label class="form-label">Working status:</label>
               <input type="text" class="form-control" name="status" placeholder="Working/Repaired">

            </div>

            <div class="mb-3">
               <label class="form-label">Electronic status:</label>
               <input type="text" class="form-control" name="electonic_status" placeholder="Electronic/Non electronic">
            </div>

            <div class="mb-3">
               <label class="form-label">Purchase date:</label>
               <input type="date" class="form-control" name="purchase_date" placeholder="1999-06-22">
            </div>



            <div class="mb-3">
               <label class="form-label" for="in_store_status">In store status</label>
               <select class="form-select" name="in_store_status" id="member_type">
                  <option value="In-the-store" selected>In the store</option>
                  <option value="out-of-the-store">out of the store</option>
               </select>
            </div>

            <div id="occupationInput" class="mb-3">
               <label class="form-label" for="occupation">Handler:</label>
               <input type="text" class="form-control" name="handler" id="occupation">
            </div>

            <div class="mb-3">
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="admin-dashbord.php" class="btn btn-danger ">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>