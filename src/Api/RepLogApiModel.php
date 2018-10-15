<?php

namespace App\Api;

/**
 * Class RepLogApiModel
 * @package App\Api
 */
class RepLogApiModel
{
    /**
     * @var
     */
    public $id;

    /**
     * @var
     */
    public $reps;

    /**
     * @var
     */
    public $itemLabel;

    /**
     * @var
     */
    public $totalWeightLifted;

    /**
     * @var array
     */
    private $links = [];

    /**
     * @param $ref
     * @param $url
     */
    public function addLink($ref, $url)
    {
        $this->links[$ref] = $url;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }
}