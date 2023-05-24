<?php 

// Custom Notice Bar (under Theme Options in Dashboard)
$group = get_field('notice_bar_group', 'option');
if ( $group ) :
  $toggle    = $group['toggle'];
  $heading   = $group['heading'];
  $content   = $group['content'];
  $updated   = $group['updated'];
  $dateStart = $group['start_date'];
  $dateEnd   = $group['end_date'];
  $dateToday = date('Y-m-d');
endif;
?>
<?php if ( 
  $group &&
  $toggle &&
  !isset($_COOKIE['rc-notice-close']) &&
  !empty($content) && 
  ($dateToday >= $dateStart) && 
  ($dateToday <= $dateEnd)
) : ?>
  <div class="notice-bar open-bar" id="notice-bar">
    <div class="container">
      <div class="close-bar">
        <a id="notice-close" href="#" title="Close & Hide Notification"><span class="fas fa-times"></span></a>
      </div>
      <div class="wrapper">
        <div class="upper">
          <span class="fas fa-exclamation-triangle"></span>
          <?php if ( !empty($heading) ) { ?><p class="heading"><?= $heading; ?></p><?php } ?>
        </div>
        <div class="lower">
          <?=$content; ?>
            <?php if ( !empty($updated) ) { ?><p class="updated">Updated: <?= $updated; ?></p><?php } ?>
          </div>
      </div>
    </div>
  </div>
<?php endif; ?>
