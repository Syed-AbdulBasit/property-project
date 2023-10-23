<?php
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "admin1");

include "admin/includes/connection.php";

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM inventory 
  WHERE Inv_Name LIKE '%".$search."%'
  OR Inv_Loaction LIKE '%".$search."%'
  OR Inv_Desc LIKE '%".$search."%'
  OR Inv_Details LIKE '%".$search."%'
  OR Inv_Image LIKE '%".$search."%' 

 ";
}
else
{
 $query = "
  SELECT * FROM inventory ORDER BY ID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="row">
  
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '











                <div class="col-md-4">

               <li>
    <a href="inventory_details.php?View_inv='.$row["ID"].'" class="card">
      <img src="admin/uploads/files/'.$row["Inv_Image"].'" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h2 class="card__title">'.$row["Inv_Name"].'</h2>
          </div>
        </div>

      <span class="card__description"><strong>Location:</strong> '.$row["Inv_Loaction"].' </span>

          <div class="row">
    <div class="col-6">
      <span class="card__description"><strong>Colony:</strong> '.$row["Inv_Colony"].'</span>
    </div>
    <div class="col-6">
      <span class="card__description"><strong>Area:</strong><br> '.$row["Inv_Area"].'</span>
    </div>

  </div>
        <p class="card__description"><strong>See Details</strong></p>

      </div>
    </a>
  </li>  

</div>






   
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>