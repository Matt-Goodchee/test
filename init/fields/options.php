<?php
use StoutLogic\AcfBuilder\FieldsBuilder;
$options = new FieldsBuilder('theme_options');

$options
// Notice Bar
->addTab('Notice Bar')
  ->addGroup('notice_bar_group', [
    'label' => '',
  ])
  ->addTrueFalse('toggle', [
    'label' => 'Enable',
    'ui' => 1,
    'default_value' => 0,
    'ui_on_text' => 'Yes',
    'ui_off_text' => 'No',
    'wrapper' => [
      'class' => 'center',
      'width' => '33%',
    ]
  ])
  ->addText('heading', [
    'label' => 'Heading',
    'wrapper' => [
      'class' => 'center',
      'width' => '33%',
    ],
    'conditional_logic' => [
      [[
        'field' => 'toggle',
        'operator' => '==',
        'value' => '1',
      ]]
    ]
  ])
  ->addText('updated', [
    'label' => 'Updated Date',
    'wrapper' => [
      'class' => 'center',
      'width' => '33%',
    ],
    'conditional_logic' => [
      [[
        'field' => 'toggle',
        'operator' => '==',
        'value' => '1',
      ]]
    ]
  ])
  ->addDatePicker('start_date', [
   'display_format' => 'm/d/Y',
   'return_format' => 'Y-m-d',
   'wrapper' => [
    'class' => 'center',
    'width' => '50%',
  ],
  'conditional_logic' => [
    [[
      'field' => 'toggle',
      'operator' => '==',
      'value' => '1',
    ]]
  ]
  ])
  ->addDatePicker('end_date', [
   'display_format' => 'm/d/Y',
   'return_format' => 'Y-m-d',
   'wrapper' => [
    'class' => 'center',
    'width' => '50%',
  ],
  'conditional_logic' => [
    [[
      'field' => 'toggle',
      'operator' => '==',
      'value' => '1',
    ]]
  ]
  ])
  ->addWysiwyg('content', [
    'media_upload' => 0,
    'wrapper' => [
      'class' => 'center',
    ],
    'conditional_logic' => [
      [[
        'field' => 'toggle',
        'operator' => '==',
        'value' => '1',
      ]]
    ]
  ])
  ->endGroup()

->addTab('Footer')
  ->addWysiwyg('copyright', [
    'media_upload' => 0,
    'wrapper' => [
      'class' => 'center',
    ]
  ])

->setLocation('options_page', '==', 'theme-options');

return $options;
