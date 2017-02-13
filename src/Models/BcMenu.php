<?php

/**
 * Part of the BC Town Menus extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Florida Web Design PSL License.
 *
 * This source file is subject to the Florida Web Design PSL License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    type here
 * @version    1.0.1
 * @author     Florida Web Design LLC
 * @license    Florida Web Deisgn LLC PSL
 * @copyright  (c) 2011-2016, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Abcflorida\Menus\Models;

//use Illuminate\Database\Eloquent\Model;
use Platform\Menus\Models\Menu;
//use Cartalyst\Attributes\EntityInterface;
//use Illuminate\Database\Query\Expression;
//use Cartalyst\NestedSets\Nodes\NodeTrait;
//use Platform\Attributes\Traits\EntityTrait;
//use Illuminate\Database\Eloquent\Collection;
//use Cartalyst\NestedSets\Nodes\NodeInterface;
//use Cartalyst\Support\Traits\NamespacedEntityTrait;

class BcMenu extends Menu {
    
    protected $fillable = [
        'slug',
        'extension',
        'name',
        'type',
        'page_id',
        'secure',
        'uri',
        'class',
        'target',
        'visibility',
        'roles',
        'regex',
        'enabled',
        'site'
    ];
    
    protected static $pagesModel = 'Abcflorida\Menus\Models\BcMenu';
    
    protected $with = [
        'values.attribute',
    ];
    
    public function scopeSite($query, $site = null)
    {

        if ( $site ) {
            
            return $query->where('id', '=',1);

            
        }
        
    }
    
   /* public static function allRoot () {
        
        return $this->allRoot();
        
    } */

    
}

