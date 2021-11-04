<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/contact.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="row">
      <!-- Company Management -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active">Add Event</li>
    </ol>
  </section><br>
  <?php //var_dump($records[0]); ?>
  <!-- Main content -->
  <section class="content">
    <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Administration/addEvent">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <fieldset>
              <legend>Add Event</legend>
              <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />

              <!-- radio -->
              <div class="form-group">
                <input type="hidden" name="event_id" value="<?php if(isset($records[0]->event_id)) echo $records[0]->event_id; ?>"/>
                <div class="box-body">
                  <div class="form-group">
                    <label for="event_name" class="col-sm-4 control-label" style="text-align:right;">Event Name<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                      <input type="text"  required  class="form-control" name="event_name" value="<?php if(isset($records[0]->event_id)) echo $records[0]->event_name; ?>">
                    </div>
                  </div>
                  <br><br>

                  <div class="form-group">
                    <label for="event_desc" class="col-sm-4 control-label" style="text-align:right;">Event description<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                      <!-- <input type="text"  required  class="form-control" name="event_desc"> -->
                      <textarea name="event_desc" class="form-control" rows="5" cols="30" value="" required><?php if(isset($records[0]->event_desc)) echo $records[0]->event_desc; ?></textarea>
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="size_name" class="col-sm-4 control-label" style="text-align:right;">Event Image</label>
                    <div class="col-sm-5">
                      <input type="file"  required  class="form-control" name="event_image" id="event_image"  value="<?php if(isset($records[0]->event_image)) echo $records[0]->event_image; ?>">
                      <?php if(isset($records[0]->event_image)){ ?>
                        <img src="<?php echo base_url() ?>assets/uploads/events/<?php echo $records[0]->event_image ?>" alt="" style="height: 50px; width:50px;">
                      <?php } ?>
                    </div>

                  </div>
                  <br><br>
                </div>
                <div class="form-group">
                  <center><input type="submit" class="btn btn-success" name="submit" value="Submit"></center>
                </div>
              </fieldset>
            </div>
          </div>


        </div>
      </form>
    </section>
  </div>
