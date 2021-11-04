<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/contact.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="row">
      <!-- Company Management -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Hot Deals</li>
    </ol>
  </section><br>

  <!-- Main content -->
  <section class="content">
    <form method="post" enctype="multipart/form-data"  action="<?php echo base_url(); ?>addHotDeals"> 
   
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <fieldset>
            <legend>Add Hot Deals</legend>
            <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />
            
            <!-- radio -->
            <div class="form-group">
             <input type="hidden" name="hdeal_id" value="<?php if(isset($records[0]->deal_id)) echo $records[0]->deal_id ?>"/>
             <div class="box-body">
              <div class="form-group">
                <label for="size_name" class="col-sm-4 control-label" style="text-align:right;">Second Header<span style="color:red">*</span></label>
                <div class="col-sm-5">
                  <input type="text"  required  class="form-control" name="hdeal_2_head" id="category"  value="<?php if(isset($records[0]->deal_second_head)) echo $records[0]->deal_second_head ?>">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label for="size_name" class="col-sm-4 control-label" style="text-align:right;">Product category<span style="color:red">*</span></label>
                <div class="col-sm-5">
                  <select name="pro_sub_cat_fk" class="form-control">
                    <option></option>
                    <?php
                    foreach($sub_cat as $sub_cats)
                    {
                      ?>
                      <option value="<?php echo $sub_cats->pro_sub_cat_id; ?>" <?php if(isset($records[0]->deal_psc_fk)) if($records[0]->deal_psc_fk == $sub_cats->pro_sub_cat_id) { echo 'selected';} ?>><?php echo $sub_cats->pro_sub_cat_name; ?></option>
                      <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label for="size_name" class="col-sm-4 control-label" style="text-align:right;">Enter Diplay Sequence<span style="color:red">*</span></label>
                <div class="col-sm-5">
                  <input type="text"  required  class="form-control" name="hdeal_disp_ord" id="category"  value="<?php if(isset($records[0]->deal_disp_order)) echo $records[0]->deal_disp_order ?>">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label for="size_name" class="col-sm-4 control-label" style="text-align:right;">Upload Image<span style="color:red">*</span></label>

                <div class="col-sm-5">
                <input type="file"  required  class="form-control" name="hdeal_img" id="category"  value="<?php if(isset($records[0]->deal_image)) echo $records[0]->deal_image ?>">
                <?php if(isset($records[0]->deal_image)){ ?>
                <img src="<?php echo base_url() ?>assets/uploads/hotdeals/<?php echo $records[0]->deal_image ?>" alt="" style="height: 50px; width:50px;">
                <?php } ?>  
              </div>
              </div>
              <br><br>
            </div>
            <div class="form-group">
              <center><input type="submit" class="btn btn-success" name="submit"></center>
            </div>              
          </fieldset>
        </div>


      </div>


    </div>
    </form>
  </section>
</div>        