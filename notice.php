<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Bord</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <section class="py-5">
    <div class="sticky-md-top">
         <!-- Responsive navbar-->
        <nav class=" anime "  id="navbarSupportedContent">
        
            <ol>
              <li class="anime-item"><a href="index.php">Home</a></li>
            </ol>
        </nav>  

    </div>
        <div class="container my-5">
        <div class="d-flex justify-content-between">
                <div class="col-lg-6">
                    <h2>Notice Board</h2>
                    <hr color="#F58634" />
                    <marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
                         <ul>
                            <?php $sql = "SELECT * from tblnotice";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                            foreach($results as $result)
                            {   ?>                      
                            <li><a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->noticeTitle);?></li>
                            <?php }} ?>

                        </ul>
                     </marquee>
                </div>
                <div class="col-lg-6">
                    <img src="images/background-image1.jpg" alt="Responsive image" class="img-fluid">
                </div>
                            </div>
             </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="py-1 op"  style=" background-color:#000;">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Student Result Portal (BCOM IT)<?php echo date('Y');?></p>
        <p class="m-0 text-center text-white">Developed By Parshwa, Omkar, Mayashwari, Amruta</p>
    </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>