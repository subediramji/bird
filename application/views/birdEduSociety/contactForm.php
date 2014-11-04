 <link rel="stylesheet" href="<?php echo base_url().'content/uploads/styles/form.css'; ?>">
 <script src="<?php echo base_url().'content/uploads/scripts/forms.js'; ?>"></script>
 <?php if(!empty($contact)){
     foreach($contact as $cinfo){
         $name = $cinfo->name;
         $address = $cinfo->address;
         $contact1 = $cinfo->contact_no1;
         $contact2 = $cinfo->contact_no2;
         $email = $cinfo->email;
         $form = $cinfo->show_form;
         $map = $cinfo->show_map;
     } 
     ?>
 
 <div class="content pt1"><div class="ic"></div>
  <div class="container_12">
     <div class="grid_6">
      <h2>Contact Info</h2><br>
            <div class="map">
          <?php if($map =="showMap"){ ?>  <figure class="img_inner">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </figure> <?php } ?>
              <address>
                            <dl>
                                <dt><p><?php echo $name; ?><br>
                                    <?php echo $address; ?><br>
                                </dt>
                                <dd><span>Phone</span><?php echo $contact1; ?></dd>
                                <dd><span>Email:</span><?php echo $email; ?></dd>
                            </dl>
                         </address>
                       
          </div>
     </div>
      <?php if($form =="showForm"){ ?>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Contact Form</h2>
       <form id="form">
       <div class="success_wrapper">
       <div class="success">Contact form submitted!<br>
       <strong>We will be in touch soon.</strong> </div></div>
       <fieldset>
       <label class="name">
       <input type="text" value="Name:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="email">
       <input type="text" value="E-mail:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="phone">
       <input type="tel" value="Phone:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="message">
       <textarea></textarea>
       <br class="clear">
       <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
       <div class="clear"></div>
       <div class="btns"><a data-type="reset" class="btn">Clear</a><a data-type="submit" class="btn">Send</a>
       <div class="clear"></div>
       </div></fieldset></form>
        
     </div>
      <?php } ?>
   </div>
  </div>
 <?php } ?>