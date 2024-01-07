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
<style>
    label.error{
        color:red;
    }
</style>
</head>
<body>

<div class="container mt-3">
  <!-- <h2>Stacked form</h2> -->
  <form action="#" id="frmOther">

    <div class="mb-3 mt-3">
      <label for="name">Username:</label>
      <input type="text" class="form-control" id="text" placeholder="Your Name" name="name" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>