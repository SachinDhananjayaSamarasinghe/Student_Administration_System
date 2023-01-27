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
				<legend><h2>Department of Physical Sciences</h2></legend>
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
                <p><strong>Chemistry</strong></p>
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
				<p>CHM 11012</p>
			</td>
			<td>
				<p>General and Inorganic Chemistry</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHM 11021</p>
			</td>
			<td>
				<p>Practical Chemistry &ndash; I</p>
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
				<p>CHM 12032</p>
			</td>
			<td>
				<p>Essentials of Organic Chemistry</p>
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
				<p>CHM 12041</p>
			</td>
			<td>
				<p>Chemical Kinetics and Thermodynamics</p>
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
				<p>CHM 21011</p>
			</td>
			<td>
				<p>Electrochemistry</p>
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
				<p>CHM 21021</p>
			</td>
			<td>
				<p>Organic Spectroscopy</p>
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
				<p>CHM 21032</p>
			</td>
			<td>
				<p>Analytical Chemistry&nbsp;</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHM 22041</p>
			</td>
			<td>
				<p>Introduction to Quantum Chemistry and Surface Chemistry</p>
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
				<p>CHM 22051</p>
			</td>
			<td>
				<p>Co-ordination Chemistry</p>
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
				<p>CHM 22062</p>
			</td>
			<td>
				<p>Organic Synthesis and Reaction Mechanisms</p>
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
				<p>CHM 22071</p>
			</td>
			<td>
				<p>Mineralogy and Metallurgy</p>
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
				<p>CHM 31012</p>
			</td>
			<td>
				<p>Introduction to Solid State Chemistry and Organometallic Chemistry</p>
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
				<p>CHM 31021</p>
			</td>
			<td>
				<p>Bioorganic Molecules</p>
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
				<p>CHM 31031</p>
			</td>
			<td>
				<p>Industrial Chemistry&nbsp;</p>
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
				<p>CHM 31041</p>
			</td>
			<td>
				<p>Practical Chemistry II</p>
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
				<p>CHM 32051</p>
			</td>
			<td>
				<p>Analytical Techniques in Chemistry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
				<p>CHM 32061</p>
			</td>
			<td>
				<p>Chemistry of Natural Products&nbsp;</p>
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
				<p>CHM 32072</p>
			</td>
			<td>
				<p>Environmental Chemistry</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>15</p>
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
				<p><strong>Earth Science</strong></p>
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
				<p>Lect. &amp; Tute</p>
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
				<p>ESM 11012</p>
			</td>
			<td>
				<p>Introduction to Earth Science</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>25</p>
			</td>
			<td>
				<p>15</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ESM 11021</p>
			</td>
			<td>
				<p>Earth Surface Processes I</p>
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
				<p>ESM 12032</p>
			</td>
			<td>
				<p>Introduction to Mapping and Remote Sensing</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ESM 12041</p>
			</td>
			<td>
				<p>Earth Surface Processes II</p>
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
				<p>ESM 21012</p>
			</td>
			<td>
				<p>Tectonics and Field Geology</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>45</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ESM 21022</p>
			</td>
			<td>
				<p>Geochemistry</p>
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
				<p>ESM 22032</p>
			</td>
			<td>
				<p>Crystallography and Mineralogy</p>
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
				<p>ESM 22042</p>
			</td>
			<td>
				<p>Petrology</p>
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
				<p>ESM 22051</p>
			</td>
			<td>
				<p>Practical in Crystallography, Mineralogy and Petrology</p>
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
				<p>ESM 31012</p>
			</td>
			<td>
				<p>Soil Mechanics and Hydrology</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>22</p>
			</td>
			<td>
				<p>24</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ESM 31022</p>
			</td>
			<td>
				<p>Geophysics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>25</p>
			</td>
			<td>
				<p>15</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>ESM 31031</p>
			</td>
			<td>
				<p>Geology of Sri Lanka</p>
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
				<p>ESM 32042</p>
			</td>
			<td>
				<p>Oceanography</p>
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
				<p>ESM 32052</p>
			</td>
			<td>
				<p>Environmental Geochemistry</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>22</p>
			</td>
			<td>
				<p>24</p>
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
				<p><strong>Physics</strong></p>
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
				<p>PHM 11012</p>
			</td>
			<td>
				<p>General Physics</p>
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
				<p>PHM 11021</p>
			</td>
			<td>
				<p>Physics in Biology and Medicine</p>
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
				<p>PHM 12032</p>
			</td>
			<td>
				<p>Thermal and Environmental Physics</p>
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
				<p>PHM 12041</p>
			</td>
			<td>
				<p>Introductory Nanoscience and Nanotechnology</p>
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
				<p>PHM 21011</p>
			</td>
			<td>
				<p>Electromagnetism</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 21022</p>
			</td>
			<td>
				<p>Quantum and Atomic Physics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 21031</p>
			</td>
			<td>
				<p>General Physics Laboratory I</p>
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
				<p>PHM 22042</p>
			</td>
			<td>
				<p>Oscillation and AC Theory</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 22052</p>
			</td>
			<td>
				<p>Electronics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 22061</p>
			</td>
			<td>
				<p>Electronic Laboratory I</p>
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
				<p>PHM 31012</p>
			</td>
			<td>
				<p>Physical Optics and Optical Instruments</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 31022</p>
			</td>
			<td>
				<p>Solid State Physics</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>30</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 31031</p>
			</td>
			<td>
				<p>General Physics Laboratory II</p>
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
				<p>PHM 32041</p>
			</td>
			<td>
				<p>Statistical Physics</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 32051</p>
			</td>
			<td>
				<p>Special Theory of Relativity</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 32061</p>
			</td>
			<td>
				<p>Nuclear Physics</p>
			</td>
			<td>
				<p>1</p>
			</td>
			<td>
				<p>15</p>
			</td>
			<td>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHM 32071</p>
			</td>
			<td>
				<p>General Physics Laboratory III</p>
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
				<p>&nbsp;</p>
			</td>
			<td>
				<p><strong>Total Credits</strong></p>
			</td>
			<td>
				<p><strong>24</strong></p>
			</td>
			<td>
				<p><strong>&nbsp;</strong></p>
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
				<p><strong>Honors Degree in Physics</strong></p>
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
			<td rowspan="7">
				<p>III</p>
			</td>
			<td rowspan="4">
				<p>I</p>
			</td>
			<td>
				<p>PHS 31012</p>
			</td>
			<td>
				<p>Mathematical Methods in Physics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73023</p>
			</td>
			<td>
				<p>Advanced Electronics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73033</p>
			</td>
			<td>
				<p>Advanced Solid State Physics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 32042</p>
			</td>
			<td>
				<p>Advanced Physics Laboratory&nbsp; I</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td rowspan="3">
				<p>II</p>
			</td>
			<td>
				<p>PHS 73053</p>
			</td>
			<td>
				<p>Advanced Optics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73063</p>
			</td>
			<td>
				<p>Advanced Quantum Mechanics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 32072</p>
			</td>
			<td>
				<p>Advanced Physics Laboratory&nbsp; II</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td rowspan="12">
				<p>IV</p>
			</td>
			<td rowspan="5">
				<p>I</p>
			</td>
			<td>
				<p>PHS 41081</p>
			</td>
			<td>
				<p>Seminar Presentation and Essay Writing-Physics</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 41096</p>
			</td>
			<td>
				<p>Research Project - Physics</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 41104</p>
			</td>
			<td>
				<p>Advanced Physics Laboratory III</p>
			</td>
			<td>
				<p>04</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73112</p>
			</td>
			<td>
				<p>Polymer Physics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73122</p>
			</td>
			<td>
				<p>Advanced Nuclear Physics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td rowspan="7">
				<p>II</p>
			</td>
			<td>
				<p>PHS 73132</p>
			</td>
			<td>
				<p>Advanced Classical Mechanics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73141</p>
			</td>
			<td>
				<p>Ceramics</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73153</p>
			</td>
			<td>
				<p>Electromagnetic Theory and Waves</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73163</p>
			</td>
			<td>
				<p>Nanoscience and Nanotechnology</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73172</p>
			</td>
			<td>
				<p>Superconductivity and Application</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73182</p>
			</td>
			<td>
				<p>Advanced Statistical Physics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>PHS 73192</p>
			</td>
			<td>
				<p>Particle Physics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
	</tbody>
</table>
<br/><br/>

<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Elective course offered by Physics Unit</strong></p>
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
			<td>
				<p>III</p>
			</td>
			<td>
				<p>I/II</p>
			</td>
			<td>
				<p>PHE 30012</p>
			</td>
			<td>
				<p>Data Acquisition and Signal processing</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
	</tbody>
</table>

<br/><br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Honors Degree in Chemistry</strong></p>
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
			<td rowspan="8">
				<p>III</p>
			</td>
			<td rowspan="4">
				<p>I</p>
			</td>
			<td>
				<p>CHS 31012</p>
			</td>
			<td>
				<p>Advanced Techniques in Analytical and Spectroscopic Methods</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 31023</p>
			</td>
			<td>
				<p>Advanced Organic Chemistry I</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 31032</p>
			</td>
			<td>
				<p>Advanced Practical Inorganic Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 31042</p>
			</td>
			<td>
				<p>Advanced Practical Physical Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td rowspan="4">
				<p>II</p>
			</td>
			<td>
				<p>CHS 32053</p>
			</td>
			<td>
				<p>Applications of Group Theory Diffraction Methods and Clusters</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 32061</p>
			</td>
			<td>
				<p>Modern Reagents and Protective Groups</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 32072</p>
			</td>
			<td>
				<p>Advanced Practical Organic Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 32083</p>
			</td>
			<td>
				<p>Advanced Topics in Physical Chemistry</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td rowspan="12">
				<p>IV</p>
				<p>&nbsp;</p>
			</td>
			<td rowspan="6">
				<p>I</p>
			</td>
			<td>
				<p>CHS 41011</p>
			</td>
			<td>
				<p>Seminar and Essay writing- Chemistry</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 41023</p>
			</td>
			<td>
				<p>Advanced Coordination Chemistry, Magneto Chemistry and Organometallic Chemistry</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 41032</p>
			</td>
			<td>
				<p>Peri-cyclic Reactions and Organic Photochemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 41042</p>
			</td>
			<td>
				<p>Advanced Organic Chemistry II</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 41052</p>
			</td>
			<td>
				<p>Applied Natural Product Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 41066</p>
			</td>
			<td>
				<p>Research Project - Chemistry</p>
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
				<p>CHS 42072</p>
			</td>
			<td>
				<p>Chemistry of Secondary Metabolites and Therapeutic Agents</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 42081</p>
			</td>
			<td>
				<p>Bioinorganic Chemistry, Nuclear and Radio- Chemistry</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 42093</p>
			</td>
			<td>
				<p>Molecular Dynamics and Quantum Chemistry</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 42102</p>
			</td>
			<td>
				<p>Chemical Ecology and Environmental Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 42113</p>
			</td>
			<td>
				<p>Advanced Thermodynamics and Molecular Modeling</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHS 42123</p>
			</td>
			<td>
				<p>Bio-Chemistry and Application of Bio-Technology</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
	</tbody>
</table>

<br/><br/>
<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Elective courses offered by Chemistry Unit </strong></p>
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
			<td rowspan="3">
				<p>III</p>
			</td>
			<td rowspan="3">
				<p>I/II</p>
				<p>&nbsp;</p>
			</td>
			<td>
				<p>CHE 30012</p>
			</td>
			<td>
				<p>Quality Control, Sampling Statistics and Computer Applications in Analytical Chemistry</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>CHE 30021</p>
			</td>
			<td>
				<p>Food Science</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>LME 30031</p>
			</td>
			<td>
				<p>Laboratory and Quality Management</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
	</tbody>
</table>                    
<br/>
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
				<img src="img/nawz.png" style="width:85px; height:95px; margin-left: 300px;">

				<div style=" margin-left: 415px; margin-top:-100px;">
  
                          <h4>Mr. MF. Nawas</h4>
							
						<div>
							<i class="fa fa-envelope icon"></i>
                        	<a href='mailto:mfnawas@seu.ac.lk, mfnawas@yahoo.com'>mfnawas@seu.ac.lk, mfnawas@yahoo.com</a>
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                        	 +94 67 2260073
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                            +94 77 7900946<br>                            
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