<?php namespace Fritzandandre\HtmlWidgetExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;
use Fritzandandre\HtmlWidgetExtension\HtmlWidget\Form\HtmlWidgetFormBuilder;
use Fritzandandre\HtmlWidgetExtension\HtmlWidget\HtmlWidgetModel;
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
     * Then entry ID to use when retrieving the layout.
     *
     * @var
     */
    protected $entryId;

    /**
     * Get the form used to create and edit html widgets.
     *
     * @return \Illuminate\Foundation\Application|mixed
     */
    public function getForm()
    {
        return app(HtmlWidgetFormBuilder::class);
    }

    /**
     * Set the entry id for rendering.
     *
     * @param $entryId
     */
    public function setEntryId($entryId)
    {
        $this->entryId = $entryId;
    }

    /**
     * Render the content.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        $model      = app(HtmlWidgetModel::class);
        $htmlWidget = $model->find($this->entryId);

        return view('fritzandandre.extension.html_widget::render', ['content' => $htmlWidget->html]);
    }
}
