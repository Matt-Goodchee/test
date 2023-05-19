<?php
use StoutLogic\AcfBuilder\FieldsBuilder;

$templates = new FieldsBuilder('provider');

$templates
->addGroup('provider_group', [
  'label'        => 'Provider Details',
  'instructions' => '',
  'layout'       => 'block',
])
  // ->addText('long_name', [
  //   'label' => 'Long Name',
  //   'wrapper' => [
  //     'class' => 'center',
  //     'width' => '50%',
  //   ]
  // ])
  ->addText('short_name', [
    'label' => 'Short Name',
    'wrapper' => [
      'class' => 'center',
      'width' => '50%',
    ]
  ])
  ->addButtonGroup('accent_color', [
    'label'  => 'Accent Color',
    'layout' => 'vertical',
    'default_value' => '',
    'choices' => [
      'green' => 'Green',
      'pink'  => 'Pink',
      'teal'  => 'Teal',
      'navy'  => 'Navy',
      'blue'  => 'Blue',
      'lime'  => 'Lime',
    ],
    'wrapper' => [
      'class' => 'center',
      'width' => '50%',
    ]
  ])
->endGroup()

->setLocation('post_type', '==', 'provider');

return $templates;
