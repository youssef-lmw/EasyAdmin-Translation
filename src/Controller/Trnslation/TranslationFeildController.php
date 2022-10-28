<?php

namespace App\Controller\Trnslation;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;
use A2lix\TranslationFormBundle\Form\Type\TranslationsType;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;


class TranslationFeildController implements FieldInterface
{
    use FieldTrait;

    public static function new(string $propertyName, ?string $label = null, array $fieldsConfig = []): self
    {
        return (new self())
            ->setProperty($propertyName)
            ->setLabel($label)
            ->setFormType(TranslationsType::class)
            ->setFormTypeOptions([
                'default_locale' => 'fr',
                'fields' => $fieldsConfig,
            ]);
    }
}
