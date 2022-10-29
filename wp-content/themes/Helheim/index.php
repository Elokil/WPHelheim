<?php get_header() ?>
  <main>
    
  <section id="research-bar">
    <div class='tag-filter'>
      <?php $tags = get_tag_article_list(); 
       foreach ($tags as $tag){?>
        <div class='filter-tag-btn inactive'><?php echo $tag ?></div>
       <?php };?>
    </div>
    <div class='research-input'></div>
  </section>
  <section id="blog-accueil">
      <h2>Blog</h2>
      <?php
      $query = new WP_Query(array('category_name'=>'design', 'posts_per_page'=>'1', 'order'=>'DESC'));
      while ($query->have_posts()):
          $query->the_post();
          $id =  get_the_ID()
        ?>
        <div class="card-article first-article">
          <a href="<?php the_permalink(); ?>" class="card-article-link">
            <?php the_post_thumbnail('post-thumbnail', ['class' =>'card-article-img' ]); ?>
            <div class='filter'></div>
            <h3 class='card-article-title'>Dernier Design:&nbsp;<?php the_title()?></h3>
            <p class='card-article-author'>Auteur:&nbsp;<?php the_author()?></p>
            <p class='card-article-comments'>
            <svg xmlns="http://www.w3.org/2000/svg" width="16.976" height="12.771" viewBox="0 0 16.976 12.771">
                <g id="Bulle" transform="translate(0.25 0.25)">
                  <g id="Calque_2" data-name="Calque 2">
                    <g id="Bulle-2" data-name="Bulle">
                      <g id="Groupe_1" data-name="Groupe 1" transform="translate(1.17 0.28)">
                        <path id="Tracé_3" data-name="Tracé 3" d="M18.892,9.34,5.339,10.8a.193.193,0,0,1-.2-.188L4.466,2.937a.2.2,0,0,1,.165-.224l13.55-1.464a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,18.892,9.34Z" transform="translate(-4.464 -1.249)"/>
                        <path id="Tracé_4" data-name="Tracé 4" d="M18.892,9.34,5.339,10.8a.193.193,0,0,1-.2-.188L4.466,2.937a.2.2,0,0,1,.165-.224l13.55-1.464a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,18.892,9.34Z" transform="translate(-4.464 -1.249)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      </g>
                      <path id="Tracé_5" data-name="Tracé 5" d="M17.892,8.34,4.339,9.8a.193.193,0,0,1-.2-.188L3.466,1.937a.2.2,0,0,1,.165-.224L17.181.249a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,17.892,8.34Z" transform="translate(-2.574 -0.249)" fill="#fff"/>
                      <path id="Tracé_6" data-name="Tracé 6" d="M17.892,8.34,4.339,9.8a.193.193,0,0,1-.2-.188L3.466,1.937a.2.2,0,0,1,.165-.224L17.181.249a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,17.892,8.34Z" transform="translate(-2.574 -0.249)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      <path id="Tracé_7" data-name="Tracé 7" d="M34.29,25.51l-.3,2.3,1.363.647-.68,1.453L36.417,28.3l-1.464-.8.252-1.741" transform="translate(-24.554 -18.438)" fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      <path id="Tracé_8" data-name="Tracé 8" d="M1.624,4.706a.89.89,0,0,1-.045-.423c.053-.143.372-.143.372-.143" transform="translate(-1.211 -3.051)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      <path id="Tracé_9" data-name="Tracé 9" d="M.353,4.157a1.12,1.12,0,0,1-.059-.535c.07-.182.47-.182.47-.182" transform="translate(-0.285 -2.547)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      <path id="Tracé_10" data-name="Tracé 10" d="M56.784,29.15a.857.857,0,0,1-.042.426c-.078.129-.392.064-.392.064" transform="translate(-40.654 -21.059)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      <path id="Tracé_11" data-name="Tracé 11" d="M57.657,29.53a1.12,1.12,0,0,1-.053.543c-.1.165-.5.084-.5.084" transform="translate(-41.194 -21.332)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                    </g>
                  </g>
                </g>
              </svg>
              &nbsp;<?php echo get_comments_number(get_the_ID())?></p>
            </a>
        </div>
      <?php endwhile;
      $i = 0;
      $bool = false;
      $query = new WP_Query(array('category_name'=>'article', 'order'=>'DESC'));
      while ($query->have_posts()){
        $query->the_post();
        if ($bool === false && has_category('Design', get_the_ID())){
          $bool = true;
        }else{
          ?>
          <div class="card-article ">
            <a href="<?php the_permalink(); ?>" class="card-article-link">
              <?php the_post_thumbnail('post-thumbnail', ['class' =>'card-article-img' ]); ?>
              <div class='filter'></div>
              <h3 class='card-article-title'><?php the_title()?></h3>
              <p class='card-article-author'>Auteur:&nbsp;<?php the_author()?></p>
              <p class='card-article-comments'>
              <svg xmlns="http://www.w3.org/2000/svg" width="16.976" height="12.771" viewBox="0 0 16.976 12.771">
                  <g id="Bulle" transform="translate(0.25 0.25)">
                    <g id="Calque_2" data-name="Calque 2">
                      <g id="Bulle-2" data-name="Bulle">
                        <g id="Groupe_1" data-name="Groupe 1" transform="translate(1.17 0.28)">
                          <path id="Tracé_3" data-name="Tracé 3" d="M18.892,9.34,5.339,10.8a.193.193,0,0,1-.2-.188L4.466,2.937a.2.2,0,0,1,.165-.224l13.55-1.464a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,18.892,9.34Z" transform="translate(-4.464 -1.249)"/>
                          <path id="Tracé_4" data-name="Tracé 4" d="M18.892,9.34,5.339,10.8a.193.193,0,0,1-.2-.188L4.466,2.937a.2.2,0,0,1,.165-.224l13.55-1.464a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,18.892,9.34Z" transform="translate(-4.464 -1.249)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        </g>
                        <path id="Tracé_5" data-name="Tracé 5" d="M17.892,8.34,4.339,9.8a.193.193,0,0,1-.2-.188L3.466,1.937a.2.2,0,0,1,.165-.224L17.181.249a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,17.892,8.34Z" transform="translate(-2.574 -0.249)" fill="#fff"/>
                        <path id="Tracé_6" data-name="Tracé 6" d="M17.892,8.34,4.339,9.8a.193.193,0,0,1-.2-.188L3.466,1.937a.2.2,0,0,1,.165-.224L17.181.249a.19.19,0,0,1,.2.185l.672,7.679A.2.2,0,0,1,17.892,8.34Z" transform="translate(-2.574 -0.249)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        <path id="Tracé_7" data-name="Tracé 7" d="M34.29,25.51l-.3,2.3,1.363.647-.68,1.453L36.417,28.3l-1.464-.8.252-1.741" transform="translate(-24.554 -18.438)" fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        <path id="Tracé_8" data-name="Tracé 8" d="M1.624,4.706a.89.89,0,0,1-.045-.423c.053-.143.372-.143.372-.143" transform="translate(-1.211 -3.051)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        <path id="Tracé_9" data-name="Tracé 9" d="M.353,4.157a1.12,1.12,0,0,1-.059-.535c.07-.182.47-.182.47-.182" transform="translate(-0.285 -2.547)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        <path id="Tracé_10" data-name="Tracé 10" d="M56.784,29.15a.857.857,0,0,1-.042.426c-.078.129-.392.064-.392.064" transform="translate(-40.654 -21.059)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                        <path id="Tracé_11" data-name="Tracé 11" d="M57.657,29.53a1.12,1.12,0,0,1-.053.543c-.1.165-.5.084-.5.084" transform="translate(-41.194 -21.332)" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="0.5"/>
                      </g>
                    </g>
                  </g>
                </svg>
                &nbsp;<?php echo get_comments_number(get_the_ID())?></p>
            </a>
          </div>
      <?php };
      };?>
  </section>
  </main>

<?php get_footer() ?>