<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Our Result</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="left-menu pull-left">
                            <ul class="nav nav-pills">
                                <li><a data-toggle="modal" data-target="" href="#">Student Status</a></li>
                                <li><a data-toggle="modal" data-target="" href="#">Student Login</a></li>
                                <li><a data-toggle="modal" data-target="" href="#">My Books</a></li>
                                <li><a data-toggle="modal" data-target="" href="#">Parents Portal</a></li>
                            </ul>
                            <div class="modal fade" id="order-status" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="create-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title" id="myModalLabel">Create Account</h4>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="my-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title" id="myModalLabel">My Account</h4>
                                        </div>
                                        <div class="modal-body">
                                            <tbody>
                                                <tr id="checkoutPanelNoWarn">
                                                    <td>
                                                        <input type="text" name="username" value="" placeholder="Email Address" size="25" class="formtext" style="width:150px;">
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr id="checkoutPanelNoWarn">
                                                    <td><input type="password" name="password" value="" placeholder="Password" size="25" class="formtext" style="width:150px;"></td>
                                                </tr>
                                            </tbody>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <section class="container">
                                                <div class="login">
                                                    <h1>Login</h1>

                                                    <p>

                                                    </p>
                                                    <p>

                                                    </p>

                                                </div>
                                            </section>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-menu pull-right">
                            <ul class="nav nav-pills">
                                <li><a href="#">Campuses</a></li>
                                <li><a href="result.html">Our Results</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"> <img src="images/home/logo/logo.png" width="271" height="75" alt="" /><h2>RTAK Coaching Center</h2> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="main-menu pull-left">
                            <nav class="cl-effect-21" id="cl-effect-21"> <a onClick="DisplayPage(this.name);" name="home" href="index.html">RTAK Vision</a> <a onClick="DisplayPage(this.name);" name="products" href="Administration.html">Administration</a> <a href="admission.html">Admission</a> <a href="positions.html">Positions</a><a href="gallery.html">Gallery</a> </nav>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-bar pull-right">
                            <div class="input-group">
                                <input placeholder="Search here ..." id="txtSearch" type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button id="btnSearch" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section style="margin-top:20px;" class="contact-us">
        <div class="container">
	<div align="center">
		<h1>Lastest Result</h1>
		<h3>9th,10th,11th and 12th</h3>
		<form action="" method="post">
		<label for="class">Class</label>

<select id="class">
	
  
  <option value="12th" selected>12th</option>
</select>

			
			
			<form action="result.php" method="post">
				
				<input type="text" id="email" placeholder="RollNo." name="name"/>
				<input type="submit" name="submit" value="Search"/>
				</form>
		<br/>
		
		
		
			<?php
$conn = mysqli_connect("localhost","root","","school1");
			if(isset($_POST['submit'])){
				
				$name = $_POST['name'];
				$query = mysqli_query($conn,"select * from users where name='$name' or id='$name' or fname='$name'");
				while ($row=mysqli_fetch_array($query)){
					$id=$row['id'];
					$name=$row['name'];
					$fname=$row['fname'];
					$english=$row['english'];
					$urdu=$row['urdu'];
					$physics=$row['physics'];
					$maths=$row['maths'];
					$pakstudies=$row['pakstudies'];
				?>
			
			<table class="table-responsive table-bordered table-condensed">
				<thead>
				<tr>
					<th>Roll No.</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>English</th>
					<th>Urdu</th>
					<th>Physics</th>
					<th>Mathematics</th>
					<th>Pakistan Studies</th>
					</tr>
				</thead>
		   <tbody>
			   
			   <tr>
			   <td><?php echo $id; ?></td>
				   <td><?php echo $name; ?></td>
				   <td><?php echo $fname; ?></td>
				   <td><?php echo $english; ?></td>
				   <td><?php echo $urdu; ?></td>
				   <td><?php echo $physics; ?></td>
				   <td><?php echo $maths; ?></td>
				   <td><?php echo $pakstudies; ?></td>
			   
			   </tr>
			   </tbody>
			
			
			</table>
			
			
			
			
			
			
			<?php 
			
			
			
			
				
					 
					
				}
			}
			
 ?>
		
		
		
		</div>
    </section>
			<br/>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="information-links">
                            <h4>News Alerts</h4>
                            <ul>
                                <li><a href="#">The ANNUAL COMPREHENSIVE EXAMINATION of XI & XII Classes in PRACTICAL CENTRE will start from 10th February 2019. OUTSIDER STUDENTS can also apply.</a></li>

                                <li><a href="#">NEW THEORY SESSION STARTING XI CLASS (13th April), IX & X CLASSES (15th April). ADMISSIONS OPEN. 34812547</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="shopping-links">
                            <h4>Criteria</h4>
                            <ul>
                                <li><a href="#">Policies</a></li>
                                <li><a href="#">Chairman</a></li>
                                <li><a href="#">Director</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-icons-links">
                            <h4>Follow us on</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-info">
                            <h4>Contact</h4>
                            <span class="address">Plot#315, Main Landhi Road, Karachi</span><br />
                            <span class="phone">+92 (336) 2134469</span> <a href="#">info@rtakcoa.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copy-right">&copy; Copyright 2014. All right reserved Zain Hadi(BB-5789) & Tooba Nawab(BB-5773)</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
