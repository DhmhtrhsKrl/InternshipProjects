<?php 

include 'connectdb.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>  
        function showHint(str) {  
            if (str.length == 0) {  
                if (this.readyState == 4 && this.status == 200) {  
                document.getElementById("txtHint").innerHTML = this.responseText;  
                }  
                xmlhttp.open("GET", "servercrud.php?q=" + str, true);  
                xmlhttp.send(); 
            } else {  
                var xmlhttp = new XMLHttpRequest();  
                xmlhttp.onreadystatechange = function() {  
                if (this.readyState == 4 && this.status == 200) {  
                document.getElementById("txtHint").innerHTML = this.responseText;  
                }  
                };  
        xmlhttp.open("GET", "servercrud.php?q=" + str, true);  
        xmlhttp.send();  
        }  
    }  
</script>  
</head>
<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"> 
            <a href="createuser.php" class="text-light"> Add User</a>
        </button>
    </div>

    <form action="">  
        <label for="fname">Name:</label>  
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">  
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
               
            </tr>
        </thead>
        <tbody id="txtHint">

            <?php
                $sql="Select * from `ajaxtable`";
                $result=mysqli_query($con,$sql);
                
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id= $row['id'];
                        $name= $row['name'];
                        $category= $row['category'];
                        

                        echo '<tr>
                        <th scope="row">'.$id. '</th>
                        <td>'.$name. '</td>
                        <td>'.$category.'</td>
                        <td>
                        <button class="btn btn-primary"><a class="text-light" href="edituser.php? updateid='.$id.'">Update</a></button>
                        <button class="btn btn-danger"><a class="text-light" href="deleteuser.php? deleteid='.$id.'">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }
            ?>

           
        </tbody>
    </table>
</body>

</html>