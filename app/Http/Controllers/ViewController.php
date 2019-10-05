<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Generals\Menus;

class ViewController extends Controller {

    public function getMenuDashboard() {
        $menu = new Menus();
        return $menu->dashboard();
    }

    public function getMenuDashboardExtras() {
        $menu = new Menus();
        return $menu->dashboard_extra();
    }

    public function getMenuDashboardExtrasList() {
        $menu = new Menus();
        return $menu->dashboard_extra_list();
    }

    public function appName () {
        return "SOULUTION DASHBOARD";
    }

    public function getCurrentURL() {
        $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
        return $link;
    }
    
    // Home First
    public function dashboard_home() {
        return view('dashboard.homes.quick', [
            "app_name"  => $this->appName(),
            "menu"      => $this->getMenuDashboard(),
            "menu_extras"   => $this->getMenuDashboardExtras(),
            "menu_extras_list"   => $this->getMenuDashboardExtrasList(),
            "current_url"   => $this->getCurrentURL()
        ]);
    }
    
}
