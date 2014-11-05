  <style>
.thumbnail {
-webkit-transition-property : scale; 
-webkit-transition-duration : 0.2s; 
-webkit-transition-timing-function : ease-in-out; 
-moz-transition : all 0.2s ease-in-out;  
}    
    
.thumbnail:hover {
box-shadow: 0 0 10px rgba(0,0,0,.5);
-moz-box-shadow: 0 0 10px rgba(0,0,0,.5);
-webkit-box-shadow: 0 0 10px rgba(0,0,0,.5);
-webkit-transform: scale(1.05);
-moz-transform: scale(1.05);
}
 Skip to content
This repository

    Explore
    Features
    Enterprise
    Blog

    4,083
    811

jschr/bootstrap-modal

bootstrap-modal / css / bootstrap-modal.css
Jordan Schroter jschr on Jan 11, 2013
Update css/bootstrap-modal.css

1 contributor
215 lines (179 sloc) 4.229 kb
/*!
* Bootstrap Modal
*
* Copyright Jordan Schroter
* Licensed under the Apache License v2.0
* http://www.apache.org/licenses/LICENSE-2.0
*
*/
.modal-open {
overflow: hidden;
}
/* add a scroll bar to stop page from jerking around */
.modal-open.page-overflow .page-container,
.modal-open.page-overflow .page-container .navbar-fixed-top,
.modal-open.page-overflow .page-container .navbar-fixed-bottom,
.modal-open.page-overflow .modal-scrollable {
overflow-y: scroll;
}
@media (max-width: 979px) {
.modal-open.page-overflow .page-container .navbar-fixed-top,
.modal-open.page-overflow .page-container .navbar-fixed-bottom {
overflow-y: visible;
}
}
.modal-scrollable {
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
overflow: auto;
}
.modal {
outline: none;
position: absolute;
margin-top: 0;
top: 50%;
overflow: visible; /* allow content to popup out (i.e tooltips) */
}
.modal.fade {
top: -100%;
-webkit-transition: opacity 0.3s linear, top 0.3s ease-out, bottom 0.3s ease-out, margin-top 0.3s ease-out;	
-moz-transition: opacity 0.3s linear, top 0.3s ease-out, bottom 0.3s ease-out, margin-top 0.3s ease-out;
-o-transition: opacity 0.3s linear, top 0.3s ease-out, bottom 0.3s ease-out, margin-top 0.3s ease-out;
transition: opacity 0.3s linear, top 0.3s ease-out, bottom 0.3s ease-out, margin-top 0.3s ease-out;
}
.modal.fade.in {
top: 50%;
}
.modal-body {
max-height: none;
overflow: visible;
}
.modal.modal-absolute {
position: absolute;
z-index: 950;
}
.modal .loading-mask {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
background: #fff;
border-radius: 6px;
}
.modal-backdrop.modal-absolute{
position: absolute;
z-index: 940;
}
.modal-backdrop,
.modal-backdrop.fade.in{
opacity: 0.7;
filter: alpha(opacity=70);
background: #fff;
}
.modal.container {
width: 940px;
margin-left: -470px;
}
/* Modal Overflow */
.modal-overflow.modal {
top: 1%;
}
.modal-overflow.modal.fade {
top: -100%;
}
.modal-overflow.modal.fade.in {
top: 1%;
}
.modal-overflow .modal-body {
overflow: auto;
-webkit-overflow-scrolling: touch;
}
/* Responsive */
@media (min-width: 1200px) {
.modal.container {
width: 1170px;
margin-left: -585px;
}
}
@media (max-width: 979px) {
.modal,
.modal.container,
.modal.modal-overflow {
top: 1%;
right: 1%;
left: 1%;
bottom: auto;
width: auto !important;
height: auto !important;
margin: 0 !important;
padding: 0 !important;
}
.modal.fade.in,
.modal.container.fade.in,
.modal.modal-overflow.fade.in {
top: 1%;
bottom: auto;
}
.modal-body,
.modal-overflow .modal-body {
position: static;
margin: 0;
height: auto !important;
max-height: none !important;
overflow: visible !important;
}
.modal-footer,
.modal-overflow .modal-footer {
position: static;
}
}
.loading-spinner {
position: absolute;
top: 50%;
left: 50%;
margin: -12px 0 0 -12px;
}
/*
Animate.css - http://daneden.me/animate
Licensed under the ☺ license (http://licence.visualidiot.com/)
Copyright (c) 2012 Dan Eden*/
.animated {
-webkit-animation-duration: 1s;
-moz-animation-duration: 1s;
-o-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
-moz-animation-fill-mode: both;
-o-animation-fill-mode: both;
animation-fill-mode: both;
}
@-webkit-keyframes shake {
0%, 100% {-webkit-transform: translateX(0);}
10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);}
20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);}
}
@-moz-keyframes shake {
0%, 100% {-moz-transform: translateX(0);}
10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}
20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}
}
@-o-keyframes shake {
0%, 100% {-o-transform: translateX(0);}
10%, 30%, 50%, 70%, 90% {-o-transform: translateX(-10px);}
20%, 40%, 60%, 80% {-o-transform: translateX(10px);}
}
@keyframes shake {
0%, 100% {transform: translateX(0);}
10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
20%, 40%, 60%, 80% {transform: translateX(10px);}
}
.shake {
-webkit-animation-name: shake;
-moz-animation-name: shake;
-o-animation-name: shake;
animation-name: shake;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop,
.modal-backdrop.fade.in {
  opacity: 0.0;
  filter: alpha(opacity=80);
}
.modal {
  position: fixed;
  top: 10%;
  left: 50%;
  z-index: 1050;
  width: 560px;
  margin-left: -280px;
  background-color: #ffffff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.3);
  *border: 1px solid #999;
  /* IE6-7 */

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding-box;
  background-clip: padding-box;
  outline: none;
}
.modal.fade {
  -webkit-transition: opacity .3s linear, top .3s ease-out;
  -moz-transition: opacity .3s linear, top .3s ease-out;
  -o-transition: opacity .3s linear, top .3s ease-out;
  transition: opacity .3s linear, top .3s ease-out;
  top: -25%;
}
.modal.fade.in {
  top: 10%;
}
.modal-header {
  padding: 9px 15px;
  border-bottom: 1px solid #eee;
}
.modal-header .close {
  margin-top: 2px;
}
.modal-header h3 {
  margin: 0;
  line-height: 30px;
}
.modal-body {
  position: relative;
  overflow-y: auto;
  max-height: 400px;
  padding: 15px;
}
.modal-form {
  margin-bottom: 0;
}
.modal-footer {
  padding: 14px 15px 15px;
  margin-bottom: 0;
  text-align: right;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
  -moz-box-shadow: inset 0 1px 0 #ffffff;
  box-shadow: inset 0 1px 0 #ffffff;
  *zoom: 1;
}
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: "";
  line-height: 0;
}
.modal-footer:after {
  clear: both;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}

@media (max-width: 767px) {
  .modal {
    position: fixed;
    top: 20px;
    left: 20px;
    right: 20px;
    width: auto;
    margin: 0;
  }
  .modal.fade {
    top: -100px;
  }
  .modal.fade.in {
    top: 20px;
  }
}
</style>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>



<script type="text/javascript">
  $(document).ready(function(){
   
        $(".srcimage").click(function(){
           
            var srcimgs = $(this).attr('name');
           
            var name = $(this).attr('data-value');
            var srcimg = "<?php echo base_url()."content/uploads/images/"; ?>"+srcimgs;
           $("#popImage").attr({
              
                src: srcimg
			
           });	
           $('.modal-title').html(name);
        });   
});	
</script>
<div class="block" style="padding: 3% 5% 3% 5%;min-height: 400px;">
 <?php if(!empty($selectedalbumquery)){ ?> 

    <div style="text-align: center;padding: 10px 0px 20px 0px;">
        <h1 style="color:#000;font-size: 30px;">Photos</h1>            
    </div>
<?php
foreach ($selectedalbumquery as $data) {
    
    ?>    

   
    
 <div class="col-sm-6 col-md-2" data-toggle="modal" data-target="#mypopup">
     <div class="thumbnail" style="width: 20%;float: left;margin: 1.5%;padding: 1%; outline: 1px solid #fff;">
    <img class="srcimage" data-value="<?php echo $data->media_name; ?>" name="<?php echo $data->media_type; ?>" src="<?php echo base_url(); ?>content/uploads/images/<?php echo $data->media_type; ?>"  />
<!--        <div id="imagetitle"> <?php //echo $data->media_name; ?> 
            
        </div>-->
 </div>
</div> 
<?php
}


 }
 else{
      echo '<div style="text-align: center; font-size:55px;color:red;"><h1 style="color:red;"> Sorry ! No photos are available to show.</h1></div>';
 }
?>
   

    
    
    
</div>
  </div>
<div class="clear"></div> 


<div class="modal fade mypopup" id="mypopup" style="width:auto; height: auto;">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <img id='popImage' data-src="holder.js/500x300" alt="..." >
      </div>
    </div>
  </div>
</div>



            <!class full is closed here>

            
