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
  'label'        => 'Route Map SVG',
  'instructions' => '',
  'layout'       => 'block',
]) // REQUIRED GROUP
  ->addMessage('message_text', 'message', [
    'label' => 'Note:',
    'message' => 'The Route Map interactive .svg will appear here automatically',
  ])
->endGroup() // END REQUIRED GROUP
->setLocation('block', '==', 'acf/'.$path);

return $name;
