<?php


function menuSubmenu($menu, $submenu)
{
  $request = request();
  $request->session()->forget(['lsbm', 'lsbsm']);
  $request->session()->put(['lsbm' => $menu, 'lsbsm' => $submenu]);
  return true;
}
















