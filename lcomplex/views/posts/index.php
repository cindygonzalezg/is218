<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo "ID:$post->userID email:$post->email ";?> 
  </p>
<?php } ?>