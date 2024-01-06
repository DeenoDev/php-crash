<?php include 'inc/header.php'; ?>

<?php 
  
  $feedback = [
    [
      'id' => '1',
      'name' => 'Beth Williams',
      'email' => 'beth@gmail.com',
      'body' => 'OmniWeb is great!'
    ],
    [
      'id' => '2',
      'name' => 'Walt Williams',
      'email' => 'walt@gmail.com',
      'body' => 'OmniWeb is awesome!'
    ],
    [
      'id' => '1',
      'name' => 'Bill Williams',
      'email' => 'walt@gmail.com',
      'body' => 'OmniWeb is incredible!'
    ]
  ]


?>
   
    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
       <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>  

    <?php foreach($feedback as $item): ?>

    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt2"></div>
       By <?php echo $item['name']; ?>
     </div>
   </div>

   <?php endforeach; ?>

  
   
   <?php include 'inc/footer.php'; ?>