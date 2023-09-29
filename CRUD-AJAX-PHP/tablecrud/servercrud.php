<?php 

include "connectdb.php";

// fetch q parameter from URL  
$q = $_REQUEST["q"];  
  
$hint = "";  

$context="";

$sql="Select * from `ajaxtable`";
$result=mysqli_query($con,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id= $row['id'];
      $name= $row['name'];
      $category=$row['category'];
      if ($q !== "") {  
        $q = strtolower($q);  
        $len=strlen($q);  
  
        
        if (stristr($q, substr($row['name'], 0, $len))) {  
            
              $context = '<tr>
              <th scope="row">'.$id. '</th>
              <td>'.$name. '</td>
              <td>'.$category.'</td>
              <td>
              <button class="btn btn-primary"><a class="text-light" href="update.php? updateid='.$id.'">Update</a></button>
              <button class="btn btn-danger"><a class="text-light" href="delete.php? deleteid='.$id.'">Delete</a></button>
              </td>
              </tr>';
            
            echo $context;
           
        }
      }elseif($q==""){

            $context = '<tr>
                <th scope="row">'.$id. '</th>
                <td>'.$name. '</td>
                <td>'.$category.'</td>
                <td>
                <button class="btn btn-primary"><a class="text-light" href="update.php? updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="delete.php? deleteid='.$id.'">Delete</a></button>
                </td>
                </tr>';
        
            echo $context;

    }    
   }
  }
  
?>