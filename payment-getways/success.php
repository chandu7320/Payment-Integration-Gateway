<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Payment Success</title>

</head>

<body>
  <h1>Payment Success</h1>
  <?php

  $name = $_POST['Name'];
  $id = "UID_CgmcjRh9ti2lP7";
  $to_email = $_POST['Email'];
  $subject = "Donation Success";
  $body = <<<EOT
  ThankYou, 
      $name. 
  
  Your Donation successfully receive.
  Your Transaction id : "$id".
  For Any Quary Contact 82******19

  EOT;
  $headers = "From: r45rahul45@gmail.com";

  if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
  } else {
    echo "Email sending failed...";
  }

  ?>

  <table class="table" style="width: auto; margin: auto; ">

    <tbody>
      <tr>
        <td>Name</td>
        <td><?php echo $_POST['Name'];  ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $_POST['Email'];  ?></td>
      </tr>
      <tr>
        <td>Contact</td>
        <td><?php echo $_POST['Contact'];  ?></td>
      </tr>
      <tr>
        <td>Transaction id</td>
        <td><?php echo "UID_CgmcjRh9ti2lP7"  ?></td>
      </tr>


    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>