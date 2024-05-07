<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
	
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=1;

$sql = "UPDATE tblenquiry SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Enquiry  successfully read";
}

if($_GET['id'])
{
$id=$_GET['id'];
$sql="delete from tblenquiry where id=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
echo '<script>alert("deleted.")</script>';
echo "<script>window.location.href ='manage-enquries.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Enquiries</title>
        <link rel="icon" type="image/x-icon" href="images/fav.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
          <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
   <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
<?php include('includes/leftbar.php');?>  


<div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage Enquiries</h2>
                                
                                </div>
                                
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                        
            							<li class="active">Manage Enquiries</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>


                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Enquiries</h5>
                                                </div>
                                            </div>



<?php if($error){?>
<div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                    <div class="panel-body p-20">
					 
                   
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Subject</th>
                                                            <th>Description</th>
                                                            <th>Posting Date</th>
                                                            <th>Action</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                          <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Subject</th>
                                                            <th>Description</th>
                                                            <th>Posting Date</th>
                                                            <th>Action</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </tfoot>
                        <?php $sql = "SELECT * from tblenquiry";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>		
						  <tr>
							<td width="120"><?php echo htmlentities($result->id);?></td>
							<td width="50"><?php echo htmlentities($result->FullName);?></td>
								<td width="50">
								<?php echo $result->EmailId;?></td>
							
						
							<td width="200"><?php echo htmlentities($result->Subject);?></a></td>
							<td width="400"><?php echo htmlentities($result->Description);?></td>
							
								<td width="50"><?php echo htmlentities($result->PostingDate);?></td>
								<?php if($result->Status==1)
{
	?><td>Read</td>
<?php } else {?>

<td><a href="manage-enquries.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to read')" >Pending</a>
</td>
<td>
<a href="manage-enquries.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to delete?');">
    <i class="fa fa-trash fa-3x" title="Delete this Record" style="color:red;"></i> </a> 

</td>
<?php } ?>
</tr>
						 <?php } }?>


						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>



            <script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
                      

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
        </script>
    </body>
</html>
<?php } ?>

