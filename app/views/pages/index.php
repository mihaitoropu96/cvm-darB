
<?php require APPROOT . '/views/incl/header.php'; ?>
<h1>
	<?php echo $data['title']; ?>
  <ul>
    <?php foreach ($data['posts'] as $post) : ?>
       <li>
         <?php echo $post->title; ?>
       </li>
    <?php endforeach; ?>
  </ul>
</h1>
<?php require APPROOT . '/views/incl/footer.php'; ?>
