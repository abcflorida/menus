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
 * @copyright  (c) 2011-2016, Florida Web Deisgn LLC 
 * @link       http://flwebdesignservice.com
 */

namespace Abcflorida\Menus\Controllers\Admin;
 
use Platform\Menus\Controllers\Admin\MenusController as PMenu;

class MenusController extends PMenu  {
    
    public function index()
    {
        return view('abcflorida/menus::index');
    }
    
}