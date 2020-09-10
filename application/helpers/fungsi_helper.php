<?php
if (!function_exists('cekAdmin')) {
  function cekAdmin()
  {
    $ci = &get_instance();
    if ($ci->session->role != 'admin') {
      redirect('dashboard');
    }
  }
}

