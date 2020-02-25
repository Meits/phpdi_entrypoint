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
     * @Inject()
     * @var Db
     */
    private $saver;


    /**
     * Annotation combined with phpdoc:
     *
     * @Inject
     * @param Db $saver
     */
    public function __construct($saver)
    {
        $this->saver = $saver;
    }

    public function save()
    {
        $this->saver->save();
    }
}