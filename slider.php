<?php $slider = $panel['slider']; ?>
<section class="slider">
<img src="<?php echo $imagesDir.$panel['selo'] ?>" class="seloImg"/>
<div class="flexslider">
	<ul class="slides">
		<?php foreach ($slider as $k => $slide) {
			echo "<li>";
			echo "<img src='$imagesDir/{$panel["page"]}/{$slide["src"]}' />";
			echo "</li>";
		} ?>
	</ul>
</div>
</section>