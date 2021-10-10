<?php  if (count($errors) > 0) : ?>
  <div style="background: green;" class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <h3 style="color: red;"><?php echo $error ?></h3>
  	<?php endforeach ?>
  </div>
<?php  endif ?>