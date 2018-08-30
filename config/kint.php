<?php

/*
|--------------------------------------------------------------------------
| Kint Configuration Options
|--------------------------------------------------------------------------
|
| See Kint documentation for full details on what each option does.
|
*/

return [

    /*
     * If set to false, Kint will become silent
     * `true` will enable Kint::MODE_PLAIN by default
     * set to Kint::MODE_RICH to enable rich mode
     */
    'enabled_mode' => env('APP_DEBUG'),

    'display_called_from' => true,

    'file_link_format' => ini_get('xdebug.file_link_format'),

    /*
     * The file paths displayed within debug traces
    */
    'app_root_dirs'    => array(
        base_path() => '.', // just display a period at application root
// 		base_path()=>base_path(), // display the full path
    ),

    'strlen_max' => 80,

    'max_depth' => 5,

    'theme' => 'original.css',

    'expanded' => false,

    'cli_detection' => true,

    'cli_colors'       => true,

    /*
     * Allows you to use these in blade templates:
     * @d($var) @s($var)
     */
    'blade_directives' => true,

];
