<h1>Recent Messages on Egotist</h1>
<?php foreach ($users as $user) : ?>
<p>
	<?php //echo $user['screenName'];
		  $time =$user['createDate'] ;	
		  //echo $time;
	?>
	
	<br /> 
	<span> 
	<?php echo $time?>
	</span>
</p>
<hr />
<?php endforeach; ?>







