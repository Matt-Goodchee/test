<?php
  $group         = blockFieldGroup(__FILE__); // REQUIRED
  $border = $group['border'] ?? NULL;
  $round  = $group['rounded'] ?? NULL;

  $template = [
    ['core/image', [
      'sizeSlug' => 'large',
    ]]
  ];
?>

  <div 
    <?php block_class_id( $block,'image-border-custom-block' . ' border-' . $border . ' rounded-' . $round); ?>>
    <InnerBlocks template="<?=esc_attr(wp_json_encode($template));?>" />
  </div>
