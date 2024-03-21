<?php
namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'boxes')]
class Box
{
    #[Id, Column(type: 'integer')]
    #[GeneratedValue]
    public int|null $id;
    #[Column]
    public $name;
    #[Column]
    public $prayer_zone;
    #[Column]
    public $subscriber_id;
}