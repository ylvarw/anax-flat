<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/style-base.min.css"
            ]
        ],

        "default"   => [
            "title"      => "default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style-default.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/style-light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhanced light theme by with a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/style-color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/style-dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/style-colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/style-typography.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],
    ]
];