<!doctype html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>

 @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Roboto:400,500,700');

 a, a:hover, a:visited, a:active, a:link
{
	text-decoration: none;
	-webkit-font-smoothing: antialiased;
	-webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
	text-shadow: rgba(0,0,0,.01) 0 0 1px;
}

ul
{
	list-style: none;
	margin-bottom: 0px;
}

 .header{
	position: absolute;
	top: 0px;
	left:50%;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%);
	-o-transform: translateX(-50%);
	transform: translateX(-50%);
	width: 100%;
	height: 56px;
	background: #FFFFFF;
	z-index: 10;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.header.scrolled .header_content::before
{
	box-shadow: 0px 20px 49px rgba(0,0,0,0.17);
}
.header_content
{
	float: left;
	height: 100%;
}
.header_content::before
{
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	content: '';
	box-shadow: 0px 20px 49px rgba(0,0,0,0.67);
	z-index: -1;
}

.logo_container
{
	display: inline-block;
	padding-left: 100px;
}
.logo span
{
	font-family: 'Open Sans', sans-serif;
	font-size: 30px;
	font-weight: 900;
	color: #3a3a3a;
	vertical-align: middle;
	text-transform: uppercase;
	margin-left: 3px;
}

.main_nav_container
{
	display: inline-block;
	margin-left: auto;
	padding-right: 0px;
}
.main_nav
{
	margin-top: 0px;
}
.main_nav_item
{
	display: inline-block;
	margin-right: 40px;
}
.main_nav_item:last-child
{
	margin-right: 0px;
}
.main_nav_item a
{
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 700;
	color: #3a3a3a;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.main_nav_item a:hover
{
	color: #ffb606;
}

.admin-box 
{
	color: white;
}

.admin-box a:hover
{
	color: black;
}

.header_side
{
	width: 279px;
	height: 100%;
	background: #ffb606;
}
.header_side img
{
	width: 29px;
	height: 29px;
}
.header_side span
{
	display: block;
	position: relative;
	font-size: 18px;
	font-weight: 500;
	color: #FFFFFF;
	padding-left: 12px;
}

.footer
{
	width: 100%;
	padding-top: 10px;
	padding-bottom: 20px;
	background: #1a1a1a;
}
.footer .section_title h1
{
	color: #FFFFFF;
}

.footer_content 
{
	padding-top: 0px;
	padding-bottom: 0px;
	
}
.footer_content .logo_container
{
	padding-left: 0px;
	padding-top: 80px;
}
.footer_content .logo span
{
	color: #FFFFFF;
}
.footer_about_text
{
	margin-top: 0px;
	margin-bottom: 0px;
	padding-right: 20px;
}
.footer_column_title
{
	font-size: 18px;
	font-weight: 500;
	color: #FFFFFF;
	padding-top: 15px;
}
.footer_column_content
{
	margin-top: 32px;
	float: left;
}
.footer_list_item
{
	margin-bottom: 11px;
}
.footer_list_item a
{
	font-size: 14px;
	color: #a5a5a5;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.footer_list_item a:hover
{
	color: #ffb606;
}
.footer_contact_item
{
	font-size: 10px;
	font-weight: 400;
	color: #a5a5a5;
	margin-bottom: 22px;
}
.footer_contact_item:last-child
{
	margin-bottom: 0px;
}
.footer_contact_icon
{
	display: inline-block;
	width: 24px;
	height: 24px;
	vertical-align: middle;
	margin-right: 10px;
}
.footer_contact_icon img
{
	width: 100%;
}

.footer_bar
{
	padding-top: 19px;
	padding-bottom: 19px;
}
.footer_social .menu_social_item a i
{
	color: #FFFFFF;
}
.footer_social .menu_social_item a i:hover
{
	color: #ffb606;
}
.footer_social .menu_social_item:last-child
{
	margin-right: 0px;
}

    </style>
</head>
<body>

		<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img style="margin-left: -75px;height:55px;width: 317px;"  src="img/logo1.png" alt="">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="home.php">HOME</a></li>
						<li class="main_nav_item"><a href="homecreate.php">STUDENT REGISTRATION</a></li>
						<li class="main_nav_item"><a href="stulogin.php">COURSE REGISTRATION</a></li>
						<li class="main_nav_item"><a href="contact.php">CONTACT US</a></li>
						<li class="main_nav_item"><a style="color: red;" href="login.php"><strong >ADMIN</strong></a></li>
					</ul>
				</div>
			</nav>
		</div>

	</header>
	
<br><br><br><br>
		<!-- Start Page Banner -->
		<div class="container">
			<div class="row">
				<legend><h2>Department of Mathematical Sciences</h2></legend>
			</div>
		</div>
		<!-- End Page Banner -->
		
		<!-- Start Content -->
		<div>
			<div>
				<div>		
					<!-- Page Content -->
					<div class="container"> 
					<div class="row">         
                        <h3>Fields of Study(General Degree)</h3>
                    </div>
<br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Mathematics- I</strong></p>
			</td>
		</tr>
		<tr>
			<th>
				
				<p>Course Code</p>
			</th>
			<th>
				<p>Course Title</p>
			</th>
			<th>
				<p>Credit Value</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Lect. &amp; Tute.</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Pract./Field Work</p>
			</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>
				<p>MTM 11012</p>
			</td>
			<td>
				<p>Set Theory</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 11022</p>
			</td>
			<td>
				<p>Vector Algebra and Geometry</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 12031</p>
			</td>
			<td>
				<p>Number Theory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 12041</p>
			</td>
			<td>
				<p>Group Theory I</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 12052</p>
			</td>
			<td>
				<p>Real Analysis</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 21012</p>
			</td>
			<td>
				<p>Mathematical Modeling</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 21022</p>
			</td>
			<td>
				<p>Vector Space and Matrices</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22031</p>
			</td>
			<td>
				<p>Elementary Differential Equations</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22041</p>
			</td>
			<td>
				<p>Group Theory-II</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22051</p>
			</td>
			<td>
				<p>Metric Spaces</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22062</p>
			</td>
			<td>
				<p>Integral Transforms</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31012</p>
			</td>
			<td>
				<p>Partial Differential Equations</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31022</p>
			</td>
			<td>
				<p>Linear Algebra</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31031</p>
			</td>
			<td>
				<p>Riemann Integrals and Infinite Series</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 32041</p>
			</td>
			<td>
				<p>Function of Several Variables</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 32052</p>
			</td>
			<td>
				<p>Complex Analysis</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 32061</p>
			</td>
			<td>
				<p>Ring Theory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p><strong>Total Credits</strong></p>
			</td>
			<td>
				<p><strong>26</strong></p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>
<br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Mathematics II</strong></p>
			</td>
		</tr>
		<tr>
			<th>
				<p>&nbsp;</p>
				<p>Course Code</p>
			</th>
			<th>
				<p>&nbsp;</p>
				<p>Course Title</p>
			</th>
			<th>
				<p>Credit Value</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Lect. &amp; Tute.</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Pract./Field Work</p>
			</th>
			</th>
		</tr>
</thead>

<tbody>
		<tr>
			<td>
				<p>MTM 11512</p>
			</td>
			<td>
				<p>Vector Calculus</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>

		<tr>
			<td>
				<p>MTM 11521</p>
			</td>
			<td>
				<p>Numerical Analysis I</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 12531</p>
			</td>
			<td>
				<p>Numerical Analysis II</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 12542</p>
			</td>
			<td>
				<p>Differential Geometry</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 21512</p>
			</td>
			<td>
				<p>Linear Programming I</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 21522</p>
			</td>
			<td>
				<p>Numerical Analysis III</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22531</p>
			</td>
			<td>
				<p>Mathematical Software MatLab)</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22542</p>
			</td>
			<td>
				<p>Tensor Calculus</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 22552</p>
			</td>
			<td>
				<p>Graph Theory</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31512</p>
			</td>
			<td>
				<p>Linear Programming II</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31522</p>
			</td>
			<td>
				<p>Ordinary Differential Equations</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 31531</p>
			</td>
			<td>
				<p>Topology</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 32542</p>
			</td>
			<td>
				<p>Fluid Dynamics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTM 32552</p>
			</td>
			<td>
				<p>Classical Mechanics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p><strong>Total Credits</strong></p>
			</td>
			<td>
				<p><strong>24</strong></p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>
<br/>

<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Applied Statistics</strong></p>
			</td>
		</tr>
		<tr>
			<th>
				<p><strong>&nbsp;</strong></p>
				<p>Course Code</p>
			</th>
			<th >
				<p><strong>&nbsp;</strong></p>
				<p>Course Title</p>
			</th>
			<th>
				<p>Credit Value</p>
			</th>
			<th >
				<p>No. of&nbsp; Hours</p>
				<p>Lect. &amp; Tute.</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Pract./Field Work</p>
			</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>
				<p>ASM 11012</p>
			</td>
			<td >
				<p>Introduction to Statistics and Probability</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>23</p>
			</td>
			<td>
				<p>21</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 11021</p>
			</td>
			<td>
				<p>Index Number</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 12032</p>
			</td>
			<td>
				<p>Probabilty Distribution</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>23</p>
			</td>
			<td>
				<p>21</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 12041</p>
			</td>
			<td>
				<p>Basic Data Analysis for Research</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 21012</p>
			</td>
			<td>
				<p>Theory of Statistics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 21021</p>
			</td>
			<td>
				<p>Introduction to Categorical Data Analysis&nbsp;</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 21031</p>
			</td>
			<td>
				<p>SPSS &nbsp;Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 22042</p>
			</td>
			<td>
				<p>Applied Regression Analysis</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 22052</p>
			</td>
			<td>
				<p>Statistical Quality Control</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 22061</p>
			</td>
			<td>
				<p>MINITAB Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 31012</p>
			</td>
			<td>
				<p>Sampling Techniques</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 31022</p>
			</td>
			<td>
				<p>Experimental Designs</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 31031</p>
			</td>
			<td>
				<p>SAS&nbsp; Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 32041</p>
			</td>
			<td>
				<p>Non-Parametric Methods in Data Analysis</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 32052</p>
			</td>
			<td>
				<p>Time Series Analysis</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ASM 32061</p>
			</td>
			<td>
				<p>EViews &nbsp;Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p><strong>Total Credits</strong></p>
			</td>
			<td>
				<p><strong>24</strong></p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

<br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p ><strong>&shy;</strong> <strong>Computer </strong><strong>Science</strong></p>
			</td>
		</tr>
		<tr>
			<th>
				<p>Course Code</p>
			</th>
			<th>
				<p>Course Title</p>
			</th>
			<th>
				<p>Credit Value</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Lect. &amp; Tute.</p>
			</th>
			<th>
				<p>No. of&nbsp; Hours</p>
				<p>Pract./Field Work</p>
			</th>
		</tr>
</thead>
<tbody>
		<tr>
			<td>
				<p>CSM 11011</p>
			</td>
			<td>
				<p>System Fundamentals and Digital Organization</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 11022</p>
			</td>
			<td>
				<p>Fundamentals of&nbsp; Programming and Programming Languages</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>23</p>
			</td>
			<td>
				<p>21</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 12032</p>
			</td>
			<td>
				<p>Object Oriented Programming, Analysis and Design</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 12041</p>
			</td>
			<td>
				<p>Object Oriented Programming&nbsp; Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 21012</p>
			</td>
			<td>
				<p>Algorithms and Complexity</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 21021</p>
			</td>
			<td>
				<p>Operating Systems</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 21031</p>
			</td>
			<td>
				<p>Advanced Algorithms Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 22042</p>
			</td>
			<td>
				<p>Internet Programming&nbsp; and&nbsp; Web Services</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 22052</p>
			</td>
			<td>
				<p>Networking&nbsp; and Communication</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 22061</p>
			</td>
			<td>
				<p>Internet&nbsp; Programming Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 31012</p>
			</td>
			<td>
				<p>System Analysis, Design and&nbsp; Engineering</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 31022</p>
			</td>
			<td>
				<p>Database Management System</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 31031</p>
			</td>
			<td>
				<p>DBMS Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 32042</p>
			</td>
			<td>
				<p>Software Project Management</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 32051</p>
			</td>
			<td>
				<p>Introduction to Image Processing</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>-</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSM 32061</p>
			</td>
			<td>
				<p>Image Processing Laboratory</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>-</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p><strong>Total Credits</strong></p>
			</td>
			<td>
				<p><strong>24</strong></p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

<br/><br/>
<div class="row">         
    <h3>Fields of Study(Honors Degree)</h3>
</div>
<br/>

<table class="table table-hover">
    <thead>
        <tr>
            <td colspan="5">
                <p><strong>Honors Degree in Computer Science </strong></p>
            </td>
        </tr>
        <tr>
            <th>
                <p><strong>Level</strong></p>
            </th>
            <th>
                <p><strong>Semester</strong></p>
            </th>
            <th>
                <p><strong>Code</strong></p>
            </th>
            <th>
                <p><strong>Title</strong></p>
            </th>
            <th>
            	<p><strong>Credits</strong></p>
            </th>
        </tr>
    </thead>

    <tbody>
       <tr>
			<td rowspan="9">
				<p>III</p>
			</td>
			<td rowspan="9">
				<p>I</p>
			</td>
			<td>
				<p>CSS 31012</p>
			</td>
			<td>
				<p>Mathematics for Computing *</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 31022</p>
			</td>
			<td>
				<p>Mathematical Modeling for Computing **</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 31031</p>
			</td>
			<td>
				<p>Computer Systems </p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 31042</p>
			</td>
			<td>
				<p>Operating Systems Theory and System Programming</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 31052</p>
			</td>
			<td>
				<p>Analysis and Design of Information Systems</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 31062</p>
			</td>
			<td>
				<p>Group Project</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 32073</p>
			</td>
			<td>
				<p>Language Processors and Natural Language Processing</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 32083</p>
			</td>
			<td>
				<p>Distributed Computing</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 32093</p>
			</td>
			<td>
				<p>Formal Methods</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td rowspan="10">
				<p>IV</p>
			</td>
			<td rowspan="4">
				<p>I</p>
			</td>
			<td>
				<p>CSS 41013</p>
			</td>
			<td>
				<p>Seminar and Report Writing &ndash; Computer Science</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 41023</p>
			</td>
			<td>
				<p>Artificial Intelligence and Logic Programming</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 41033</p>
			</td>
			<td>
				<p>Advanced Database Systems</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 41046</p>
			</td>
			<td>
				<p>Research Project &ndash; Computer Science</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td rowspan="6">
				<p>II</p>
			</td>
			<td>
				<p>CSS 41052</p>
			</td>
			<td>
				<p>Industrial Training</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 42063</p>
			</td>
			<td>
				<p>Computer Graphics and Vision</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 41073</p>
			</td>
			<td>
				<p>High Performance computing</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 41083</p>
			</td>
			<td>
				<p>Information Theory, Coding and Cryptography</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 42093</p>
			</td>
			<td>
				<p>New Paradigms in Computing</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CSS 42103</p>
			</td>
			<td>
				<p>Scientific Computing</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
	</tbody>
</table>
*offered for Biological Science Students. ** offered for physical science students

<br/><br/><br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Honors Degree in Mathematics</strong></p>
			</td>
		</tr>
		<tr>
			<th>
				<p><strong>Level</strong></p>
			</th>
			<th>
				<p><strong>Semester</strong></p>
			</th>
			<th>
				<p><strong>Code</strong></p>
			</th>
			<th>
				<p><strong>Title</strong></p>
			</th>
			<th>
				<p><strong>Credits</strong></p>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="4">
				<p>III</p>
			</td>
			<td rowspan="2" width="72">
				<p>I</p>
			</td>
			<td>
				<p>MTS 31013</p>
			</td>
			<td>
				<p>Mathematical Methods</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 31023</p>
			</td>
			<td>
				<p>Numerical Linear Algebra</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td rowspan="2" width="72">
				<p>II</p>
			</td>
			<td>
				<p>MTS 32033</p>
			</td>
			<td>
				<p>Multivariate Calculus</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 32043</p>
			</td>
			<td>
				<p>Group Theory</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td rowspan="9">
				<p>IV</p>
			</td>
			<td rowspan="4" width="72">
				<p>I</p>
			</td>
			<td>
				<p>MTS 41013</p>
			</td>
			<td>
				<p>Further Mathematical Modeling</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 41023</p>
			</td>
			<td>
				<p>Numerical Solutions of ODE</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 41033</p>
			</td>
			<td>
				<p>Further Topology</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 41043</p>
			</td>
			<td>
				<p>Measure Theory</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td rowspan="5" width="72">
				<p>II</p>
			</td>
			<td>
				<p>MTS 42053</p>
			</td>
			<td>
				<p>Functional Analysis</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 42063</p>
			</td>
			<td>
				<p>Further Complex Analysis</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 42073</p>
			</td>
			<td>
				<p>Financial Mathematics</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p><strong>*</strong></p>
				<p>MTS 42083 </p>
                <p>MTS 420103 </p>
                <p>MTS 420113</p>
				<p>MTS 420123</p>
				<p>MTS 420133</p>
			</td>
			<td>
				<p><strong>*</strong></p>
				<p>Ring Theory</p>
				<p>Relativity</p>
				<p>Numerical Methods</p> 
                <p>Scientific Computing Optimization</p>
				<p>Actuarial Mathematics</p>
			</td>
			<td>
				<p>3</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>MTS 42096</p>
			</td>
			<td>
				<p>Research Project</p>
			</td>
			<td>
				<p>6</p>
			</td>
		</tr>
	</tbody>
</table>
<br>
 <p>Student can select one course from (*) row based on the availability of the resources.</p><br/>
 </div>
<!-- End Page Content-->
		
		<br/>							
	<!--Head-->
				<div>					
                      <div class="container">
                        <div class="row">
                        	<h3><legend>HEAD OF THE DEPARTMENT</legend></h3>
                        </div>
  			<br/>
				<img src="img/koma.png" style="width:85px; height:95px; margin-left: 300px;">

				<div style=" margin-left: 415px; margin-top:-100px;">
  
                          <h4>Dr. K. Komathiraj</h4>
							
						<div>
							<i class="fa fa-envelope icon"></i>
                        	<a href='mailto:komathiraj@seu.ac.lk'>komathiraj@seu.ac.lk</a>
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                        	+94 67 2260467
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                            +94 71 8303010<br>                            
     					</div>
     					<br/><br/>
     				</div>                  
						
				</div>

				<br/><br/><br/>
		<!--End Head-->
					
					
				</div>
			</div>
		</div>    
        
    </div>
    <!-- End Full Body Container -->

    <footer class="footer" style="font-family: 'Roboto', sans-serif;font-size: 14px;font-weight: 400;color: #a5a5a5;">
		<div class="container">
			
			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="img/logo1.png" alt="">
								<img style="padding-bottom:60px;" src="img/logo2.png" alt="">
								
								
								
							</div>
						</div>
					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
					<div class="footer_column_title" style="margin-left: 100px; margin-top: 50px;">Menu</div>
					  <div class="footer_column_content">
						  <ul style="margin-left: 100px;">
								<li class="footer_list_item"><a href="home.php">Home</a></li>
								<li class="footer_list_item"><a href="homecreate.php">Student Registration</a></li>
								<li class="footer_list_item"><a href="stulogin.php">Course Registration</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</div>


					<div class="col-lg-3 footer_col">
						<div class="footer_column_title" style="margin-left: 80px; margin-top: 50px;">Contact - SEUSL</div>
						<div class="footer_column_content">
							<ul style="margin-left: 80px;">
								<li class="footer_list_item">
									<i class="fa fa-envelope icon"></i>
									University Park, Oluvil,&nbsp &nbsp &nbsp &nbsp  #32360, Sri Lanka.
								</li>
								<li class="footer_list_item">
									<i class="fa fa-phone icon"></i>
									 +94 67 2255062 /63 /64 
								</li>
								<li class="footer_list_item">
									<i class="fa fa-fax icon"></i>
									+94 67 2255217
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title" style="margin-left: 50px; margin-top: 50px;">Social Media - SEUSL</div>
						<div class="footer_column_content">
							<ul style="margin-left: 120px;">
								<li class="footer_list_item"><a href="https://www.facebook.com/pages/South-Eastern-University-of-Sri-Lanka/992110304136392"><i style="margin-left: 5px;" class="fab fa-facebook-f"></i></a></li>
								<li class="footer_list_item"><a href="https://twitter.com/SEUSL_Oluvil"><i style="margin-left:2px;" class="fab fa-twitter"></i></a></li>
								<li class="footer_list_item"><a href="https://www.youtube.com/channel/UCUtXxXZnUq3OxnpHmCc8heg"><i style="margin-left: 1px;" class="fab fa-youtube"></i></a></li>
								<li class="footer_list_item"><a href="https://lk.linkedin.com/in/seusl"><i style="margin-left:2px;" class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>