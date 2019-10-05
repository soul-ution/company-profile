<?php

namespace App\Http\Generals;

class Menus {

    public function base_uri() {
        return "http://localhost:8000/index.php/";
    }

    public function dashboard() {
        $base_uri = $this->base_uri() . "dashboard/";
        $menu = [];
        
        $menu[] = (object) [
            "icon"  => "fa fa-home",
            "href"  => $base_uri . "home/",
            "text"  => "Home",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-users",
            "href"  => $base_uri . "users/",
            "text"  => "Users",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-file",
            "href"  => $base_uri . "pages/",
            "text"  => "Pages",
            "child" => [
                (object) [
                    "href"  => $base_uri . "pages/list",
                    "text"  => "List Page"
                ],
                (object) [
                    "href"  => $base_uri . "pages/new",
                    "text"  => "New Page"
                ]
            ],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-bookmark",
            "href"  => $base_uri . "widgets/",
            "text"  => "Widgets",
            "child" => [
                (object) [
                    "href"  => $base_uri . "widgets/list",
                    "text"  => "List Widget"
                ],
                (object) [
                    "href"  => $base_uri . "widgets/new",
                    "text"  => "New Widget"
                ],
                (object) [
                    "href"  => $base_uri . "widgets/mapping-widget",
                    "text"  => "Mapping Widget"
                ]
            ],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-envelope",
            "href"  => $base_uri . "subscribes/",
            "text"  => "Subscribe",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-facebook",
            "href"  => $base_uri . "social-media/",
            "text"  => "Social Media",
            "child" => [],
        ];

        return $menu;
    }

    public function dashboard_extra() {
        $base_uri = $this->base_uri() . "dashboard/";
        $menu = [];

        $menu[] = (object) [
            "icon"  => "",
            "href"  => $base_uri . "extras/profile",
            "text"  => "Profile",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "",
            "href"  => $base_uri . "extras/settings",
            "text"  => "Settings",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "",
            "href"  => $base_uri . "extras/help",
            "text"  => "Help",
            "child" => [],
        ];

        $menu[] = (object) [
            "icon"  => "fa fa-sign-out",
            "href"  => $base_uri . "extras/sign-out",
            "text"  => "Sign Out",
            "child" => [],
        ];

        return $menu;
    }

    public function dashboard_extra_list() {
        $base_uri = $this->base_uri() . "dashboard/";
        $menu = [];

        $menu[] = (object) [
            "id"    => "notification",
            "icon"  => "fa fa-bell",
            "href"  => $base_uri . "extras/bell/",
            "text"  => "Notification",
            "child" => [],
        ];

        return $menu;
    }

}