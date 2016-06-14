<?php get_header();?>
    <?php get_sidebar();?>
    <section>
		<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>			
				<div class="post-content">
				<?php the_content("Continue Reading &#187;"); ?>
				<?php wp_link_pages(); ?>											
				<?php $sub_pages = wp_list_pages( 'sort_column=menu_order&depth=1&title_li=&echo=0&child_of=' . $id );?>
					<?php if ($sub_pages <> "" ){?>
					<p class="post-info">Sub Pages List</p>
					<ul><?php echo $sub_pages; ?></ul>
				<?php }?>
				<!--
					<?php trackback_rdf(); ?>
				-->                
				</div>
                			<?php comments_template(); ?>
			<?php endforeach; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<p align="center"><?php posts_nav_link() ?></p>					
	</section>

<?php
include "footer_money.php";
?>	

<!--?php get_footer();?-->
