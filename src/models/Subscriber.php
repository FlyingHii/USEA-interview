<?php
namespace Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'subscribers')]
class Subscriber
{
    #[Id, Column(type: 'integer')]
    #[GeneratedValue]
//    #[SequenceGenerator(sequenceName: 'message_seq', initialValue: 1, allocationSize: 100)]
    protected int $id;
    #[Column]
    public $name;
}