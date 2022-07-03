<?php require_once("path.php");


require_once (ROOT_PATH . "/app/controllers/topics.php");
$posts = selectAll('posts', ['published' => 1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/utilities.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
   
   
    <title>BLOG</title>
</head>
<body>
    <?php require_once(ROOT_PATH . "/app/includes/header.php");?>
    <?php require_once(ROOT_PATH . "/app/includes/message.php");?>

 <section class ="background">  
            
    <div class="container">
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
            <?php $i = 0;
                      foreach($posts as $post){
                          $actives = '';
                          if($i == 0){
                            $actives = 'active';
                          }
                      ?>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $i;?>" class="<?= $actives;?>"></button>
            <?php $i++; } ?>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
      <?php $i = 0;
                  foreach($posts as $post){
                      $actives = '';
                      if($i == 0){
                        $actives = 'active';
                      }
                  
                  ?>
        <div class="carousel-item <?= $actives;  ?>">
                    <img src="<?php echo BASE_URL . "/assets/images/" . $post['image'];  ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-lg-block d-md-block">
                      <div class="post-topic"><h5><?php echo $post['title']; ?></h5></div>
                      <div class="post-link"> <a href="">See More <i class="fa fa-chevron-right"></i> <i class="fa fa-chevron-right"></i></a></div>
                      </div>
        </div>
        <?php $i++; } ?>
        
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
      </div>


    </div>
 
 </section>


 <!--Recent posts section-->
<section class="recent">
  <div class="container">
    <div class="two-sections">
    <div class="post1">
      <div class="recent-post"><h4>Recent Posts</h4></div>
      <?php foreach($posts as $post): ?>
      <div class="post-item">
        <div class="post-img">
          <img src="<?php echo BASE_URL . "/assets/images/" . $post['image'];  ?>" alt="">
        </div>
        <div class="post-title">
          <h5><?php echo $post['title']; ?></h5>
          <div class="post-details">
            <div class="imp">
            <h6 class="poster-name"><i class="fa fa-user"></i> Charles U</h6>
           <h6 class="post-date"><i class="fa fa-calendar-o"></i><?php echo date('F j, Y', strtotime($post['created_at'])); ?></h6>
            </div>               
            <div class="post-body"><p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?></p></div>
            <div class="read-more"><a href="#">Read More <i class="fa fa-chevron-right"></i></a></div>
          </div>  
        </div>
        </div>
      <?php endforeach; ?>
      </div>


    <div class="side-bar">
            <div class="search bg-white">
            <h3>Search</h3>
              <input type="text" class="serach-bar" placeholder="Search...">
            </div>
            <div class="contents bg-white">
            <h3>Topics</h3>
            <div class="topics">
              <ul>
              <?php foreach ($topics as $key => $topic): ?>
                <li><a href=""><?php echo $topic['name']; ?></a></li>

              <?php endforeach; ?>
              </ul>
              </div>
            </div>
          </div>


  </div>
</div>

  </div>
</section>

 <!--end of recent post styling-->

<!--start of footer-->
<?php include (ROOT_PATH . "/app/includes/footer.php")?>
<!--end of footer-->



    <script src = "assets/js/bootstrap.js"></script>  
    
</body>
</html>