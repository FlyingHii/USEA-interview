<?php

namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'songs')]
class Song extends AbstractModel
{
    #[Id, Column(type: 'integer')]
    #[GeneratedValue]
    public int|null $id = null;
    #[Column]
    public $name;
    #[Column]
    public $subscriber_id;
    #[Column]
    #[ManyToOne(targetEntity: Box::class)]
    #[JoinColumn(name: 'box_id', referencedColumnName: 'id')]
    public $box_id;
    #[Column]
    #[GeneratedValue]
    public $prayer_time_seq;
    #[Column]
    public $prayer_time_date;
    #[Column]
    public $prayer_time;
}