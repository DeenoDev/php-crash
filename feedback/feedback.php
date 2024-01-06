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

    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <?php endforeach ?>

  
   
   <?php include 'inc/footer.php'; ?>