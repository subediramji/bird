<div class="rightSide">
    
<div id="body">
  
    <h2>All Users&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'index.php/user/adduser'; ?>">Add New User</a></h2>
     <hr class="hr-gradient"/>
       <div id="sucessmsg">
  <?php echo $this->session->flashdata('message'); ?>
    </div>
 <?php
    
    
        if(!empty($query)){
            ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>S.N.</th>
            <th>User Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    
   
     <?php       foreach ($query as $data){
            ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->user_name ?></td>
            <td><?php echo $data->user_fname ?></td>
            <td><?php echo $data->user_lname ?></td>
            <td><?php echo $data->user_email ?></td>

            <td><?php if($data->user_status=="0")
            {
                echo "Draft";
            }
                else
            {
                    echo "Published";
                    
            }
            ?></td>
            
            <td><?php if($data->user_type=="1")
            {
                echo "User";
            }
                else
            {
                    echo "Administrator";
                    
            }
            ?></td>
            
            <td><?php echo anchor('user/edituser/'.$data->id,'Edit'); ?> / 
            <?php echo anchor('user/deleteuser/'.$data->id,'Delete'); ?></td>
        </tr>
            <?php    
            }
        }
 else {
            echo '<h3>Sorry, users are not available</h3>';
 }
    ?>
    </table>
    <?php echo $links; ?>
</div>
</div>
<div class="clear"></div>
</div>

