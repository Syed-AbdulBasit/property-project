<?php

session_start();

include "connection.php";

$update=false;
$id=0;
$Category_Name="";
$Category_Details="";



 //Cat Complete Queries...._____....;

if(isset($_POST['save_about'])){

	@$About_Title=$_POST['About_Title'];
	@$About_Details=$_POST['About_Details'];


$allowedExts = array("pdf");
$temp = explode(".", $_FILES["About_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["About_Image"]["name"];
move_uploaded_file($_FILES["About_Image"]["tmp_name"],"../uploads/files/" . $_FILES["About_Image"]["name"]);




	$sql->query("INSERT INTO about (Heading,Description,Image) values ('$About_Title','$About_Details','$upload_pdf')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../about_us.php");
}


if(isset($_GET['delete_about'])){
		$id= $_GET['delete_about'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM about WHERE ID= $id") or die($sql->error());
		header("location:../view_about.php");
	} 

if (isset($_GET['edit_about'])) {
	$id= $_GET['edit_about'];
	$update= true;
	$result= $sql->query("SELECT * FROM about WHERE ID = $id") or die ($sql->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$About_Title= $row['Heading'];
		$About_Details= $row['Description'];
		$About_Image= $row['Image'];
	}
}
if(isset($_POST['update_about'])){
	$id= $_POST['id'];
$About_Title=$_POST['About_Title'];
$About_Details=$_POST['About_Details'];




$allowedExts = array("pdf");
$temp = explode(".", $_FILES["About_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["About_Image"]["name"];
move_uploaded_file($_FILES["About_Image"]["tmp_name"],"../uploads/files/" . $_FILES["About_Image"]["name"]);


	$sql->query("UPDATE about SET Heading='$About_Title', Description= '$About_Details', Image='$upload_pdf' WHERE
		ID = '$id' ") or die ($sql->error());    

	$_SESSION['message']="Record is Updated";
	$_SESSION['msg_type']="warning";
	header("location: ../view_about.php");

}



















if(isset($_POST['save_Notification'])){


$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Notification_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Notification_Image"]["name"];
move_uploaded_file($_FILES["Notification_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Notification_Image"]["name"]);




	$sql->query("INSERT INTO notification (Image) values ('$upload_pdf')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../notification.php");
}


if(isset($_GET['delete_notification'])){
		$id= $_GET['delete_notification'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM notification WHERE ID= $id") or die($sql->error());
		header("location:../notification.php");
	}




























//FAQ Complete Queries...._____....;

if(isset($_POST['save_faq'])){

	@$Question=$_POST['Question'];
	@$Answer=$_POST['Answer'];



	$sql->query("INSERT INTO faq (Question,Answer) values ('$Question','$Answer')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../view_faqs.php");
}


if(isset($_GET['delete_faq'])){
		$id= $_GET['delete_faq'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM faq WHERE ID= $id") or die($sql->error());
		header("location:../view_faqs.php");
	} 

if (isset($_GET['edit_faq'])) {
	$id= $_GET['edit_faq'];
	$update= true;
	$result= $sql->query("SELECT * FROM faq WHERE ID = $id") or die ($sql->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$Question= $row['Question'];
		$Answer= $row['Answer'];
		
	}
}
if(isset($_POST['update_faq'])){
	$id= $_POST['id'];
	$Question=$_POST['Question'];
	$Answer=$_POST['Answer'];

	$sql->query("UPDATE faq SET Question='$Question', Answer= '$Answer' WHERE
		ID = '$id' ") or die ($sql->error());    

	$_SESSION['message']="Record is Updated";
	$_SESSION['msg_type']="warning";
	header("location: ../view_faqs.php");

}


























if(isset($_POST['save_inventory'])){

	$Inventory_Title=$_POST['Inventory_Title'];
	$Inventory_Location=$_POST['Inventory_Location'];
	$Inventory_Short_Description=$_POST['Inventory_Short_Description'];
	$Inventory_Details=$sql ->real_escape_string($_POST['Inventory_Details']);
	$Inventory_Type=$_POST['Inventory_Type'];
	$Inventory_Area=$_POST['Inventory_Area'];
	$Inventory_Status=$_POST['Inventory_Status'];
	$Colony=$_POST['Colony'];

	$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Inventory_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Inventory_Image"]["name"];
move_uploaded_file($_FILES["Inventory_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Inventory_Image"]["name"]);





	$sql->query("INSERT INTO inventory (Inv_Name,Inv_Type,Inv_Status,Inv_Area,Inv_Colony,Inv_Loaction,Inv_Desc,Inv_Details,Inv_Image) values ('$Inventory_Title','$Inventory_Type','$Inventory_Status','$Inventory_Area','$Colony','$Inventory_Location','$Inventory_Short_Description','$Inventory_Details','$upload_pdf')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../inventory.php");
}


if(isset($_GET['delete_inventory'])){
		$id= $_GET['delete_inventory'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM inventory WHERE ID= $id") or die($sql->error());
		header("location:../view_inventory.php");
} 

if (isset($_GET['edit_inventory'])) {
	$id= $_GET['edit_inventory'];
	$update= true;
	$result= $sql->query("SELECT * FROM inventory WHERE ID = $id") or die ($sql->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$Inventory_Title=$row['Inv_Name'];
	$Inventory_Type=$row['Inv_Type'];
	$Inventory_Area=$row['Inv_Area'];
	$Inventory_Status=$row['Inv_Status'];
	$Colony=$row['Inv_Colony'];
	$Inventory_Location=$row['Inventory_Location'];
	$Inventory_Short_Description=$row['Inv_Desc'];
	$Inventory_Details=$row['Inv_Details'];
	$Inventory_Image=$row['Inv_Image'];

	}
}
if(isset($_POST['update_inventory'])){
	$id= $_POST['id'];
$Inventory_Title=$_POST['Inventory_Title'];
	$Inventory_Location=$_POST['Inventory_Location'];
	$Inventory_Short_Description=$_POST['Inventory_Short_Description'];
	$Inventory_Details=$sql ->real_escape_string($_POST['Inventory_Details']);
	$Inventory_Type=$_POST['Inventory_Type'];
	$Inventory_Area=$_POST['Inventory_Area'];
	$Inventory_Status=$_POST['Inventory_Status'];
	$Colony=$_POST['Colony'];

	$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Inventory_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Inventory_Image"]["name"];
move_uploaded_file($_FILES["Inventory_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Inventory_Image"]["name"]);

	$sql->query("UPDATE inventory SET Inv_Name='$Inventory_Title', Inv_Type= '$Inventory_Type',Inv_Status='$Inventory_Status', Inv_Area= '$Inventory_Area',Inv_Colony='$Colony', Inv_Loaction= '$Inventory_Location', Inv_Desc= '$Inventory_Short_Description', Inv_Details= '$Inventory_Details', Inv_Image='$upload_pdf' WHERE
		ID = '$id' ") or die ($sql->error());    

	$_SESSION['message']="Record is Updated";
	$_SESSION['msg_type']="warning";
	header("location: ../view_inventory.php");

}







if(isset($_POST['save_project'])){

	$Project_Title=$_POST['Project_Title'];
	$Project_Date=$_POST['Project_Date'];
	$Project_Short_Description=$_POST['Project_Short_Description'];
	$Project_Details=$sql ->real_escape_string($_POST['Project_Details']);

	$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Project_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Project_Image"]["name"];
move_uploaded_file($_FILES["Project_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Project_Image"]["name"]);





	$sql->query("INSERT INTO project (P_Date,P_Title,P_Description,P_Details,P_Image) values ('$Project_Date','$Project_Title','$Project_Short_Description','$Project_Details','$upload_pdf')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../projects.php");
}


if(isset($_GET['delete_project'])){
		$id= $_GET['delete_project'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM project WHERE ID= $id") or die($sql->error());
		header("location:../view_project.php");
} 




















if(isset($_POST['request_quote'])){

	$First_name=$_POST['First_name'];
	$Last_name=$_POST['Last_name'];
	$Service=$_POST['Service'];
	$Phone=$_POST['Phone'];
	$Message=$_POST['Message'];


	$sql->query("INSERT INTO quote (Q_Name,Q_Lname,Q_Service,Q_Phone,Q_Message) values ('$First_name','$Last_name','$Service','$Phone','$Message')")or die($sql->error);
	$_SESSION['message2']="We have recived your quote. We will get back to soon.";
	$_SESSION['msg_type2']="success";
	header("location: ../../index.php#about");
}


if(isset($_GET['delete_quote'])){
		$id= $_GET['delete_quote'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM quote WHERE ID= $id") or die($sql->error());
		header("location:../view_quote.php");
} 










if(isset($_POST['save_contact'])){

	$First_name=$_POST['First_name'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Subject=$_POST['Subject'];
	$Message=$_POST['Message'];


	$sql->query("INSERT INTO contact (C_Name,C_Email,C_Phone,C_Subject,C_Message) values ('$First_name','$Email','$Phone','$Subject','$Message')")or die($sql->error);
	$_SESSION['message3']="We have recived your Message. We will get back to soon.";
	$_SESSION['msg_type3']="success";
	header("location: ../../contact.php#Head");
}


if(isset($_GET['delete_contact'])){
		$id= $_GET['delete_contact'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM contact WHERE ID= $id") or die($sql->error());
		header("location:../view_contact.php");
} 






















if(isset($_POST['save_team'])){

	$Team_Member_Name=$_POST['Team_Member_Name'];
	$Team_Member_Position=$_POST['Team_Member_Position'];
	$Team_Member_Email=$_POST['Team_Member_Email'];
	$Team_Member_Phone=$_POST['Team_Member_Phone'];

	$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Team_Member_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Team_Member_Image"]["name"];
move_uploaded_file($_FILES["Team_Member_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Team_Member_Image"]["name"]);





	$sql->query("INSERT INTO team (T_Name,T_Position,T_Email,T_Phone,T_Image) values ('$Team_Member_Name','$Team_Member_Position','$Team_Member_Email','$Team_Member_Phone','$upload_pdf')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../team.php");
}


if(isset($_GET['delete_team'])){
		$id= $_GET['delete_team'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM team WHERE ID= $id") or die($sql->error());
		header("location:../view_team.php");
} 



if (isset($_GET['edit_team'])) {
	$id= $_GET['edit_team'];
	$update= true;
	$result= $sql->query("SELECT * FROM team WHERE ID = $id") or die ($sql->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$Team_Member_Name= $row['T_Name'];
		$Team_Member_Position=$row['T_Position'];
		$Team_Member_Email= $row['T_Email'];
		$Team_Member_Phone= $row['T_Phone'];
		$Team_Member_Image= $row['T_Image'];
	}
}
if(isset($_POST['update_team'])){
	$id= $_POST['id'];
	$Team_Member_Name=$_POST['Team_Member_Name'];
	$Team_Member_Position=$_POST['Team_Member_Position'];
	$Team_Member_Email=$_POST['Team_Member_Email'];
	$Team_Member_Phone=$_POST['Team_Member_Phone'];
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["Team_Member_Image"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["Team_Member_Image"]["name"];
move_uploaded_file($_FILES["Team_Member_Image"]["tmp_name"],"../uploads/files/" . $_FILES["Team_Member_Image"]["name"]);

	$sql->query("UPDATE team SET T_Name='$Team_Member_Name', T_Position= '$Team_Member_Position', T_Email= '$Team_Member_Email', T_Phone= '$Team_Member_Phone', T_Image= '$upload_pdf' WHERE
		ID = '$id' ") or die ($sql->error());    

	$_SESSION['message']="Record is Updated";
	$_SESSION['msg_type']="warning";
	header("location: ../view_team.php");

}











if(isset($_POST['save_user'])){

	$User_Name=$_POST['User_Name'];
	$Username=$_POST['Username'];
	$User_Email=$_POST['User_Email'];
	$User_Password=$_POST['User_Password'];




	$sql->query("INSERT INTO user (U_Name,U_Username,U_Email,U_Password) values ('$User_Name','$Username','$User_Email','$User_Password')")or die($sql->error);
	$_SESSION['message']="Record is Inserted";
	$_SESSION['msg_type']="success";
	header("location: ../users.php");
}


if(isset($_GET['delete_user'])){
		$id= $_GET['delete_user'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM user WHERE ID= $id") or die($sql->error());
		header("location:../view_users.php");
} 





if (isset($_GET['edit_user'])) {
	$id= $_GET['edit_user'];
	$update= true;
	$result= $sql->query("SELECT * FROM user WHERE ID = $id") or die ($sql->error());
	if (isset($result)==1) {
		$row=$result->fetch_array();
		$User_Name= $row['U_Name'];
		$Username= $row['U_Username'];
		$User_Email=$row['U_Email'];
		$User_Password=$row['U_Password'];
	}
}
if(isset($_POST['update_user'])){
	$id= $_POST['id'];
	$User_Name=$_POST['User_Name'];
	$Username=$_POST['Username'];
	$User_Email=$_POST['User_Email'];
	$User_Password=$_POST['User_Password'];


	$sql->query("UPDATE user SET U_Name='$User_Name', U_Username= '$Username',U_Email='$User_Email', U_Password= '$User_Password' WHERE
		ID = '$id' ") or die ($sql->error());    

	$_SESSION['message']="Record is Updated";
	$_SESSION['msg_type']="warning";
	header("location: ../view_users.php");

}




















if(isset($_POST['save_contact'])){

	$C_Name=$_POST['Name'];
	$C_Email=$_POST['Email'];
	$C_Subject=$_POST['Subject'];
	$C_Message=$_POST['Message'];




	$sql->query("INSERT INTO contact (Name,Email,Subject,Message) values ('$C_Name','$C_Email','$C_Subject','$C_Message')")or die($sql->error);
	$_SESSION['message2']="Your Information is Recived. We will contact you very soon";
	$_SESSION['msg_type']="success";
	header("location: ../../contact.php#contact");
}



if(isset($_GET['delete_contact'])){
		$id= $_GET['delete_contact'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM contact WHERE ID= $id") or die($sql->error());
		header("location:../view_contact.php");
}












if(isset($_POST['join_us'])){

	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$DoB=$_POST['DoB'];
	$Department=$_POST['Department'];
	$Services=$_POST['Services'];
	$Portfolio=$_POST['Portfolio'];
	// $CV= rand(1000,10000)."-".$_FILES["file"]["name"];

	// $tname= $_FILES["files"]["temp_name"];

	// $upload_dir='uploads';
	// move_uploaded_file($tname, $upload_dir.'/'.$CV);







$allowedExts = array("pdf");
$temp = explode(".", $_FILES["file_name"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["file_name"]["name"];
move_uploaded_file($_FILES["file_name"]["tmp_name"],"../uploads/files/" . $_FILES["file_name"]["name"]);








	$sql->query("INSERT INTO join_us (Name,Email,Phone,DoB,Department,Services,Portfolio,CV) values ('$Name','$Email','$Phone','$DoB','$Department','$Services','$Portfolio','$upload_pdf')")or die($sql->error);
	$_SESSION['message2']="Your Information is Recived. We will contact you very soon";
	$_SESSION['msg_type']="success";
	header("location: ../../join.php");
}










if(isset($_GET['delete_join'])){
		$id= $_GET['delete_join'];
		$_SESSION['message']="Record is Deleted";
		$_SESSION['msg_type']="danger";
		$sql->query("DELETE FROM join_us WHERE ID= $id") or die($sql->error());
		header("location:../view_join.php");
}



 ?>