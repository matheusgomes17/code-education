<?php

namespace APIsSilex\Products\Interfaces;

use Silex\Application;

interface ProductsControllerInterface 
{
    public function connect(Application $app);
    
    public function getProducts(Application $app);
    
    public function getProductsId(Application $app, $id);
}
