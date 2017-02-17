<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreExtensionHtmlWidgetCreateWidgetFields extends Migration
{
    protected $fields = [
        'html' => [
            'type'   => 'anomaly.field_type.editor',
            'config' => [
                'height' => 250,
            ],
        ],
    ];
}
