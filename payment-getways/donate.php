<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Payment Getways</title>
    <style>
        body{
            background: rgba(0, 0, 0, 0.7) url('img/img3.jpg');
            background-size: cover;
            background-blend-mode: darken;
        }
        .container {
            background-color: rgb(139, 241, 255);
            border-radius: 21px;
            padding: 30px 0px 30px 0px;
            width: 50%;
            margin: auto;
            margin-top: 50px;
        }
        
        h1 {
            text-align: center;
        }
        
        form {
            padding-right: 100px;
            padding-left: 100px;
        }
      
    </style>
</head>

<body>

    <div class="container" >
        <h1>Payment Getways</h1>
        <form action="payment.php" method="POST">
            <div class="mb-4">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" required placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email" required placeholder="Email address">
            </div>
            <div class="mb-4">
                <label for="Country" class="form-label">Contact</label>
                <input type="text" class="form-control" id="Contact" name="Contact" required placeholder="Contact">
            </div>
            <div class="mb-4">
                <label for="Amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="Amount" name="Amount" required placeholder="Amount">
            </div>

			    <input type="submit" class="btn btn-primary" value="Pay" onclick="Pay_Now()" />
            
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>