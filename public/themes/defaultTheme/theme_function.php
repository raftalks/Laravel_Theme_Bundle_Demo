<?php

function theme_defaultTheme($theme){
   
    $theme->add_asset('style.css');
    $theme->theme_partial('header');
    $theme->theme_partial('footer');
     
}
