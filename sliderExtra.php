<?php $slider = $loop['slider']; ?>
<section class="slider">
<img src="<?php echo $imagesDir.$loop['selo'] ?>" class="seloImg"/>
<div class="flexslider">
	<ul class="slides">
		<?php foreach ($slider as $k => $slide) {
			echo "<li>";
			echo "<img src='$imagesDir/{$loop["page"]}/{$slide["src"]}' />";
			echo "</li>";
		} ?>
	</ul>
</div>
</section>