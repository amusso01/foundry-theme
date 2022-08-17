<?php
/**
 * Template Name: Type Form page
 * 
 * Template Post Type: page
 *
 * This template shows Brief form
 * 
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<style type="text/css">
	html, body {
	 padding: 0;
	 margin: 0;
	 width: 100%;
	 height: 100%;
	 background: #FFF;
	}
#btnPrev{background-color: #fff; color: #000;}
#btnPrev:hover{background: #4D525F;border: 2px solid #4D525F; color: #fff;}

 .ui-formSlide {
	 display: block;
	 position: relative;
	 padding: 0;
	 font-size: 0;
	 width: 100%;
	 overflow-x: hidden;
	 overflow-y: auto;
	 z-index: 1;
	 height: 100%;
}
 .ui-formSlide li[data-step] {
	 width: 100%;
	 vertical-align: top;
	 font-size: 16px;
	 display: none;
	 white-space: normal;
}
 .ui-formSlide li[data-step] .ui-step-content {
	 opacity: 0;
	 -webkit-transition: 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) all;
	 -moz-transition: 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) all;
	 -ms-transition: 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) all;
	 -o-transition: 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) all;
	 transition: 0.2s cubic-bezier(0.645, 0.045, 0.355, 1) all;
}
 .ui-formSlide li[data-step] .ui-step-content.in {
	 opacity: 1;
}
 .ui-formSlide li[data-step].active {
	 display: inline-block;
}
/* custom */
 .ui-scalable {
	 transform-origin: 0 0;
}
 .card {
	 border: none;
}
 .table {
	 display: table;
	 width: 100%;
}
 .table.table-full {
	 height: 100%;
}
 .table .table-row {
	 display: table-row;
}
 .table .table-cell {
	 display: table-cell;
}
 .v-align-top {
	 vertical-align: top;
}
 .v-align-middle {
	 vertical-align: middle;
}
 .v-align-bottom {
	 vertical-align: bottom;
}
 .buttons {
	 padding-top: 50px;
	 text-align: center;
}
.page-template-typeform .buttons button {
	 display: inline-block;
    vertical-align: middle;
    padding: 10px 10px;
    background: #000000;
    border-radius: 21px;
    min-width: 100px;
    border: 0;
    color: white;
    cursor: pointer;
    box-shadow: 0 1px 3px rgb(0 0 0 / 30%);
    max-width: 170px;
    width: 100%;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    border: 2px solid #000;
}
.page-template-typeform .buttons button:hover {
	 background: #4D525F;
	 border: 2px solid #4D525F;
}

.blackbuttom{
	display: inline-block;
    vertical-align: middle;
    padding: 10px 10px;
    background: #000000;
    border-radius: 21px;
    min-width: 100px;
    border: 0;
    color: white;
    cursor: pointer;
    box-shadow: 0 1px 3px rgb(0 0 0 / 30%);
    max-width: 170px;
    width: 100%;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    border: 2px solid #000;
}
.blackbuttom:hover{background: #4D525F;border: 2px solid #4D525F; color: #FFFFFF;}

.whitebuttom{
	display: inline-block;
    vertical-align: middle;
    padding: 10px 10px;
    background: #FFFFFF;
    border-radius: 21px;
    min-width: 100px;
    border: 0;
    color: #000;
    cursor: pointer;
    box-shadow: 0 1px 3px rgb(0 0 0 / 30%);
    max-width: 170px;
    width: 100%;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    border: 2px solid #000;
}
.whitebuttom:hover{background: #4D525F;border: 2px solid #4D525F; color: #FFFFFF;}

#startbtn{margin-top: 177px;}

.disable{background-color: #C4C4C4; border: 2px solid #C4C4C4; pointer-events: none;}
.dis{background-color: #C4C4C4!important; border: 2px solid #C4C4C4!important; pointer-events: none;}

.page-template-page-templatestypeform-php{background-color: #fff;}
.page-template-page-templatestypeform-php #wrapper-navbar .navbar.bg-primary{background-color: #fff;}
/*.page-template-page-templatestypeform-php footer,.page-template-page-templatestypeform-php #wrapper-footer, .page-template-page-templatestypeform-php .footerbanner{display: none!important;}*/

.ui-step-content h1{font-weight: 900; font-size: 60px; line-height: 65px; margin-bottom: 6px; letter-spacing: 1.8px; }
.ui-step-content h2{color: #707070;font-size: 17px;line-height: 55px;font-weight: 700;line-height: 30px;max-width: 735px; }
.ui-step-content h3{color: #000000;font-size: 44px; line-height: 50px; font-weight: 700; letter-spacing: 0.88px; margin-bottom: 35px;}
.ui-step-content img{display: block; margin-bottom: 28px;}
.ui-step-content textarea{border: 2px solid #E0E0E0; padding: 18px; height: 120px; font-size: 16px; width: 100%;}
.ui-step-content input[type=text],.formtype input[type=email],.formtype input[type=tel]{    max-width: 100%;font-size: 16px!important;width: 100%;height: 40px;border: 2px solid #E0E0E0;margin-bottom: 50px;}
.blacksubmit {display: inline-block;}
.ui-step-content input[type="submit"],.blacksubmit  {
	background-color: #000;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 600;
    margin: 25px 0 0;
    cursor: pointer;
    border-radius: 21px;
    border: none;
    max-width: 170px;
    width: 100%;
}
.ui-step-content input[type="submit"]:hover, .blacksubmit:hover{background-color: #4D525F; color: #fff;}

.section {
	  width: 100%;
	  height: auto;
	  margin: 0;
	  display: flex;
	  align-items: center;
	  justify-items: center;
	  background: #FFF;
}

.labelop {
		 display: inline-block;
		 cursor: pointer;
		 font-weight: 500;
		 position: relative;
		 overflow: hidden;
		 margin-bottom: 0.375em;
		/* Accessible outline */
		/* Remove comment to use */
		/* &:focus-within {
			 outline: .125em solid $primary-color;
		}
		 */
	}
	 .labelop input {
		 position: absolute;
		 left: -9999px;
	}
	 .labelop input:checked + span {
		 background-color: #383838;color: #fff;
	}
	 .labelop input:checked + span:before {
		 box-shadow: inset 0 0 0 0.4375em #00005c;
	}
	 .labelop span {
		 display: flex;
	    align-items: center;
	    padding: 11px 34px;
	    border-radius: 99em;
	    transition: 0.25s ease;
	    font-size: 16px;
	    color: #212531;
	    border: 1px solid #E0E0E0;
	    margin: 0 8px 0;
	}
	 .labelop span:hover {
		 background-color: #383838;color: #fff;
	}
	 .labelop span:before {
		 display: none;
	}

	/*checkbox style*/
	.cont {
	  display: inline-block;
	  position: relative;
	  padding-left: 35px;
	  margin-bottom: 12px;
	  cursor: pointer;
	  font-size: 22px;
	  -webkit-user-select: none;
	  -moz-user-select: none;
	  -ms-user-select: none;
	  user-select: none;
	  font-size: 16px;
	  margin-top: 35px;
	}

	/* Hide the browser's default checkbox */
	.cont input {
	  position: absolute;
	  opacity: 0;
	  cursor: pointer;
	  height: 0;
	  width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
	      position: absolute;
    top: 0;
    left: 0;
    height: 27px;
    width: 27px;
    background-color: #fff;
    border: 2px solid #E0E0E0;
	}

	/* On mouse-over, add a grey background color */
	.cont:hover input ~ .checkmark {
	  background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.cont input:checked ~ .checkmark {
	  background-color: #fff;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
	  content: "";
	  position: absolute;
	  display: none;
	}

	/* Show the checkmark when checked */
	.cont input:checked ~ .checkmark:after {
	  display: block;
	}

	/* Style the checkmark/indicator */
	.cont .checkmark:after {
	  left: 7px;
	  top: 2px;
	  width: 10px;
	  height: 15px;
	  border: solid #000;
	  border-width: 0 3px 3px 0;
	  -webkit-transform: rotate(45deg);
	  -ms-transform: rotate(45deg);
	  transform: rotate(45deg);
	}

	.areaother{display: none;}
	.areaother.on{display: block;}

	.areaother input[type="text"]{border: 1px solid #E0E0E0;width: 100%;max-width: 414px;padding: 9px 5px;}

	/*box label*/
	.boxlabel {
		 display: inline-block;
		 cursor: pointer;
		 font-weight: 500;
		 position: relative;
		 text-align: right;
		 margin-bottom: 0.375em;
	}
	 .boxlabel input {
		 position: absolute;
		 left: -9999px;
	}
	 .boxlabel input:checked + span {
		     background-color: #fff;border: 2px solid #000;font-weight: 700;
	}
	 .boxlabel input:checked + span:before {
		 box-shadow: inset 0 0 0 0.4375em #000;
	}
	 .boxlabel span {
		display: block;
	    align-items: center;
	    padding: 0.375em 0.75em 0.375em 0.375em;
	    border-radius: 99em;
	    transition: 0.25s ease;
	    font-size: 20px;
	    color: #212531;
	    border: 2px solid #E0E0E0;
	    border-radius: 9px;
	    margin: 0 15px;
	    width: 192px;
	    max-width: 192px;
	    height: 180px;
	    text-align: center;
	    font-size: 16px;
	    font-weight: 500;
	}
	.boxlabel span img{
		margin: 0 auto 22px;
	}
	 .boxlabel span:hover {
		 background-color: #fff;border: 2px solid #000;font-weight: 700;
	}
	
	 .boxlabel span:before {
		 display: flex;
		 flex-shrink: 0;
		 content: "";
		 background-color: #fff;
		 width: 1.5em;
		 height: 1.5em;
		 border-radius: 50%;
		 margin-right: 0.375em;
		 transition: 0.25s ease;
		 box-shadow: inset 0 0 0 0.125em #E0E0E0;
	}

	/*Radiolabel*/
	.radiolabel {
		 display: inline-block;
		 cursor: pointer;
		 font-weight: 500;
		 position: relative;
		 text-align: right;
		 margin-bottom: 0.375em;
	}
	 .radiolabel input {
		 position: absolute;
		 left: -9999px;
	}
	 .radiolabel input:checked + span {
		     background-color: #fff;border: 2px solid #000;font-weight: 700;
	}
	 .radiolabel input:checked + span:before {
		 box-shadow: inset 0 0 0 0.4375em #000;
	}
	 .radiolabel span {
		display: flex;
	    align-items: center;
	    padding: 6px 10px;
	    border-radius: 21px!important;
	    transition: 0.25s ease;
	    font-size: 20px;
	    color: #000;
	    border: 2px solid #E0E0E0;
	    border-radius: 9px;
	    margin: 0 15px;
	    text-align: center;
	    font-size: 16px;
	    font-weight: 500;
	}
	.radiolabel span img{
		margin: 0 auto 22px;
	}
	 .radiolabel span:hover {
		 background-color: #fff;border: 2px solid #000;font-weight: 700;
	}
	
	 .radiolabel span:before {
		 display: none;
	}

	.morebtn{
		display: inline-block;
	    vertical-align: middle;
	    padding: 10px 10px;
	    background: #fff;
	    border-radius: 21px;
	    min-width: 100px;
	    border: 0;
	    color: #000;
	    cursor: pointer;
	    box-shadow: 0 1px 3px rgb(0 0 0 / 30%);
	    max-width: 252px;
	    width: 100%;
	    font-size: 15px;
	    font-weight: 700;
	    text-transform: uppercase;
	    border: 2px solid #000;
	    margin-top: 175px;
	}
	.morebtn:hover{background: #4D525F;border: 2px solid #4D525F; color: #fff;}

	/*tabs*/
	.tabs{padding: 0; margin: 52px 0 52px; text-align: center;}

.tabs li {
    list-style: none!important;
    display: inline-block!important;
    font-family: 'Oxygen', sans-serif;
    font-size: 14px;
    color: #424749;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.14px;
    font-weight: 300;
    list-style: disc outside none;
    display: list-item;
    margin-left: 1em;
    text-align: center;
    margin-bottom: 5px;
}
.tabs .circle{
	opacity: 0.5;
    font-family: 'Oxygen', sans-serif;
    display: block;
    width: 56px;
    height: 56px;
    margin: 0 auto 15px;
    border: none;
    border-radius: 100%;
    color: #fff;
    font-size: 40px;
    line-height: 50px;
    letter-spacing: 1.6px;
    font-weight: 700;
    vertical-align: middle;
    display: grid;
    align-items: center;
    background: #383838;
}
.tabs span{
	opacity: 0.5;
    color: #383838;
    line-height: 22px;
    letter-spacing: 0.14px;
    font-size: 13px;
    font-weight: 700;
    font-family: proxima-nova,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    text-transform: uppercase;
    line-height: 15px;
}
.tabs img{display: block;margin: 0 auto;width: 100%;max-width: 30px;max-height: 30px;height: 100%;}
.tabs .active .circle{background-color: #383838; color: #FFFFFF; opacity: 1;}
.tabs .active span{opacity: 1;}

.dashedline {
    height: 2px;
    border-bottom: 3px solid #4D525F;
    width: 100%;
    max-width: 100px;
    margin: 0 14px;
    display: inline-block;
    position: relative;
    top: -80px;
}
.page-template-typeform .navbar.navbar-expand-md.bg-primary.rounded.navwhite{position: initial!important;}
/*resposnive*/
@media (max-width: 1199px){
	.dashedline{max-width: 60px;}
}

@media (max-width: 995px){
	.tabs img{max-width: 20px; max-height: 20px}
	.dashedline{display: none!important;}
	.tabs .circle{width: 35px; height: 35px;}
	.tabs li{margin: 0 20px 0;}

	#step6 .col-6{flex: 0 0 100%!important; max-width: 100%!important;}
}
@media(max-width: 540px){
	.tabs span{font-size: 11px;}
	.tabs li {margin: 0 15px 0;}
}
@media(max-width: 455px){
	.tabs li {margin: 0 10px 0;}

	.tabs span {font-size: 9px;}
}
}
 
</style>

<?php if( $_GET['send'] == 'yes' ){ ?>

	<?php 
		if ( $_POST['fullname'] != '' &&  $_POST['email'] != '') { 
	
			$my_post = array(
			  'post_type'=>'typeform', 
			  'post_title'    => $_POST['fullname'],
			  'post_status'   => 'private',
			  'post_content'=>''
			);
			$post_id = wp_insert_post( $my_post );

			//Insert in ACF
			if ( $_POST['radio'] == '' ) {
				update_field('field_6266edb2d1b99', 'Other', $post_id);
			}else{
				update_field('field_6266edb2d1b99', $_POST['radio'], $post_id);
			}

			if ( $_POST['otherproject'] ) {
				update_field('field_62f1004851f38', $_POST['otherproject'], $post_id);
			}
			
			update_field('field_6266ee6fd1b9a', $_POST['cat'], $post_id);
			update_field('field_6266eeb3d1b9b', $_POST['budget'], $post_id);
			update_field('field_6266eeffd1b9d', $_POST['fullname'], $post_id);
			update_field('field_6266ef1bd1b9f', $_POST['email'], $post_id);
			

			if ( $_POST['company'] ) {
				update_field('field_6266ef12d1b9e', $_POST['company'], $post_id);
			}

			if ( $_POST['tel'] ) {
				update_field('field_62692c69e587a', $_POST['tel'], $post_id);
			}

			if ( $_POST['timecall'] == '' ) {
				update_field('field_62692c7ee587b', 'No selected', $post_id);
			}else{
				update_field('field_62692c7ee587b', $_POST['timecall'], $post_id);
			}

			if ( $_POST['kind'] ) {
				update_field('field_6266eeecd1b9c', $_POST['kind'], $post_id);
			}
			

			//Email notification

			$message = '
				<html>
		        <head>
		        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		            <title></title>
		        </head>
		        <body>
		            <div style="max-width: 800px; margin: 0 auto; background: #FFF;">
		            <img 
		            style="display: block; margin: 0 auto 0px; width: 200px;" src="https://www.fdry.com/wp-content/uploads/2022/04/fdrylogo.png">
		            <div style="background-color: #000; color:#fff; padding: 20px 0; text-align: center;"><h2 color: #fff; font-weight: 300;>New Website Brief</h2></div>

		            <div style="padding: 0 20px;">
		            
		            <p>Hi Andres,</p>
		            

		            <p>A visitor to FDRY has submitted aa project brief. See details below</p>
		            <br>

		            <h4>Personal Information</h4>
		            <p><strong>Full name: </strong> '.$_POST['fullname'].'</p>
		            <p><strong>Company: </strong> '.$_POST['company'].'</p>
		            <p><strong>Email: </strong> '.$_POST['email'].'</p>
		            <p><strong>Tel: </strong> '.$_POST['tel'].'</p>
		            <p><strong>Time call: </strong> '.$_POST['timecall'].'</p>
					<br>
		            <h4>Project Details</h4>
		            <p><strong>Type of project: </strong> '.$_POST['radio'].'</p>
		            <p><strong>Business category: </strong> '.$_POST['cat'].'</p>
		            <p><strong>Budget: </strong> '.$_POST['budget'].'</p>
		            <p><strong>Project Brief: </strong> '.$_POST['kind'].'</p>
		            
		            
		            </div>
		            
		            <br><br>

		            <div style="background-color: #000; color:#fff; padding: 10px 0; text-align: center;">FDRY</div>
		            </div>
		        </body>
		        </html>
			';
			//$headers .= "From: FDRY <fdry@fdry.com> \r\n"; 
			$headers = "";
			$headers .= "From: FDRY <fdry@fdry.com> \r\n";
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			//$headers .= array('Content-Type: text/html; charset=UTF-8');
			$to = "andres@fdry.com";
			$subject = "FDRY New Brief";
			$mail = wp_mail($to, $subject, $message, $headers);

		}

	?>


	<div class="section">
		<div class="container">
			<div class="ui-step-content">
				<center>
					<img style="margin-top: 80px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/icon-thanks.svg">
					<h1 style="text-transform: uppercase;">We've received your brief!</h1>
					<h2 style="text-transform: uppercase;">Sit back and relax, we'll get in touch with you soon.</h2>
					<a class="morebtn" href="<?php echo get_the_permalink(50); ?>">Take a look at our work</a>
				</center>
			</div>
		</div>
	</div>

<?php }else{ ?>

		<div class="section">
			<div class="container">
			<div class="table table-full align-center">
			  <div class="table-row h100">
			    <div class="table-cell v-align-bottom">
			      <!-- ui-slide -->
			      <div class="relative">
			        <!-- card -->
			        <form class="formtype" action="?send=yes" method="post">
				        <div class="card">
				          <ul class="ui-formSlide">
				            <li id="step1" data-step="1" class="active">
				              <div class="ui-step-content in">
				              	<center>
					              	<img style="margin-top: 80px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/icon-welcome.svg">
					                <h1>SEND US YOUR BRIEF</h1>
					                <h2 style="text-transform: uppercase;">We are ready to start working on your project. Calculate your budget and timescale to launch your digital business.</h2>

					                <a id="startbtn" class="blackbuttom" href="javascript:void(0)">START</a>

				                </center>
				              </div>
				            </li>
				            <li id="step2" data-step="2" class="">
				              <div class="ui-step-content">
				              	<ul class="tabs">
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/1-type.svg"></div><span>TYPE<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/2-business.svg"></div><span>BUSINESS<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li3" href="#panel3"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/3-budget.svg"></div><span>BUDGET<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li1" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/4-details.svg"></div><span>MORE<br>DETAILS</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/5-personal.svg"></div><span>PERSONAL<br>INFORMATION</span></a></li>
								 </ul>
				                <center>
				                	<h3>What type of project do you have in mind?</h3>
				                	<label class="labelop">
										<input type="radio" name="radio" value="Website Design"/>
										<span>Website Design</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="Ecommerce Website" />
										<span>Ecommerce Website</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="UI Design & UX" />
										<span>UI Design & UX</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="Brand Design" />
										<span>Brand Design</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="SEO" />
										<span>SEO</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="Email marketing" />
										<span>Email marketing</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="Conversion Rate Optimisation" />
										<span>Conversion Rate Optimisation</span>
									</label>
									<label class="labelop">
										<input type="radio" name="radio" value="Digital Advertising" />
										<span>Digital Advertising</span>
									</label>
									<br>
									<label class="cont">Other
									  <input id="otherfield" type="checkbox" name="radio" value="Other">
									  <span class="checkmark"></span>
									</label>


									<div class="areaother">
										<input type="text" name="otherproject" value="">
									</div>

									<div class="buttons">
									<a id="back1" class="whitebuttom" href="javascript:void(0)">BACK</a>
									<a id="next3" class="blackbuttom disable" href="javascript:void(0)">NEXT</a>
									</div>

				                </center>
				              </div>
				            </li>
				            <li id="step3" data-step="3">
				              <div class="ui-step-content">
				              	<ul class="tabs">
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/1-type.svg"></div><span>TYPE<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2 active" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/2-business.svg"></div><span>BUSINESS<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li3" href="#panel3"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/3-budget.svg"></div><span>BUDGET<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li1" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/4-details.svg"></div><span>MORE<br>DETAILS</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/5-personal.svg"></div><span>PERSONAL<br>INFORMATION</span></a></li>
								 </ul>
				                <center>
				                	<h3>What business category does your project fit into?</h3>
				                	<label class="boxlabel">
										<input type="radio" name="cat" value="B2B" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/business-btb.svg">B2B</span>
									</label>
									<label class="boxlabel">
										<input type="radio" name="cat" value="B2C" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/business-b2c.svg">B2C</span>
									</label>
									<label class="boxlabel">
										<input type="radio" name="cat" value="Marketplace" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/business-marketplace.svg">Marketplace</span>
									</label>

									<div class="buttons">
									<a id="back2" class="whitebuttom" href="javascript:void(0)">BACK</a>
									<a id="next4" class="blackbuttom disable" href="javascript:void(0)">NEXT</a>
									</div>

				                </center>
				              </div>
				            </li>
				            <li id="step4" data-step="4">
				              <div class="ui-step-content">
				              	<ul class="tabs">
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/1-type.svg"></div><span>TYPE<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2 active" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/2-business.svg"></div><span>BUSINESS<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li3 active" href="#panel3"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/3-budget.svg"></div><span>BUDGET<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li1" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/4-details.svg"></div><span>MORE<br>DETAILS</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/5-personal.svg"></div><span>PERSONAL<br>INFORMATION</span></a></li>
								 </ul>
				                <center>
				                	<h3>What is your budget?</h3>
				                	<label class="boxlabel">
										<input type="radio" name="budget" value="&pound;1,500 - &pound;3,500" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/budget-1.svg">&pound;1,500 - &pound;3,500</span>
									</label>
									<label class="boxlabel">
										<input type="radio" name="budget" value="&pound;3,500 - &pound;8,000" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/budger-2.svg">&pound;3,500 - &pound;8,000</span>
									</label>
									<label class="boxlabel">
										<input type="radio" name="budget" value="&pound;8,000 - &pound;15,000" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/budget-3.svg">&pound;8,000 - &pound;15,000</span>
									</label>
									<label class="boxlabel">
										<input type="radio" name="budget" value="&pound;15,000+" />
										<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/budget-4.svg">&pound;15,000+</span>
									</label>

									<div class="buttons">
									<a id="back3" class="whitebuttom" href="javascript:void(0)">BACK</a>
									<a id="next5" class="blackbuttom disable" href="javascript:void(0)">NEXT</a>
									</div>

				                </center>
				              </div>
				            </li>
				            <li id="step5" data-step="5">
				              <div class="ui-step-content">
				              	<ul class="tabs">
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/1-type.svg"></div><span>TYPE<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2 active" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/2-business.svg"></div><span>BUSINESS<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li3 active" href="#panel3"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/3-budget.svg"></div><span>BUDGET<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/4-details.svg"></div><span>MORE<br>DETAILS</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/5-personal.svg"></div><span>PERSONAL<br>INFORMATION</span></a></li>
								 </ul>
				                <center>
				                	<h3>Help us understand what kind of project you’re looking for so we can get back to you with a more accurate consultation:</h3>
				                	<textarea name="kind" placeholder="Tell us about your brand, what is this project for and the limitations…"></textarea>

				                	<div class="buttons">
									<a id="back4" class="whitebuttom" href="javascript:void(0)">BACK</a>
									<a id="next6" class="blackbuttom" href="javascript:void(0)">NEXT</a>
									</div>

				                </center>
				              </div>
				            </li>
				            <li id="step6" data-step="6">
				              <div class="ui-step-content">
				              	<ul class="tabs">
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/1-type.svg"></div><span>TYPE<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2 active" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/2-business.svg"></div><span>BUSINESS<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li3 active" href="#panel3"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/3-budget.svg"></div><span>BUDGET<br>&nbsp;</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li1 active" href="#panel1"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/4-details.svg"></div><span>MORE<br>DETAILS</span></a></li>
								  <div class="dashedline"></div>
								  <li><a class="li2 active" href="#panel2"><div class="circle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/typeformimg/5-personal.svg"></div><span>PERSONAL<br>INFORMATION</span></a></li>
								 </ul>
				                <div class="row">
				                	<div class="col-6">
				                		<h3>Full name *:</h3>
				                		<input type="text" id="fullname" name="fullname" required="required">
				                		<h3>Email *:</h3>
				                		<input type="email" id="email" name="email" required="required">
				                	</div>
				                	<div class="col-6">
				                		<h3>Company:</h3>
				                		<input type="text" id="comany" name="company">
				                		<h3>Telephone:</h3>
				                		<input type="tel" id="tel" name="tel" >
				                	</div>
				                </div>
				                <center>
				                	<h3>Please call me back. Best time to call you:</h3>
				                	<label class="radiolabel">
										<input type="radio" name="timecall" value="9.00am - 12.00pm" />
										<span>9.00am - 12.00pm</span>
									</label>
									<label class="radiolabel">
										<input type="radio" name="timecall" value="12.00pm - 3.00pm" />
										<span>12.00pm - 3.00pm</span>
									</label>
									<label class="radiolabel">
										<input type="radio" name="timecall" value="3.00pm - 6.00pm" />
										<span>3.00pm - 6.00pm</span>
									</label>

									<div class="buttons">
										<a id="back5" class="whitebuttom" href="javascript:void(0)">BACK</a>
										<a class="blacksubmit" href="javascript:void(0)">SUBMIT</a>
										<input style="display: none;" id="submit6" type="submit" value="Submit" class="dis">
									</div>
				                
				                
				                </center>
				              </div>
				            </li>

				          </ul>
				        </div>
			    	</form>
			        <!-- ./card -->
			      </div>
			      <!-- .ui-slide -->
			    </div>
			  </div>
			  <!--<div class="table-row align-center footer">
			    <div class="table-cell v-align-top">
			      <div class="buttons">
			      <button id="btnPrev">Back</button>
			      <button id="btnNext">Next</button>
			      </div>
			    </div>
			  </div>-->
			</div>  
			</div>
		</div>


				
<?php } ?>
			

<script type="text/javascript">

	//btn start
	$( "#startbtn" ).click(function() {
	  $( "#step2" ).addClass( "active" );
	  $( "#step2 .ui-step-content" ).addClass( "in" );

	  $( "#step1" ).removeClass( "active" );
	  $( "#step1 .ui-step-content" ).removeClass( "in" );
	});

	//2 step
	$( ".labelop input[type=radio]" ).change(function() {
	  $( "#step2 .blackbuttom" ).removeClass( "disable" );
	});
	$( "#otherfield" ).change(function() {
		if ( $(this).is(':checked') ) {
			$( "#step2 .blackbuttom" ).removeClass( "disable" );
		}
	});

	$( "#back1" ).click(function() {
	  $( "#step1" ).addClass( "active" );
	  $( "#step1 .ui-step-content" ).addClass( "in" );

	  $( "#step2" ).removeClass( "active" );
	  $( "#step2 .ui-step-content" ).removeClass( "in" );
	});

	$( "#next3" ).click(function() {
	  $( "#step3" ).addClass( "active" );
	  $( "#step3 .ui-step-content" ).addClass( "in" );

	  $( "#step2" ).removeClass( "active" );
	  $( "#step2 .ui-step-content" ).removeClass( "in" );
	});

	//step 3
	$( "#step3 .boxlabel input[type=radio]" ).change(function() {
	  $( "#step3 .blackbuttom" ).removeClass( "disable" );
	});

	$( "#back2" ).click(function() {
	  $( "#step2" ).addClass( "active" );
	  $( "#step2 .ui-step-content" ).addClass( "in" );

	  $( "#step3" ).removeClass( "active" );
	  $( "#step3 .ui-step-content" ).removeClass( "in" );
	});

	$( "#next4" ).click(function() {
	  $( "#step4" ).addClass( "active" );
	  $( "#step4 .ui-step-content" ).addClass( "in" );

	  $( "#step3" ).removeClass( "active" );
	  $( "#step3 .ui-step-content" ).removeClass( "in" );
	});

	//step 4
	$( "#step4 .boxlabel input[type=radio]" ).change(function() {
	  $( "#step4 .blackbuttom" ).removeClass( "disable" );
	});

	$( "#back3" ).click(function() {
	  $( "#step3" ).addClass( "active" );
	  $( "#step3 .ui-step-content" ).addClass( "in" );

	  $( "#step4" ).removeClass( "active" );
	  $( "#step4 .ui-step-content" ).removeClass( "in" );
	});

	$( "#next5" ).click(function() {
	  $( "#step5" ).addClass( "active" );
	  $( "#step5 .ui-step-content" ).addClass( "in" );

	  $( "#step4" ).removeClass( "active" );
	  $( "#step4 .ui-step-content" ).removeClass( "in" );
	});

	//step 5
	$( "#back4" ).click(function() {
	  $( "#step4" ).addClass( "active" );
	  $( "#step4 .ui-step-content" ).addClass( "in" );

	  $( "#step5" ).removeClass( "active" );
	  $( "#step5 .ui-step-content" ).removeClass( "in" );
	});

	$( "#next6" ).click(function() {
	  $( "#step6" ).addClass( "active" );
	  $( "#step6 .ui-step-content" ).addClass( "in" );

	  $( "#step5" ).removeClass( "active" );
	  $( "#step5 .ui-step-content" ).removeClass( "in" );
	});

	//step 6
	$( ".blacksubmit" ).click(function() {
	  if ( $("#fullname").val() &&  $("#email").val() ) {
	  	$( "#submit6" ).click();
	  }else{
	  	$("#fullname").css("border", "2px solid red");
	  	$("#email").css("border", "2px solid red");
	  }
	});

	$( "#back5" ).click(function() {
	  $( "#step5" ).addClass( "active" );
	  $( "#step5 .ui-step-content" ).addClass( "in" );

	  $( "#step6" ).removeClass( "active" );
	  $( "#step6 .ui-step-content" ).removeClass( "in" );
	});








	/*console.clear();

		var uiFormSlide = {
		  init: function() {
		    this.steps = $(".ui-formSlide > [data-step]");
		    this.currentStep = 0;
		    $(this.steps[0])
		      .addClass("active")
		      .find(".ui-step-content")
		      .addClass("in");
		  },
		  goTo: function(index) {
		    this.play(index);
		  },
		  next: function() {
		    this.nextStep = this.getNext(this.currentStep);
		    this.animateHeight($(this.steps[this.nextStep]).outerHeight());
		    this.currentStep = this.getNext(this.currentStep);
		    this.play(this.currentStep, 'forward');
		  },
		  prev: function() {
		    this.prevStep = this.getPrev(this.currentStep);
		    this.animateHeight($(this.steps[this.prevStep]).outerHeight());
		    this.currentStep = this.getPrev(this.currentStep);
		    this.play(this.currentStep, 'backward');
		  },
		  getNext: function(currentStep) {
		    return currentStep + 1 >= this.steps.length ? 0 : currentStep + 1;
		  },
		  getPrev: function(currentStep) {
		    return currentStep - 1 < 0 ? this.steps.length - 1 : currentStep - 1;
		  },
		  play: function(currentStep, direction) {
		    var _self = this;
		    $('.ui-formSlide').removeClass('forward backward').addClass(direction);
		    $(this.steps[currentStep])
		      .addClass("active")
		      .siblings("[data-step]")
		      .removeClass("active");
		    setTimeout(function() {
		      $(_self.steps[currentStep])
		        .find(".ui-step-content")
		        .addClass("in")
		        .end()
		        .siblings("li")
		        .find(".ui-step-content")
		        .removeClass("in");
		    }, 300);
		  },
		  animateHeight: function(targetHeight) {
		    $(".ui-formSlide").animate(
		      {
		        height: targetHeight + "px"
		      },
		      300,
		      function() {
		        $(".ui-formSlide").css("height", "auto");
		      }
		    );
		  }
		};

		$(document).ready(function() {
		  uiFormSlide.init();

		  $("#btnNext").click(function() {
		    uiFormSlide.next();
		    console.log("next");
		  });
		  $("#btnPrev").click(function() {
		    uiFormSlide.prev();
		  });
		});*/



	$('input:checkbox').change(


		function(){
			if ( $( ".areaother" ).hasClass( "on" ) ) {
				$( ".areaother" ).removeClass( "on" );
			}else{
				$( ".areaother" ).addClass( "on" );
			}
		}
	); 

</script>


<?php get_footer(); ?>