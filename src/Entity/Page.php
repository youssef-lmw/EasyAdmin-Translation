<?php

namespace App\Entity;

use App\Entity\Common\IdTrait;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PageRepository;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;


#[ORM\Entity(repositoryClass: PageRepository::class)]
class Page implements TranslatableInterface
{
    use IdTrait;
    use TranslatableTrait;
    
    #[Assert\Valid]
    protected $translations;

    public function __call($method, $arguments)
    {
        return PropertyAccess::createPropertyAccessor()->getValue($this->translate(), $method);
    }
}
