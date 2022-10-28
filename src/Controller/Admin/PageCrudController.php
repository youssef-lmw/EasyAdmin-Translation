<?php

namespace App\Controller\Admin;

use App\Entity\Page;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Controller\Trnslation\TranslationFeildController as TranslationField;

class PageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Page::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'title')->hideOnForm(),
            TranslationField::new('translations', 'translations', [
                'title' => [
                    'field_type' => TextType::class,
                    'required' => true,
                ]
                // add more translatable properties into the array
            ])->setRequired(true)
                ->hideOnIndex()
        ];
    }
    
}
