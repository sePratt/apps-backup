<?php
/**
 * The application form widget.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-application">

<div class="application ">
<!--I'm not sure the point of this dynamic sidebar piece
?php dynamic_sidebar( 'application' ); ?-->
	<div class="row application-content-row justify-content-center">
         <div class="col-11 col-md-10 col-lg-8 text-center ">
            <h2>Apply Now</h2>
            <p>Get started with this quick and easy application. 
               One of our industry-specialized recruiters will contact you within 2 
               business days to discuss your skills an what you're looking for in your
               job search.
            </p>
         </div>
      </div>
      <div class="row justify-content-center">
         <form class="col-11 col-lg-8 col-xl-7" id="candidateApplicationForm">
            <div class="form-row" >
               <div class="form-group col-12 col-md-6">
                  <label for="appFirstName">First Name</label>
                  <input id="appFirstName" name="firstName" value="" type="text" class="form-control" placeholder="First Name"/>
               </div>
               <div class="form-group col-12 col-md-6">
                  <label for="appLastName">Last Name</label>
                  <input id="appLastName" name="lastName" value="" type="text" class="form-control" placeholder="Last Name"/>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-12">
                  <label for="appEmail">Email Address</label>
                  <input id="appEmail" name="email" type="text" value="" class="form-control" placeholder="email@yourdomain.com"/>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-12">
                  <label for="appPhone">Phone Number</label>
                  <input id="appPhone" name="phone" type="text" value="" class="form-control" placeholder="(614) 555-5675"/>
               </div>
            </div>
            <label>Your Resume</label>
            <div class="row justify-content-center justify-content-md-start resume-submission-row">
               <div class="col-12 col-md-3 col-xl-3">
                  <a class="btn btn-outline">Attach File</a>
               </div>
               <div class="col-12 col-md-3 col-xl-3">
                  <a class="btn btn-outline">Google Drive</a>
               </div>
               <div class="col-12 col-md-3 col-xl-3">
                  <a class="btn btn-outline">Dropbox</a>
               </div>
               <div class="col-12 col-md-3 col-xl-3">
                  <a class="btn btn-outline">LinkedIn</a>
               </div>
            </div>
            <div class="row justify-content-center pt-4 ">
                <div class="col-11 alert alert-danger error-missing-fields d-none">Missing required Fields. Must complete first and last name as well as either phone or email. </div>
                <div class="col-11 alert alert-danger error-feedback d-none">Unable to submit application. </div>
               <button id="appSubmit" class="btn-submit btn-green">
                   <span class="submit">Submit Application</span>
                       <i class="d-none fa fa-check"></i>
            </div>
         </form>
      </div>
   </div>	
</div>

