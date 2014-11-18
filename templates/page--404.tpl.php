<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php

//dpm(get_defined_vars());

?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--node.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>

<?php if($page['top_header']): ?>
<div class="top-region-container clearfix">
  <div class="top-header-region row">
    <?php print render($page['top_header']); ?>
  </div>
</div>
<?php endif; ?>

<div class="header-container">
  <header role="banner" class="row">
    <div class="inner-wrapper">
        <div class="siteinfo">
        <?php if ($logo): ?>
          <figure>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
          </figure>
        <?php endif; ?>

        <?php if($site_name OR $site_slogan ): ?>
        <hgroup>
          <?php if($site_name): ?>
            <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
              <?php print $site_name; ?></a>
            </a>
            </h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup>
        <?php endif; ?>
      </div>

      <?php if($page['header']): ?>
        <a href="#" id="mobile-link" style="display: none"><span></span></a>
        <div class="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header>
</div>

<div class="page-container">
  <div class="page row clearfix">
    <div class="inner-wrapper">

      <div role="main" id="main-content" class="col">
       <article>

        <h1>Page Not Found</h1>
        <p>The page you have requested was not found.</p>
 
        <p>Please feel free to use our <a href="/search/">search page</a>,  or <a href="/contact">contact us</a> if you have further problems, or to report a broken link.</p>
      
      </article>
      </div><!--/main-->
      
      <?php if ($page['sidebar_first']): ?>
        <div class="sidebar-first col">
        <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div class="sidebar-second col">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>
      
    </div>
  </div><!--/page-->
</div>

<?php if (isset($page['footer']) OR isset($page['footer_top'])): ?>
<div class="footer-container">
  <footer role="contentinfo" class="row">
    <?php if (isset($page['footer_top'])): ?>
    <div class="footer-top"><?php print render($page['footer_top']); ?></div> 
    <?php endif ?>
    <?php if (isset($page['footer'])): ?>
    <div class="footer">
      <?php print render($page['footer']); ?>
    </div>  
    <?php endif ?>
  </footer>
</div>
<?php endif ?>
