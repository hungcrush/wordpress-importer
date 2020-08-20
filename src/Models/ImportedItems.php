<?php

namespace Botble\WordpressImporter\Models;
use Botble\Base\Models\BaseModel;

class ImportedItems extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imported_items';

    /**
     * @var array
     */
    protected $fillable = [
        'import_history_id',
        'status',
        'post_title',
        'post_id'
    ];
}