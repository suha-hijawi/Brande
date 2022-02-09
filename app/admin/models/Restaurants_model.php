<?php

namespace Admin\Models;

use Admin\Traits\Locationable;
use Admin\Traits\Stockable;
use Carbon\Carbon;
use Igniter\Flame\Database\Attach\HasMedia;
use Igniter\Flame\Database\Model;
use Igniter\Flame\Database\Traits\Purgeable;

/**
 * Menu Specials Model Class
 */
class Restaurants_model extends Model
{
    /**
     * @var string The database table name
     */
    protected $table = 'restaurants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'Name',
        'Lng',
        'Lat'
    ];

    protected $casts = [
        'id' => 'string',
        'Lng' => 'decimal',
        'Lat' => 'decimal',
        'Name' => 'string',
        'Menu_id' => 'string',
    ];

    public function Menu(){
        return $this->hasOne(   Menus_model::Class , 'Menu_id','menu_id');
    }

}
