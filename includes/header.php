<?php
	include("includes/config.php");
	include("includes/db.php");

  $query = "SELECT * FROM categories";
  $categories = $db->query($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My First Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <?php if(isset($_GET['category'])) { ?>
            <a class="nav-link item" href="home.php">Home</a>
            <?php }else { ?>
              <a class="nav-link item active" href="home.php">Home</a>

            <?php if($categories->num_rows > 0) {
              while($row = $categories->fetch_assoc());}
            }
            if(isset($_GET['category']) && $row['id'] == $_GET['category'] ) {
           ?> 
           <a class="blog-nav-item active" href= "home.php$category=<?php echo $row['id']; ?>"> <?php echo $row['text']; ?> </a>
           <?php }else echo "<a class='blog-nav-item' href='home.php$category=$row[id]'> $row[text]</a>"
           ?>

            </nav>
        </div>
      </div>

      
    </header>