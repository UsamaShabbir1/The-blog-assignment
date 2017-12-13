<?php include("includes/header.php"); 
  $query= "SELECT * FROM posts";

  $posts = $db->query($query);

?>
    <main role="main" class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
        	<div class="blog-header">
          <h1 class="blog-title">My First Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      
          <?php if($posts->num_rows > 0) {
          while($row= $posts->fetch_assoc()){
           ?>

          <div class="blog-post">
            <h2 class="blog-post-title"><a href="#"><?php echo $row['title']?></a></h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <a href="a" class="btn btn-primary" > Read More </a>
          </div><!-- /.blog-post -->

          <?php } } ?>
        </div><!-- /.blog-main -->
	<?php include("includes/sidebar.php");
	 include("includes/footer.php");	?>
