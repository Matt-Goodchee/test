<?php

/* Parse block.json */

$block_json = file_get_contents(__DIR__.'/block.json');
$block_data = json_decode($block_json,true);

/* Block Field Init */
use StoutLogic\AcfBuilder\FieldsBuilder;
$path        = basename(__DIR__);
$name        = str_replace('-', '_', $path);
$group_name  = $name . '_group';
$group_label = str_replace('-', ' ', $path);
$name        = new FieldsBuilder($name);
/* END Block Field Init */

$name
->addGroup($group_name, [
  'label'        => 'Image Border Options',
  'instructions' => '',
  'layout'       => 'block',
]) // REQUIRED GROUP

  ->addRadio('border', [
    'label' => 'Accent Location',
    'layout' => 'vertical',
    'default_value' => 'bottom-left',
    'choices' => [
      'top-left'     => 'Top Left',
      'top-right'    => 'Top Right',
      'bottom-left'  => 'Bottom Left',
      'bottom-right' => 'Bottom Right',
    ]
  ])
  ->addRadio('rounded', [
    'label' => 'Rounded Border Location',
    'layout' => 'vertical',
    'default_value' => 'bottom-right',
    'choices' => [
      'top-left'     => 'Top Left',
      'top-right'    => 'Top Right',
      'bottom-left'  => 'Bottom Left',
      'bottom-right' => 'Bottom Right',
    ]
  ])

->endGroup() // END REQUIRED GROUP
->setLocation('block', '==', 'acf/'.$path);

return $name;
