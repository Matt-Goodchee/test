<?php
  $group         = blockFieldGroup(__FILE__); // REQUIRED
  $border = $group['border'] ?? NULL;
  $round  = $group['rounded'] ?? NULL;

  $template = [
    ['core/media-text', [
      'mediaSizeSlug' => 'large',
    ], [
      ['core/heading', [
       'level' => 3,
       'placeholder' => 'Heading',
     ]],
     ['core/paragraph', [
      'textColor' => 'dark-brown',
      'placeholder' => 'Paragraph text',
     ]],
   ]]
  ];
?>

  <div 
    <?php block_class_id( $block,'media-text-custom-block' . ' border-' . $border . ' rounded-' . $round); ?>>
    <InnerBlocks template="<?=esc_attr(wp_json_encode($template));?>" />
  </div>
