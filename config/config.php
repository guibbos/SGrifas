<?php
session_start();
define('SITE_NAME','Rifa Fácil');
define('BASE_URL','');
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function redirect($p){header('Location: '.BASE_URL.$p);exit;}
function admin_required(){if(empty($_SESSION['admin_id'])) redirect('/admin/login.php');}
