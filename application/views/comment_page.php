<?php 
    $this->load->view('_header');
    $this->load->view('_navbar');
?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">


        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Posted on <?=$veri[0]->username?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?=$veri[0]->time?></p>

        <hr>
         <?php if($veri[0]->picture !='0'){ ?>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?=base_url()?>upload/<?=$veri[0]->picture?>" alt="">
        
         <?php } else if($veri[0]->video =='0' && $veri[0]->picture =='0'){ ?>
       
         
        <!-- Post Content -->
        <p><?=$veri[0]->mesaj?></p>
        
         <?php } else if($veri[0]->picture =='0' && $veri[0]->mesaj==''){ ?>
         <iframe width="700" height="450" src="https://www.youtube.com/embed/<?=$veri[0]->video?>"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        
       
            
            <?php } ?>

        <hr> 
        
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Yorumlar </h5>
          <div class="card-body">
           <form action="<?=base_url()?>Home/comments_add" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <textarea class="form-control" rows="3" name="Msg" required=""></textarea>
                <input type="text" hidden class="form-control" name="Id" id="Point" value="<?=$veri[0]->id?>">
                <input type="text" hidden class="form-control" name="UserId" value="<?=$veri[0]->user_id?>">
                <input type="text" hidden class="form-control" name="Username"  value="<?=$veri[0]->username?>">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <?php foreach($timeline_id as $ti){ ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" style="max-width: 3rem;" src="<?=base_url()?>upload/<?=$ti->user_pic?>" alt="">
          <div class="media-body">
              <a href="#"><h5 class="mt-0"><?=$ti->user_name_f?> <?=$ti->user_name_l?></h5></a>
            <?=$ti->msg?>
          </div>
        </div>
        <hr>
        <?php } ?>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
            
        <?php     $this->load->view('_footer'); ?>