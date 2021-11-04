

      <div id="sub-container">

        <div id="mainMenu">

          <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU

        </div>

        <hr />

        <div id="sub-container-content">

          <!-- <div class="sidenavContentHeader">Prime Video</div>

          <a href="#"><div class="sidenavContent">All Videos</div></a> -->

        </div>

      </div>

    </div>

    <!--Not Sidenav-->

    <div>



  <div class="main-sec"></div>





<div class="breadcrumb-area">

    <div class="overlay overlay-bg"></div>

    <div class="container-fluid">

      <div class="breadcrumb-content">

        <h2 class="text-white">My Chat</h2>

        <ul>

          <li><a href="index.html">Home</a>

          </li>

          <li class="active">My Chat</li>

        </ul>

      </div>

    </div>

  </div>

  <!-- breadcrumb -->

 <section class="compare-page-wrapper section-padding">

    <!-- compare main wrapper start -->

    <div class="container">

      <div class="section-bg-color">

        <div class="row">

          <div class="col-lg-12">

            <!-- Wishlist Table Area -->

            <div class="cart-table table-responsive">

              <table class="table table-bordered">

                <thead>

                  <tr>



                    <th class="pro-thumbnail">Sl.No</th>

                    <th class="pro-title">Chat To</th>

                     <th class="pro-title">Product</th>

                     <th class="pro-title">Date</th>

                    <th class="pro-price">View</th>

                    



                  </tr>

                </thead>

                <tbody>

                <?php 

                $i=0;

                foreach($mychat as $mchat)

                  { 

                    $i=$i+1;

                    ?>

                  <tr>

                    <td class="pro-title"><?php echo $i; ?></td>

                    <td class="pro-price"><?php echo $mchat->first_name; ?></td>

                    <td class="pro-price"><img src="<?php echo base_url() ?>admin/assets/uploads/productlist/<?php echo $mchat->pro_list_img ?>" style="width:50px;height: 50px;"><br><?php echo $mchat->pro_list_name;?></td>

                    <td class="pro-price"><?php echo date('d-m-Y',strtotime($mchat->chat_date)); ?></td>

                    <td class="pro-price"><a href="<?php echo base_url() ?>chatmsg/<?php echo $mchat->chat_id;?>/<?php echo $mchat->chat_product_id;?>" style="font-size: 12px;"><i class="fa fa-edit"></i></a></td>

                    

                  </tr>



                <?php } ?>

                  

                </tbody>

              </table>

            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- compare main wrapper end -->

  </section>

