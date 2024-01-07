<!-- <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- 
<p>
    <button class='clickbutton'>Click Here</button>
</p>  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <!-- <script>
    $(function(){
        $("#frmPost").validate();
    });
</script> -->
<style>
    label.error{
        color:red;
    }
</style>

<?php

global $wpdb;
// *****Insert start***** //

// Insert methode1//

// $wpdb->insert(
//   "wp_custom_table",
//   array(
//     "name"=> "Junaet Faruk Rafi",
//     "email"=> "junaetfarukrafi@gmail.com",
//     "address"=> "Dhaka"
//   )
// );

// Insert methode2//

// $wpdb->query(
//   $wpdb->prepare(
//     "INSERT INTO wp_custom_table (name,email,address) VALUES('%s','%s','%s')","Rahat Sultana","rafee790@gmail.com","comilla"
//   )
// );
// *****Insert end***** //


// *****Update Start***** //

// Insert methode1//

// $wpdb->update(
// "wp_custom_table",
// array(
//   "name"=>"something",
// ),
// array(
//   'id'=>3
// )
// );

// Insert methode2//
// $wpdb->query(
//   $wpdb->prepare(
//     "UPDATE wp_custom_table set name ='%s' WHERE id = %d","kona",4
//   )
// );

// *****Update end***** //

// *****Delete start***** //

// Insert methode1//
// $wpdb->query(
//     $wpdb->prepare(
//       "DELETE from wp_custom_table where id = %d",5
//     )
//   );

// Insert methode2//
// $wpdb->delete(
// "wp_custom_table",
// array(
//   'id'=>3
// )
// );

// *****Delete end***** //
 ?>
 
</head>
<body>

<div class="container mt-3">
  <!-- <h2>Stacked form</h2> -->
  <form action="#" id="frmPost">

    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="text" placeholder="Your Name" name="name" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <!-- <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>