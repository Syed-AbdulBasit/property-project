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



<div class="col-md-4 ftco-animate">
            <div class="block-7">
              <div class="img" style="background-image: url(admin/uploads/files/'.$row["Inv_Image"].');"></div>
              <div class="p-4">
                <h2>'.$row["Inv_Name"].'</h2>
                <h6><strong>Location:</strong>'.$row["Inv_Loaction"].'</h6>
                <p>'.$row["Inv_Desc"].'</p>
              </div>
              <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                <span class="price"><sup>$</sup> <span class="number">88</span> <sub>/mos</sub></span>
                <p class="w-100 mb-0">
                  <a href="view_details.php?dep_details='.$row['ID'].'" class="btn btn-primary d-block px-2 py-3">See More</a>
                </p>
              </div>
            </div>
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