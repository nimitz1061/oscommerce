<?php
/*
  $Id: server_info.php,v 1.8 2004/08/15 22:58:13 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2004 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  $selected_box = 'tools';

  $imageOsCommerce = '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';

  $action = (isset($_GET['action']) ? $_GET['action'] : '');

  switch ($action) {
    case 'imageOsCommerce':
      header('Content-Type: image/gif');
      echo base64_decode($imageOsCommerce);
      exit; break;
    case 'phpInfo':
      phpinfo();
      exit; break;
  }

  $page_contents = 'server_info.php';

  require('templates/default.php');

  require('includes/application_bottom.php');
?>