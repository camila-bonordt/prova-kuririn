<?php get_header();
is_category() ? $blog = false : null;
?>

<main class="page-blog">
  <div class="banner">
    <?php echo get_the_post_thumbnail(get_page_by_path('blog')->ID, 'large');  ?>
    <div class="gradient"></div>
    <div class="container">
      <div class="titulo-wrapper">
        <h1 class="font-branca uppercase" data-aos="fade-right">
          <strong>
            <?php echo get_page_by_path('blog')->post_title;  ?>
          </strong>
        </h1>
      </div>
    </div>
  </div>

  <section class="novidades-do-blog-home">
    <div class="container">
      <div class="tags">
        <a href="<?php echo home_url('/blog/'); ?>">
          <div class="tag <?php echo $blog ? 'active' : ''; ?> font16 font-branca fw500">
            Todas as notícias
          </div>
        </a>

        <?php
        //listando nome de todas categorias
        $categories = get_categories();
        foreach ($categories as $category) :
          $category_link = get_category_link($category->term_id);
        ?>
          <a href="<?php echo $category_link ?>">
            <div class="tag <?php echo is_category($category->name) ? 'active' : ''; ?> font16 font-branca fw500">
              <?php echo $category->name ?>
            </div>
          </a>
        <?php endforeach;
        //fim da listagem dos nomes das categorias
        ?>
      </div>

      <div class="row novidades-do-blog">
        <?php

        while (have_posts()) :
          the_post();
        ?>
          <div class="col-lg-4 col-sm-6 col-12">
            <div class="noticia">
              <a href="<?php the_permalink(); ?>">

                <div class="thumb">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <div class="filter"></div>
                  <div class="data font-branca font18">
                    <?php echo get_the_date('d | m | Y') ?>
                  </div>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>">

                <div class="texto">
                  <div class="titulo">
                    <p class="font20 font-cinza py-3 my-2">
                      <?php echo get_the_title(); ?>
                    </p>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="leia-mais font18">
                    Leia Mais
                  </a>
                </div>
              </a>

            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="container">

      <div class="botao-e-setas pt-4 d-flex justify-content-center">
        <?php
        global $wp_query; // you can remove this line if everything works for you

        // don't display the button if there are not enough posts
        if ($wp_query->max_num_pages > 1)
          echo '
            <div class="btn-laranja-wrapper">
              <a class="btn-laranja mx-auto misha_loadmore">
                Carregar mais notícias
              </a>
            </div>
            '; // you can use <a> as well
        ?>
      </div>

    </div>
  </section>
  <section class="novidades-por-e-mail-wrapper">
    <div class="novidades-por-e-mail">
      <div class="container">
        <h2 class="font-branca">RECEBA NOVIDADES <strong>POR E-MAIL</strong></h2>
        <div class="form font-branca">
          <?php echo do_shortcode('[contact-form-7 id="35" title="Receba novidades por e-mail"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>