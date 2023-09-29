<?php 

    include 'connectdb.php';

    if(isset($_POST['submit'])){
    
        
        // this variables get the values from the input elements of the website 
        $name=$_POST['name'];
        $category=$_POST['category'];
        

        //insert query to insert form data to our database 
        $sql = "insert into `ajaxtable` (name,category) values('$name','$category')"; 

        
        //method that allows us to execute the query
        $result =mysqli_query($con,$sql);

        if($result){
            header('location:users.php');
            //echo "Data inserted succesfully";
        }else{
            die(mysqli_error($con));
        }
    }

    
?>

<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
        <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <div class="container my-5">
                <form method="post">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" placeholder="Enter your category" name="category" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        
        </body>
    </html>