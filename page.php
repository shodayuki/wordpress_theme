<?php get_header(); ?>
<div id="contents">
  <div id="conL">
    <h2><?php the_title(); ?></h2>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <?php if(is_page(array('6'))) { ?>
    <?php } else { ?>
      <a href="contact.html"><button class="btn1">お問い合わせ</button></a>
    <?php } ?>
  </div><!-- /#conL -->
  <?php get_sidebar(); ?>
</div><!-- /#contents -->
<?php get_footer(); ?>