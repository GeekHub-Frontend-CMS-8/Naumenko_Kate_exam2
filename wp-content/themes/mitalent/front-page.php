<?php
/* Template Name: Front Page*/

get_header(); ?>

  <section class=gallery>
    <div class="container">
      <div class="gallery__categories">
        <div class="gallery__category">
          Actor
        </div>
        <div class="gallery__category">
          Musician
        </div>
        <div class="gallery__category">
          Comedian
        </div>
        <div class="gallery__category">
          Model
        </div>
      </div>
    </div>
    <div class="gallery__list-item">

      <?php foreach (getPhoto() as $post): ?>

        <div class="gallery__item">
          <div class="gallery__hover title">
            <?php echo $post->post_title; ?>
          </div>
          <?php the_post_thumbnail(); ?>
        </div>

      <?php endforeach; ?>

    </div>
  </section>
<?php get_footer(); ?>