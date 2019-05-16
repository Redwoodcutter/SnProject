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
         <?php }Else{ ?>
        <hr>
        
        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>
        
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