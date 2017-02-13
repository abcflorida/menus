<?php

/**
 * Part of the BC Town <type here> extension.
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

namespace Abcflorida\Menus\Repositories;

use Platform\Menus\Repositories\MenuRepository;
use Illuminate\Container\Container;

class BcMenuRepository extends MenuRepository {

    
    public function  __construct ( Container $app ) {

        parent::__construct( $app );
    }
    /**
    * {@inheritDoc}
    */
    public function grid()
    {
      $menus = $this->findAllRoot();
      $menus = $menus->keyBy('id');

       foreach ($menus as $menu) {

           $count = $menu->getChildrenCount();

           if ( $menu->site !== session()->get('admin.current_site') ) {
              $menus->forget($menu->id);
              $menu->items_count = trans_choice('platform/menus::model.general.items', $count, compact('count'));
           }
       }

       return $menus;
    }

}
