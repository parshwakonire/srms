<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student Result Portal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="icon" type="image/x-icon" href="images/fav.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/footer.css" rel="stylesheet" />

    </head>
    <body>
      
        <section class="main" id="mainSection" style="  background-size:cover;background-image: url(images/bg.jpg),linear-gradient(180deg,rgba(0,0,0,0) 87%,#ffffff 100%)!important;">
        
        <div class="sticky-md-top">
          <nav class=" anime "  id="navbarSupportedContent">
        
            <ol>
              <li class="anime-item"><a href="#">Home</a></li>
              <li class="anime-item"><a href="notice.php">Notice</a></li>
              <li class="anime-item"><a class="anime-item" href="find-result.php">Students</a></li>
              <li class="anime-item">
              <a href="#0">Faculty Login</a>
              <ol class="sub-anime">
              <li><a class="anime-item" href="art-login.php">Arts Faculty</a></li>
              <li><a class="anime-item" href="com-login.php">Commerce Faculty</a></li>
              <li><a class="anime-item" href="sci-login.php">Science Faculty</a></li>
              </ol>
              </li>
              <li class="anime-item"><a href="admin-login.php">Admin</a></li>
            </ol>
         </nav>
       </div>
        <div class="home-content">
            <div class="home-text" >
                
            

            <h3 style=" letter-spacing: 3px;">Welcome to DKASC College</h3>
       
                <h1 > Student Result Portal</h1>
                <p >The purpose of Colleges is to prepare students with promise
                    to enhance their intellectual, physical, social, emotional, spiritual,
                    and artistic growth so that they may realize their power for good
                    as citizens</p>
                    <a href="find-result.php" class="main-login" style="border-radius: 5px;">Result</a>
                </div>
                
                <div class="home-img" style="width: 500px;">
                </div>
                
            </div>
        </section>
        <section class="py-5">
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
                    <div class="col-lg-6 ">      
                    </div> 
                </div>
            </div>
        </div>
    </section>
   
    <section class="services">
        <div class="services-heading">
            <h2>HOD's Contacts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ad asese do eiusmod tempor incididunt utarla oreetdolo magna aliqua </p>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/icon5.png">
                <font>Bachelor of Commerce (Information Technology)</font>
                <p>BCom IT degrees incorporate business fundamentals courses to help close the technological and commercial divide. The main goal of these classes is to acquaint students with fundamental business ideas such as marketing, finance, accounting, management, and entrepreneurship. </p>
               <a href="#0">Contact</a>
            </div>
            <div class="box">
                <img src="images/icon5.png">
                <font>Bachelor of Computer Application</font>
               <p> Bachelor of Computer Application. It is a 3-year full-time course approved by the All India Council for Technical Education (AICTE). The course curriculum provides a sound knowledge of computer fundamentals, programming concepts, and applications.</p>               <a href="#0">Contact</a>
            </div>
            <div class="box">
                <img src="images/icon5.png">
                <font>Bachelor of Science (Information Technology)</font>
                <p>BSc Information Technology is an undergraduate science course of 3 years dealing with software, databases, and networking designed to impart theoretical and practical knowledge on storing, processing and managing information securely.</P>                <a href="#0">Contact</a>
            </div>
            <div class="box">
                <img src="images/icon5.png">
                <font>Bachelor of Computer Science</font>
               <p> Computer science focuses on the development and testing of software and software systems. It involves working with mathematical models, data analysis and security, algorithms, and computational theory. Computer scientists define the computational principles that are the basis of all software.</p>                <a href="#0">Contact</a>
            </div>
            
            
        </div>
    </section>
    <footer>
   <div class="content1">
     <div class="left box1">
       <div class="upper">
         <div class="topic">Address</div>
         <p><a href="https://maps.app.goo.gl/6xtDi3PDoStxeea47" target="_blank">Survey No.17/436,Shivajinagar, Near Shahu Putala,Kolhapur Road, Ichalkaranji<p></a>
         <div>&#160;</div>
         <a href="tel:(0230)2420412"><i class="fas fa-phone-volume"></i> &#128222; &#160;(0230) 2420 412</a>
        <p> <a href="mailto:dkasccollege@gmail.com">&#128231;  &#160; dkasccollege@gmail.com</a>
       </div>
       <div>&#160;</div>
       
       <div class="lower">
             <div class="midia-icon">
         <a href="https://www.facebook.com/dkasccollege/" target="_blank" class="fa fa-facebook"></a>
         <a href="https://twitter.com/" target=”_blank” class="fa fa-twitter"></a>
         <a href="http://www.dkasc.ac.in/"  target=”_blank” class="fa fa-google"></a>
        <a href="https://www.linkedin.com/home" target=”_blank” class="fa fa-linkedin"></a>
        <a href="https://www.youtube.com/channel/UCfLD755p2Lu_ntcyUzGZZcg" target="_blank" class="fa fa-youtube"></a>
         </div>
        </div>   
        <!-- <div class="footer3">
                <p>Hello 👋 I'm</p>
                <section class="animation">
                <div class="first"><div>Omkar</div></div>
                <div class="second"><div>Parshwa</div></div>
                 <div class="third"><div>Mayashwari</div></div>
                 <div class="third1"><div>Amruta</div></div>
                 </section>
             </div> -->
          </div>
    
     <div class="middle box1">
       <div class="topic">Important Link</div>
       <div><a href="http://www.dkasc.ac.in/" target=”_blank”>> &#160; DKASC College Home Page</a></div>
       <div><a href="http://www.unishivaji.ac.in/" target=”_blank”> > &#160; Shivaji Univercity</a></div>
       <div><a href="https://swayam.gov.in/" target=”_blank”> > &#160; Swayam Portal</a></div>
       <div><a href="http://www.vivekanandshikshansanstha.edu.in/" target=”_blank”> > &#160; Vivekanand Shikshan Sanstha, Kolhapur</a></div>
     </div>


     <div class="right box1">
       <div class="topic">Contact us</div>

<?php error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];   
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO tblenquiry(FullName,EmailId,Subject,Description) VALUES(:name,:email,:subject,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
 echo "<script>alert('Query sent successfully');</script>";
 echo "<script>window.location.href ='index.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}
}
?>
      
                            <form name="sentMessage" id="contactForm" method="post">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" name="name" /><br />
                           
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="email" placeholder="Your Email" name="email" required="required"  /> <br />
                                
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" name="subject" /> <br />
                       
                                </div>
                                <div class="control-group">
                                    <input type="text" id="message" placeholder="Message" required="required" name="message" ></textarea><br />
                 
                                </div>
                                <div>
                                    <input type="submit" id="sendMessageButton" name="submit"></input>
                                </div>
                            </form>
                        </footer>
                        <a href="about.html"><footer class="py-1 op"  style=" background-color:#0C224D;">
                        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Student Result Portal (BCOM IT)<?php echo date('Y');?></p>
                        <p class="m-0 text-center text-white">Developed By Parshwa, Omkar, Mayashwari, Amruta</p>
                    </div>
                </footer></a>

                
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
