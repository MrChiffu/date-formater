<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 * @ORM\Table(name="date")
 */

class TranslateDate
{
    public $date;

    public function __construct($date){
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}
