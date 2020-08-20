<?php

namespace Botble\WordpressImporter\Models;

use Botble\Base\Models\BaseModel;

class ImportHistory extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'import_history';

    /**
     * @var array
     */
    protected $fillable = [
        'file_name',
        'status'
    ];
}