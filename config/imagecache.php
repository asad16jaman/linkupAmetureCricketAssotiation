<?php

return [

    /*
    | {route}/{template}/{filename}
    |
    | Examples: "images", "img/cache"
    | {{ route('imagecache', [ 'template'=>'sbixs','filename' => $post->fiName() ]) }}
    */

    'route' => 'uslive',

    // 'route' => 'cplg',


    'paths' => [
        public_path('img'),
        public_path('storage/ws'),
        public_path('storage/sliders'),
        public_path('storage/teams'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
    */

    'templates' => array(
        'small' => 'Intervention\Image\Templates\Small',
        'original' => 'Intervention\Image\Templates\Original',
        'medium' => 'Intervention\Image\Templates\Medium',
        'large' => 'Intervention\Image\Templates\Large',
        'ppxs' => 'App\ImageFilters\ProfilePicXS',
        'ppsm' => 'App\ImageFilters\ProfilePicSmall',
        'ppmd' => 'App\ImageFilters\ProfilePicMedium',
        'pplg' => 'App\ImageFilters\ProfilePicLarge',
        'ppxlg' => 'App\ImageFilters\ProfilePicXLarge',
        'cpxs' => 'App\ImageFilters\CoverPicXS',
        'cpsm' => 'App\ImageFilters\CoverPicSmall',
        'cpmd' => 'App\ImageFilters\CoverPicMedium',
        'pfilg' => 'App\ImageFilters\ProductPicLarge',
        'pfimd' => 'App\ImageFilters\ProductPicMedium',
        'pfism' => 'App\ImageFilters\ProductPicSmall',
    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */

    'lifetime' => 43200,

];