<?php

/**
 * Part of the BC Town Menu extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Florida Web Design PSL License.
 *
 * This source file is subject to the Florida Web Design PSL License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    abcflorida/menus
 * @version    1.0.1
 * @author     Florida Web Design LLC
 * @license    Florida Web Deisgn LLC PSL
 * @copyright  (c) 2011-2016, Florida Web Deisgn LLC
 * @link       http://flwebdesignservice.com
 */
namespace Abcflorida\Menus\Providers;

use Cartalyst\Extensions\Extension;
use Cartalyst\Support\ServiceProvider;

class MenuProvider extends ServiceProvider {
    
    
    public function boot() {
        
        
    }
    
    public function register() {
        
        // Register the repository
        $this->bindIf('platform.menus', 'Abcflorida\Menus\Repositories\BcMenuRepository');
        //dd( $this->app );
        
        // Register the attributes namespace
       /*$this->app['platform.attributes.manager']->registerNamespace(
            $this->app['Abcflorida\Menus\Models\BcMenu']
        );*/
        
    }
    
}
