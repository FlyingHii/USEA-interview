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
    public $name = 'hello';
    #[Column]
    public $prayer_zone = 'hello';
    #[Column]
    public $subscriber_id = 'hello';
//    /**
//     * @return mixed
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @param mixed $id
//     */
//    public function setId($id): void
//    {
//        $this->id = $id;
//    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}