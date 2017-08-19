<?php
/**
 * Created by PhpStorm.
 * User: jlroberts
 * Date: 8/19/17
 * Time: 12:29 PM
 */

namespace App\Service;

use CakeDC\Api\Service\Service;

class FooService extends Service {

    public function initialize()
    {
        parent::initialize();

        $this->mapAction('stats', \App\Service\FooService::class, ['method' => ['GET'], 'mapCors' => true]);
    }

    public function stats()
    {
        die('stats');
    }
}