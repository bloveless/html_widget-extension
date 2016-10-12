<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class FritzandandreExtensionHtmlWidgetCreateWidgetFields extends Migration
{
    protected $fields = [
        'html' => 'anomaly.field_type.editor'
    ];
}
