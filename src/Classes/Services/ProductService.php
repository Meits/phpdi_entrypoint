<?php
/**
 * Created by PhpStorm.
 * User: Meits
 * Date: 25-Feb-20
 * Time: 15:43
 */

namespace App\Classes\Services;


use App\Classes\Libs\Db;

class ProductService
{

    /**
     * Annotation combined with phpdoc:
     *
     * @Inject
     * @var Db
     */
    private $saver;

    public function save()
    {
        dump($this->saver);
        $this->saver->save();
    }
}