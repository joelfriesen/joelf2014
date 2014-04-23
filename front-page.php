<?php get_header(); ?>
<script>
    $(function () {
      // Slideshow 2
      $(".rslides2").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
		    "timeout": 9000,
        speed: 500,
        maxwidth: 960
      });     
    });
  </script>
<div id="header">
  <div class="container">
    <div id="slider" class="rslides_container">
      <ul class="rslides rslides2">
        <li class="slide1">
          <div>A <strong>one-man web design shop</strong> specializing in small and medium sized businesses.</div>
        </li>
        <li class="slide2">
          <div>I am the <strong>Lead instructor</strong> and <strong>creator</strong> of the <a href="http://camosun.ca/learn/programs/webfoundations/">Web Foundations Program</a> at Camosun College, Victoria B.C.</div>
        </li>
        <li class="slide3">
          <div>As the <strong>Web Template Coordinator</strong> at the <a href="http://uvic.ca">University of Victoria</a>, I organized massive web design projects.</div>
        </li>
        <li class="slide4">
          <div>I want to help you <strong>design your website</strong>, teach you how to maintain it, and <strong>sell your product</strong>.</div>
        </li>
        <li class="slide5">
          <div>Call <strong>250-884-2563</strong> or <a href="/contact/">contact me through this website </a> to book an appointment.</div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container fourcol">
    <div class="col spanfour">
      <h3  class="indexintro">What's New?</h3>
    </div>
  </div>
  <div class="container fourcol">
    <div class="col">
      <?php
        $the_query = new WP_Query( 'category_name=portfolio&posts_per_page=1' );
        global $more;
        while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0;?>
        <div class="contentbox">
          <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php the_content('',TRUE,''); ?>
          <div class="excerpt"><span>…</span></div>
        </div>
        <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <div class="col">
      <?php
        $the_query = new WP_Query( 'category_name=portfolio&posts_per_page=1&offset=1' );
        global $more;
        while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0;?>
        <div class="contentbox">
          <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php the_content('',TRUE,''); ?>
          <div class="excerpt"><span>…</span></div>
        </div>
        <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <div class="col">
      <?php
          $the_query = new WP_Query( 'category_name=news&posts_per_page=1' );
          global $more;
          while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0;?>
          <div class="contentbox">
            <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_content('',TRUE,''); ?>
            <div class="excerpt"><span>…</span></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <div class="col last">
      <h4 class="indexintro">Say Hello</h4>
      <form class="uniForm" action="/fm.php" method="post">
        <input type="hidden" name="recipient" value="emailaddress" />
        <input type="hidden" name="subject" value=" - from joelf.com" />
        <input type="hidden" name="required" value="subject_prefix,email" />
        <input type="hidden" name="alias" value="email=E-mail Address,subject_prefix=Your Name,comments=Comments" />
        <input type="hidden" name="redirect" value="/thankyou/" />
        <fieldset class="blocklabels">
          <div class="row">
            <label for="subject_prefix">Name</label><input id="subject_prefix" class="textinput" type="text" name="subject_prefix" />
            
          </div>
          <div class="row">
            <label for="email">Email</label><input id="email" class="textinput" type="text" name="email" />
            
          </div>
          <div class="row">
            <label for="comments">Comments</label>
            <textarea id="comments" name="comments" rows="12" cols="20"></textarea>
          </div>
          <div class="row invis">
            <input type="hidden" name="frompage" value="front" />
            <input class="textInput" type="text" name="url" id="url" size="35" />
            <input class="textInput" type="text" name="phone" id="phone" size="35" />
            <input class="textInput" type="text" name="altemail" id="altemail" size="35" />
          </div>
        </fieldset>
        <div class="buttons">
          <input type="submit" value="Send" />
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container footertext">
  <?php dynamic_sidebar('footer') ?>
</div>
<?php wp_footer(); ?>
</body></html>