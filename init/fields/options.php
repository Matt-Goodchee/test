<?php
use StoutLogic\AcfBuilder\FieldsBuilder;
$options = new FieldsBuilder('theme_options');

$options
->addTab('Footer')
  ->addWysiwyg('copyright', [
    'media_upload' => 0,
      'wrapper' => [
        'class' => 'center',
      ]
  ])
->addTab('Custom Scripts')
  ->addTextarea('head_code')
  ->addTextarea('body_code')
  ->addTextarea('footer_code')

->setLocation('options_page', '==', 'theme-options');

return $options;
