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
     * The model for this widget.
     *
     * @var HtmlWidgetModel
     */
    protected $model;

    /**
     * Then entry ID to use when retrieving the layout.
     * @var
     */
    protected $entryId;

    /**
     * HtmlWidgetExtension constructor.
     *
     * @param HtmlWidgetModel $model
     */
    public function __construct(HtmlWidgetModel $model)
    {
        $this->model = $model;
    }

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
        $htmlWidget = $this->model->find($this->entryId);
        return view('fritzandandre.extension.html_widget::render', ['content' => $htmlWidget->html]);
    }
}
