<header id="header">
  <div class="container">
    <?php print render($page['header']) ?>
</header>

<?php if ($logo): ?>
  <div id="site-branding">
    <div class="container">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    </div>
  </div>
<?php endif; ?>  

<div id="slider">
  <div class="container">
    <?php print render($page['slider']) ?>
  </div>
</div>

<?php if ($page['highlighted']): ?>
  <div id="highlighted">
    <div class="container">
      <?php print render($page['highlighted']) ?>
    </div>
  </div>
<?php endif; ?>

<main id="main">
  <div class="container">
    <div id="breadcrumbs"><?php if ($breadcrumb): print $breadcrumb; endif;?></div>
    <?php print $messages; ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>     
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </div>
</main>

<div id="info-blocks">
  <div class="container">
    <?php print render($page['info_blocks']) ?>
  </div>
</div>   

<div id="map">
  <?php print render($page['map']) ?>
</div>  
  
<footer id="footer">
  <div class="container">
    <?php print render($page['footer']) ?>
  </div>
</footer> 

<div id="mobile-panel">
  <?php print render($page['mobile_panel']) ?>
</div>

