<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP voting system</title>
    <!-- bootstrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class=  "text-info text-center p-3">Voting system</h1>
    <div class="bg-info">
        <h2 class="text-center">Login</h2>
        <div class="container text-center" >
            <form action="">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control w-50 m-auto" placeholder="Enter your Username" required= "required">
                </div>

                <div class="mb-3">
                    <input type="text" name="mobile" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required= "required" maxLength="10" minLength="10">
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control w-50 m-auto" placeholder="Enter your password" required= "required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-control w-50 m-auto" >
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-dark my-4">Login</button>
            <p>Dont have an account? <a href="#" class="text-white">Register here</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>