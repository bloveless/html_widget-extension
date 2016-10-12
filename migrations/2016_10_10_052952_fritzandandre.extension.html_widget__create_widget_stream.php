<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreExtensionHtmlWidgetCreateWidgetStream extends Migration
{
    protected $stream = [
        'slug' => 'html_widget'
    ];

    protected $assignments = [
        'html'
    ];
}
