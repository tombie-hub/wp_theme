	<?php get_header();?>

<div class="posty">
<?php
if(have_posts())
{
	while(have_posts())
	{
		the_post();
		echo"<h2>";
		the_title();//tytul
		echo"</h2>";

		echo "<p>";
		the_content();//tresc
		echo"</p>";
	}
	}
?>
</div>

	<?php get_footer();?>
