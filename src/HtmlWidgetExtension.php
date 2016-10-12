<?php namespace Fritzandandre\HtmlWidgetExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;
use Fritzandandre\HtmlWidgetExtension\HtmlWidget\Form\HtmlWidgetFormBuilder;
use Fritzandandre\LayoutFieldType\Contract\LayoutExtensionInterface;

class HtmlWidgetExtension extends Extension implements LayoutExtensionInterface
{
    /**
     * This extension provides.
     *
     * @var null|string
     */
    protected $provides = 'fritzandandre.field_type.layout::widget.html';

    /**
     * Get the form used to create and edit html widgets.
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
    public function getForm()
    {
        return app(HtmlWidgetFormBuilder::class);
    }
}
