<?php namespace Fritzandandre\HtmlWidgetExtension\HtmlWidget;

use Fritzandandre\HtmlWidgetExtension\HtmlWidget\Contract\HtmlWidgetRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class HtmlWidgetRepository extends EntryRepository implements HtmlWidgetRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var HtmlWidgetModel
     */
    protected $model;

    /**
     * Create a new HtmlWidgetRepository instance.
     *
     * @param HtmlWidgetModel $model
     */
    public function __construct(HtmlWidgetModel $model)
    {
        $this->model = $model;
    }
}
