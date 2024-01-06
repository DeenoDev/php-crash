<?php include 'inc/header.php'; ?>

<?php
   $name = $email = $body = ''; 
   $nameErr = $emailErr = $bodyErr = '';

   //Form Submit
   if(isset($_POST['submit'])){
     //Validate name
     if(empty($_POST['name'])) {
      $nameErr = 'Name is required';
     } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     }

     //Validate email
     if(empty($_POST['email'])) {
      $emailErr = 'Email is required';
     } else {
      $emailErr = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     }

     //Validate body
     if(empty($_POST['name'])) {
      $nameErr = 'Name is required';
     } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     }

   }


?>

    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for OmniWeb</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    <?php include 'inc/footer.php'; ?>
