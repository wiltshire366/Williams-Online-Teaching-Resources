<!DOCTYPE html>
<html>
    <head>
        <meta CHARSET="UTF-8">
            <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <?php
          require('Database.php');


          $course_query = 'SELECT * FROM courses ORDER BY created DESC';
          $result = mysqli_query($conn, $course_query);
          $courses = mysqli_fetch_all($result, MYSQLI_ASSOC);
          mysqli_free_result($result);
          mysqli_close($conn);
        ?>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="background-color:blue;">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link active" href="Registration.php">Registration</a>
                <a class="nav-link active" href="Courses.php">Courses</a>
                <a class="nav-link active" href="Payment.php">Payment</a>
                <a class="nav-link active" href="Aboutus.php">About Us</a>
                <a class="nav-link active" href="FAQ.php">FAQ</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <div>
        <?php foreach($courses as $course): ?>
          <div>
            <?php echo $course['name'] ?>
          </div>
        <?php endforeach; ?>
      </div>
    </body>
    <footer>Copy &copy; WOTR</footer>
</html>