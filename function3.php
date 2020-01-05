<?php

function html_escape($words){
  return htmlspecialchars($words, ENT_QUOTES, 'UTF-8');
}

function condition_text(){
  include('text.php');

  if($_POST['condition'] === '気虚(ききょ)'){
    return $qi_defi;
  }elseif($_POST['condition'] === '気滞(きたい)'){
    return $qi_sta;
  }elseif($_POST['condition'] === '血虚(けっきょ)'){
    return $bl_defi;
  }elseif($_POST['condition'] === '血瘀(けつお)'){
    return $bl_sta;
  }elseif($_POST['condition'] === '陰虚(いんきょ)'){
    return $yin_defi;
  }elseif($_POST['condition'] === '陽虚(ようきょ)'){
    return $yang_defi;
  }
}

function advice_text(){
  include('text.php');

  if($_POST['condition'] === '気虚(ききょ)'){
    return $ad_qd;
  }elseif($_POST['condition'] === '気滞(きたい)'){
    return $ad_qs;
  }elseif($_POST['condition'] === '血虚(けっきょ)'){
    return $ad_bd;
  }elseif($_POST['condition'] === '血瘀(けつお)'){
    return $ad_bs;
  }elseif($_POST['condition'] === '陰虚(いんきょ)'){
    return $ad_yind;
  }elseif($_POST['condition'] === '陽虚(ようきょ)'){
    return $ad_yangd;
  }
}
