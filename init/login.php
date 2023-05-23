<?php 

/* Custom Login Styles
========================================================= */
add_action('login_enqueue_scripts', 'custom_login_screen');
function custom_login_screen() { ?>
  <style type="text/css">
    body {
      background: #eee !important;
    }

    #loginform {
      border: none;
      box-shadow:0px 0px 10px rgba(0,0,0,0.3);
      background: #fff;
      border:2px solid white;
    }

    #loginform label {
      font-weight: 600;
      color: #555;
      margin-bottom: 5px;
    }

    #login h1 a {
      padding-bottom: 0px;
      background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/logo.svg');
      background-size: contain;
      width: 320px;
      height: 90px;
    }

    #login a {
      transition: .6s cubic-bezier(.23, 1, .32, 1);
      color: #333 !important;
    }

    #login a:hover {
      color: #ccc !important;
    }

    #login #wp-submit {
      transition: .6s cubic-bezier(.23,1,.32,1);
      font-family: "Montserrat", sans-serif;
      border: 0;
      background: #F0421C;
      color: #ffffff;
      border-radius: 80px;
      cursor: pointer;
      display: inline-block;
      padding: 10px 25px;
      text-align: center;
      user-select: none;
      vertical-align: baseline;
      font-size: 1.25rem;
      line-height: 1.2;
      font-weight: 600;
      text-decoration: none;
      zoom: 1;
      -moz-user-select: none;
      -ms-user-select: none;
      -webkit-user-drag: none;
      -webkit-user-select: none;
    }

    #login #wp-submit:hover {
      background-color: #212121;
    }
  </style>
<?php }
