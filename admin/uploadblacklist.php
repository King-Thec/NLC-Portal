<?php
	session_start();
	if($_SESSION['username']!="")
	{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Subject Manage</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>
</head>
<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<img src="../admin/logo.png" width="" height="135" style="margin-bottom:px;margin-left:px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;">Managed By Abhinav Education Trust, Jahangirpura</h6>
<H6 style="margin-top:-15px;margin-left:750px;font-size:15px;color:#F8F8FF;" >Affiliated To Veer Narmad South Gujarat University</h6>
<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:#F8F8FF;">VIVEKANAND COLLEGE FOR BCA,BBA,B.COM,B.Ed,PTC </b></h6>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;">&nbsp;Adminstrator </b><img src="image/admin1.png" style="margin-top:-50px;" height="60" width="70"></td>
		<td>
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>
				 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<div class="nav">
		<div class="table">
		
		<ul class="select" ><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="coursemanage.php"><b>Master Form</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="coursemanage.php">Course</a></li>
				<li><a href="semestermanage.php">Semester</a></li>
				<li><a href="subjectmanage.php">Subject</a></li>
				<li><a href="studentmanage.php">Student</a></li>
				<li><a href="exammanage.php">Exam</a></li>
				<li><a href="resultmanage.php">Result</a></li>
				<li><a href="attendance.php">Attendance</a></li>
				<li><a href="facultymanage.php">Faculty</a></li>
				
				<li><a href="subjecttaken.php">Subject Taken</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="uploadstudinfo.php"><b>Upload</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="uploadstudinfo.php">Stud Info</a></li>
				<li><a href="uploadtimetable.php">Exam Time Table</a></li>
				<li><a href="uploadresult.php">Exam Result</a></li>
				<li><a href="uploadatt.php">Attendance</a></li>
				<li  class="sub_show"><a href="uploadblacklist.php">Blacklist </a></li>
				<li><a href="uploadsyllabus.php">Syllabus </a></li>
				<li><a href="uploadgallery.php">Gallery</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="collegemanage.php"><b>Access</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="collegemanage.php">College Info</a></li>
				<li><a href="downloadmanage.php">Download</a></li>
				<li><a href="eventmanage.php">Event</a></li>
				<li><a href="newsmanage.php">News</a></li>
				<li><a href="usermanage.php">Usertype</a></li>
				<li><a href="loginmanage.php">Loginuser</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider"></div>
		
		<ul class="select"><li><a href="displayattend.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="displayattend.php">Display Attendance</a></li>
				<li><a href="blacklist.php">Generate Blacklist</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>
<div style="width:550px;
	margin: auto auto auto auto;
	margin-top:20px;
	background: #F5f5f5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<form enctype="multipart/form-data" action="" method="post">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
Course<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">			
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("vvkcollege",$con);
$res=mysql_query("select * from attend_master where declard='Yes';");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
		$sdate=$row['start_date'];
		$edate=$row['end'];
		$sid=$row['sem_id'];
		$cid=$row['course_id'];
		$id=$row['att_id'];	
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		$qry1="SELECT course_name FROM course_master where course_id in(select course_id from attend_master where course_id=$cid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$name=$row2['course_name'];
		$qry1="SELECT sem_no,year FROM sem_master where sem_id in(select sem_id from attend_master where sem_id=$sid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$semno=$row2['sem_no'];
		if($semno==0)
		{
			$sem=$row2['year'];
		}
		else
		{
			$sem="Sem"."-".$semno;
		}
		if($smonth==1)
		{
			$asmonth='JAN';
		}
		if($smonth==2)
		{
			$smonth='FEB';
		}
		if($smonth==3)
		{
			$smonth='MAR';
		}
		if($smonth==4)
		{
			$smonth='APR';
		}
		if($smonth==5)
		{
			$smonth='MAY';
		}
		if($smonth==6)
		{
			$smonth='JUN';
		}
		if($smonth==7)
		{
			$smonth='JUL';
		}
		if($smonth==8)
		{
			$smonth='AUG';
		}
		if($smonth==9)
		{
			$smonth='SEP';
		}
		if($smonth==10)
		{
			$smonth='OCT';
		}
		if($smonth==11)
		{
			$smonth='NOV';
		}
		if($smonth==12)
		{
			$smonth='DEC';
		}
		if($emonth==1)
		{
			$emonth='JAN';
		}
		if($emonth==2)
		{
			$emonth='FEB';
		}
		if($emonth==3)
		{
			$emonth='MAR';
		}
		if($emonth==4)
		{
			$emonth='APR';
		}
		if($emonth==5)
		{
			$emonth='MAY';
		}
		if($emonth==6)
		{
			$emonth='JUN';
		}
		if($emonth==7)
		{
			$emonth='JUL';
		}
		if($emonth==8)
		{
			$emonth='AUG';
		}
		if($emonth==9)
		{
			$emonth='SEP';
		}
		if($emonth==10)
		{
			$emonth='OCT';
		}
		if($emonth==11)
		{
			$emonth='NOV';
		}
		if($emonth==12)
		{
			$emonth='DEC';
		}
		if($emonth==$smonth)
		{
			$s=$smonth."-".$syear;
			$e=$emonth." "."-"." ".$eyear;
			$exam=$name." ".$sem." "."(".$s.")";?>
			<option value="<?php echo $exam?>">
			<?php  echo $exam?>
			</option><?php
		}
		else
		{
			$s=$smonth."-".$syear;
			$e=$emonth."-".$eyear;
			$exam=$name." ".$sem." "."(".$s." "."TO"." ".$e.")";?>
			<option value="<?php echo $exam?>">
			<?php  echo $exam?>
			</option><?php
		}
	}
$cnt--;	
}
?>
</select><br><br><br>
</td>
</tr>
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="images/zip.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file"  class="file_1" name="file" style="margin-left:150px;"/><br>
</td>
</tr>
<tr>
<td>
<input type="submit"  value="Upload" name="l1"   style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(images/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:160px;"/>
</td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST['l1']))
{
$newname=$_POST['en'];
if($_FILES['file']['type']=="application/octet-stream")
{
	
	
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"../../www.vivekanandcollege.ac.in/upload/blacklist/".$newname);
	$mypath="www.vivekanandcollege.ac.in/upload/blacklist/".$newname;
	$qry="insert into download_master(course_id,down_title,path,down_type) values('1','$exam','$mypath','balcklist');";
	mysql_query($qry);
	$qry="select down_id from download_master ORDER by down_id desc;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$downid=$row['down_id'];
	$newsname=$newname."Blacklist is declared";
	$y=date('Y');
	$m=date('m');
	if($m==01)
	{
		$totdays=31;
	}
	else if($m==02)
	{
		$totdays=29;
	}
	else if($m==03)
	{
		$totdays=31;
	}
	else if($m==04)
	{
		$totdays=30;
	}
	else if($m==05)
	{
		$totdays=31;
	}
	else if($m==06)
	{
		$totdays=30;
	}
	else if($m==07)
	{
		$totdays=31;
	}
	else if($m==08)
	{
		$totdays=31;
	}
	else if($m==09)
	{
		$totdays=30;
	}
	else if($m==10)
	{
		$totdays=31;
	}
	else if($m==11)
	{
		$totdays=30;
	}
	else 
	{
		$totdays=31;
	}
	$d=date('d');
	$sdate=$y."-".$m."-".$d;
	if($d<=14)
	{
		$d+=15;
	}
	else
	{
		$tot=$totdays-$d;
		if($m<=11)
		{
			$m+=1;
			$d=15-$tot;
		}
		else
		{
			$m=1;
			if($tot==15)
			{
				$d=$totdays;
			}
			else
			{
				$d=15-$tot;
			}
		}
	}
	$edate=$y."-".$m."-".$d;
	$qry="insert into news_master(news_name,start_date,end_date,dis,down_id) values('$newsname','$sdate','$edate','$newsname',$downid);";
	mysql_query($qry);
	?>
	<script language="javascript">
	alert(" File  is successfullay upload to Server ");
	</script>
	<?php
}
else
{
?>
	<script language="javascript">
	alert("You can upload only WinRAR File or ZIP file file");
	</script>
	<?php
}
}
}
else
{
	
		header("location:login.php");
	
}
?>