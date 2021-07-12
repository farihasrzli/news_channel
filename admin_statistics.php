<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'newsportaldb.php';

//$sql=mysqli_Query($con, "SELECT * FROM statistics");
// $sql2=mysqli_Query($con, "SELECT * FROM statistics");
//$result=mysqli_fetch_array($sql);

//if(isset($_POST['update']))
//{
	//$Confirmed_Cases=$_POST['cc'];
	//$New_Cases=$_POST['nc'];
	//$In_Treatment=$_POST['it'];
	//$Recovered=$_POST['r'];
	//$Death=$_POST['d'];
	//$sql2=mysqli_Query($con,"UPDATE statistics SET Confirmed_Cases='$Confirmed_Cases', New_Cases='$New_Cases', In_Treatment='$In_Treatment', Recovered='$Recovered', Death='$Death' WHERE id=1");

	//if(!$sql2)
	//{
		//echo '<script type="text/javascript">alert("Fail to Update Statistics")</script>';
		//echo "<script>setTimeout(\"location.href = 'http://localhost/newspaper/admin_statistics.php';\",500);</script>";
	//}
	//else
	//{
		//echo '<script type="text/javascript">alert("Successfully Update Statistics")</script>';
		//echo "<script>setTimeout(\"location.href = 'http://localhost/newspaper/admin_statistics.php';\",500);</script>";
	//}
//}
//else
//{
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Statistics</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script src="time.js" defer="defer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->

<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

<style>
table, th, td {
  padding: 10px;
}

.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

</style>

</head>
<body onload="startTime()">  
<div class="page-container">  
   <div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
        <div class="header-main">
          <div class="header-left">
              <div class="logo-name">
                   <a href="admin_dashboard.php"> <h1>NewsPortal</h1> 
                  <!--<img id="logo" src="" alt="Logo"/>--> 
                  </a>                
              </div>
              <div class="clearfix"> </div>
             </div>
             <div class="header-right">
              <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new messages</h3>
                        </div>
                      </li>
                      <li><a href="#">
                         <div class="user_img"><img src="images/p4.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/p2.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                      </a></li>
                      <li><a href="#">
                         <div class="user_img"><img src="images/p3.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all messages</a>
                        </div> 
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new notification</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="user_img"><img src="images/p5.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                       </a></li>
                       <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/p6.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li><a href="#">
                        <div class="user_img"><img src="images/p7.png" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li>
                        <div class="notification_bottom">
                          <a href="#">See all notifications</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 8 pending task</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Database update</span><span class="percentage">40%</span>
                          <div class="clearfix"></div>  
                        </div>
                        <div class="progress progress-striped active">
                          <div class="bar yellow" style="width:40%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar green" style="width:90%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                          <div class="clearfix"></div>  
                        </div>
                         <div class="progress progress-striped active">
                           <div class="bar red" style="width: 33%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar  blue" style="width: 80%;"></div>
                        </div>
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all pending tasks</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                </ul>
                <div class="clearfix"> </div>
              </div>

              <!--notification menu end -->
              <div class="profile_details" align="right">   
                <ul>
                  <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile_img"> 
                        <span class="prfil-img"><img src="images/p9.png" alt=""> </span> 
                        <div class="user-name">
                          <p>Admin</p>
                          <span>Administrator</span>
                        </div>
                        <i class="fa fa-angle-down lnr"></i>
                        <i class="fa fa-angle-up lnr"></i>
                        <div class="clearfix"></div>  
                      </div>  
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                      <li> <a href="admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="clearfix"> </div>       
            </div>
             <div class="clearfix"> </div>  
        </div>
<!--heder end here-->
<!-- script-for sticky-nav -->
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
<!-- /script-for sticky-nav -->


<!--inner block start here-->

<div class="inner-block">
	<div><h2>Update Current Statistics of COVID-19 in Malaysia :</h2></div>
    <div class="chart-main-block">
       <div class="chart-first-line">
    	<div class="col-md-6 chart-blo-1">	
    	 </div>
    	<div class="col-md-6 chart-blo-1"></div>
    	  <div class="clearfix"></div>
    	</div>
    	<div class="chart-second-line">
    	<div class="col-md-6 chart-blo-1"></div>   	


<center>
<form action="test_updateprocess.php" method="post">
<table width="85%" >
  <tr>
    <td>Date</td>
    <td> : </td>
    <td><input type="date" name="dc" value="<?php echo $result['Date_Cases']; ?>" min="0"></td>
  </tr>
	<tr>
		<td>Confirmed Cases</td>
		<td> : </td>
		<td><input type="number" name="cc" value="<?php echo $result['Confirmed_Cases']; ?>" min="0"></td>
	</tr>
	<tr>
		<td>New Cases</td>
		<td> : </td>
		<td><input type="number" name="nc" value="<?php echo $result['New_Cases']; ?>" min="0"></td>
	</tr>
	<tr>
		<td>In Treatment</td>
		<td> : </td>
		<td><input type="number" name="it" value="<?php echo $result['In_Treatment']; ?>" min="0"></td>
	</tr>
	<tr>
		<td>Recovered</td>
		<td> : </td>
		<td><input type="number" name="r" value="<?php echo $result['Recovered']; ?>" min="0"></td>
	</tr>
	<tr>
		<td>Death</td>
		<td> : </td>
		<td><input type="number" name="d" value="<?php echo $result['Death']; ?>" min="0"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="Update" name="submit"></td>
	</tr>
</table>
</form>
</center>
<br>


<table width="100%">
	<tr>
		<td>
        <p>Date/Time: <br>
		<?php echo date("d/m/Y")." ";?>
		<div id="txt"></div>
		</p>
  		</td>
		<td>
		<a href="statistics.php"><div class="col-md-4 market-update-gd">
        <div class="market-update-block clr-block-2">
         <div class="col-md-8 market-update-left">
          <h3>VIEW</h3>
          <h4>STATISTICS PAGE</h4>
          <p>@ MCO News Portal</p>
          </div>
          <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i></a>
          </div>
          <div class="clearfix"> </div></a>
</td>
</tr>
</table>
<br>
<br>
    	<div class="clearfix"> </div>
    	</div>
    </div>
</div>
<!--inner block end here-->


<!--copy rights start here-->
<div class="copyrights">
   <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> @ The Nobles, All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">W3layouts</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>  
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
            <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> </div>     
        <div class="menu">
          <ul id="menu" >
            <li id="menu-home" ><a href="admin_dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
            
            <li id="menu-academico" ><a href="admin_post.php"><i class="fa fa-file-text"></i><span>Posts</span></a></li>
          
           <li><a href="admin_statistics.php"><i class="fa fa-bar-chart"></i><span>Statistics</span></a></li>
          </ul>
        </div>
   </div>
  <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     


<?php
//}
?>