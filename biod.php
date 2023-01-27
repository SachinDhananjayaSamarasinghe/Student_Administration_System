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
				<legend><h2>Department of Biological Sciences</h2></legend>
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
				<p><strong>Biology</strong></p>
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
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>
				<p>BLM 11012</p>
			</td>
			<td>
				<p>Principles of Biology</p>
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
				<p>BLM 11022</p>
			</td>
			<td>
				<p>Biological Chemistry</p>
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
				<p>BLM 12032</p>
			</td>
			<td>
				<p>Fundamentals of Ecology</p>
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
				<p>BLM 12042</p>
			</td>
			<td>
				<p>Fundamentals of Microbiology</p>
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
				<p>BLM 21012</p>
			</td>
			<td>
				<p>Form and Functions of organisms</p>
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
				<p>BLM 21022</p>
			</td>
			<td>
				<p>Introductory Environmental Biology</p>
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
				<p>BLM 22033</p>
			</td>
			<td>
				<p>Molecular Genetics and Biotechnology</p>
			</td>
			<td>
				<p>3</p>
			</td>
			<td>
				<p>33</p>
			</td>
			<td>
				<p>30</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLM 22042</p>
			</td>
			<td>
				<p>Ecosystems of Sri Lanka, Vegetational changes and measurement</p>
			</td>
			<td>
				<p>2</p>
			</td>
			<td>
				<p>22</p>
			</td>
			<td>
				<p>15</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLM 31013</p>
			</td>
			<td>
				<p>Horticulture</p>
			</td>
			<td>
				<p>3</p>
			</td>
			<td>
				<p>38</p>
			</td>
			<td>
				<p>21</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLM 31022</p>
			</td>
			<td>
				<p>Applied Entomology</p>
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
				<p>BLM 32032</p>
			</td>
			<td>
				<p>Aquaculture</p>
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
				<p>BLM 32042</p>
			</td>
			<td>
				<p>Applied Parasitology</p>
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

<br/><br/>
<div class="row">         
    <h3>Fields of Study(Honors Degree)</h3>
</div>
<br/>

<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Honors Degree in Applied Biology</strong></p>
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
				<p><strong>Credit value</strong></p>
			</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td rowspan="27">
				<p>III or IV</p>
			</td>
			<td rowspan="27">
				<p>I or II</p>
			</td>
			<td>
				<p>BLS 00011</p>
			</td>
			<td>
				<p>Animal Breeding</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00021</p>
			</td>
			<td>
				<p>Animal Husbandry</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00032</p>
			</td>
			<td>
				<p>Advanced parasitology and vector biology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00042</p>
			</td>
			<td>
				<p>Apiculture</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00053</p>
			</td>
			<td>
				<p>Economic Marine Biology</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00063</p>
			</td>
			<td>
				<p>Marine Bio-resources and Management</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00072</p>
			</td>
			<td>
				<p>Natural Resource Management</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00073</p>
			</td>
			<td>
				<p>Plant Pathology</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00092</p>
			</td>
			<td>
				<p>Enzymology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00102</p>
			</td>
			<td>
				<p>Bioinformatics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00112</p>
			</td>
			<td>
				<p>Analytical Techniques</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00122</p>
			</td>
			<td>
				<p>Post-Harvest Technology of Fruits and Vegetables</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00132</p>
			</td>
			<td>
				<p>Plant Tissue Culture</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00142</p>
			</td>
			<td>
				<p>Plant breeding</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00152</p>
			</td>
			<td>
				<p>Environmental Microbiology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00162</p>
			</td>
			<td>
				<p>Industrial and Food Microbiology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00172</p>
			</td>
			<td>
				<p>Restoration ecology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00192</p>
			</td>
			<td>
				<p>Aquatic biology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00202</p>
			</td>
			<td>
				<p>Biodiversity conservation and management</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00212</p>
			</td>
			<td>
				<p>Science Research Methodology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00222</p>
			</td>
			<td>
				<p>Experimental statistics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00233</p>
			</td>
			<td>
				<p>Environmental Economics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00243</p>
			</td>
			<td>
				<p>Environmental Impact Assessment</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00252</p>
			</td>
			<td>
				<p>Environmental Policy and Law</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00081</p>
			</td>
			<td>
				<p>Seminar-Applied Biology</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00096</p>
			</td>
			<td>
				<p>Industrial training-Applied Biology (optional)</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BLS 00106</p>
			</td>
			<td>
				<p>Research Project-Applied Biology</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<p><strong>Total number of credits</strong></p>
			</td>
			<td>
				<p><strong>64</strong></p>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<p><strong>Minimum number of credits required</strong></p>
			</td>
			<td>
				<p><strong>46</strong></p>
			</td>
		</tr>
	</tbody>
</table>
<br/>
<p><strong>Note: </strong>
	<br>
<br/><strong>1. </strong>	The course units offered in a particular semester will be determined before the commencement of the particular semester.<br/><br/>
	  <strong>2. </strong> The balance number of credits required, if any, to fulfill the total    number of credits (minimum 120) for the honors degree should be collected from the electives offered in level 3 or/and &nbsp &nbsp from among  the above.</p>
<br/><br/>

<table class="table table-hover">
	<thead>
		<tr>
			<td colspan="5">
				<p><strong>Honors Degree in Botany</strong></p>
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
				<p><strong>Credit value</strong></p>
			</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td rowspan="28">
				<p>III or IV</p>
			</td>
			<td rowspan="28">
				<p>I or II</p>
			</td>
			<td>
				<p>BTS 00012</p>
			</td>
			<td>
				<p>Plant Morphology and Anatomy</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00022</p>
			</td>
			<td>
				<p>Plant Taxonomy</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00032</p>
			</td>
			<td>
				<p>Algal Diversity</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00042</p>
			</td>
			<td>
				<p>Embryophyte Diversity</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00052</p>
			</td>
			<td>
				<p>Fungal Biology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00062</p>
			</td>
			<td>
				<p>Evolutionary Biology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00073</p>
			</td>
			<td>
				<p>Plant Pathology</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00082</p>
			</td>
			<td>
				<p>Advanced Plant Physiology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00092</p>
			</td>
			<td>
				<p>Enzymology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00102</p>
			</td>
			<td>
				<p>Bioinformatics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00112</p>
			</td>
			<td>
				<p>Analytical Techniques</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00122</p>
			</td>
			<td>
				<p>Post-Harvest Technology of Fruits and Vegetables</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00132</p>
			</td>
			<td>
				<p>Plant Tissue Culture</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00142</p>
			</td>
			<td>
				<p>Plant breeding</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00152</p>
			</td>
			<td>
				<p>Environmental Microbiology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00162</p>
			</td>
			<td>
				<p>Industrial and Food Microbiology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00172</p>
			</td>
			<td>
				<p>Restoration ecology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00182</p>
			</td>
			<td>
				<p>Economic botany</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00192</p>
			</td>
			<td>
				<p>Aquatic biology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00202</p>
			</td>
			<td>
				<p>Biodiversity conservation and management</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00212</p>
			</td>
			<td>
				<p>Science Research Methodology</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00222</p>
			</td>
			<td>
				<p>Experimental statistics</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00233</p>
			</td>
			<td>
				<p>Environmental Economics</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00243</p>
			</td>
			<td>
				<p>Environmental Impact Assessment</p>
			</td>
			<td>
				<p>03</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00253</p>
			</td>
			<td>
				<p>Environmental Policy and Law</p>
			</td>
			<td>
				<p>02</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00261</p>
			</td>
			<td>
				<p>Seminar-Botany</p>
			</td>
			<td>
				<p>01</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00276</p>
			</td>
			<td>
				<p>Industrial training-Botany (optional)</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>BTS 00286</p>
			</td>
			<td>
				<p>Research Project-Botany</p>
			</td>
			<td>
				<p>06</p>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<p><strong>Total number of credits</strong></p>
			</td>
			<td>
				<p><strong>66</strong></p>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<p><strong>Minimum number of credits required </strong></p>
			</td>
			<td>
				<p><strong>52</strong></p>
			</td>
		</tr>
	</tbody>
</table>
<br/>
<p><strong>Note: </strong><br/><br/>
<strong>1. </strong>The course units offered in a particular semester will be determined before the commencement of the particular semester.   
	<br/><br/> 
<strong>2. </strong>The balance number of credits required, if any, to fulfill the total number of credits (minimum 120) for the honors degree should be collected from the electives offered in level 3 or/and  &nbsp &nbsp from among the above.</p>   
<br/><br/>
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
				<img src="img/nazr.png" style="width:85px; height:95px; margin-left: 300px;">

				<div style=" margin-left: 415px; margin-top:-100px;">
  
                          <h4>Mr. A. Naseer Ahmed</h4>
							
						<div>
							<i class="fa fa-envelope icon"></i>
                        	<a href='mailto:nahmed312@yahoo.com'>nahmed312@yahoo.com</a>
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                        	+94 67 22 60892
                        </div>

                        <div>
                        	<i class="fa fa-phone icon"></i>
                            +94 77 2849372<br>                            
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