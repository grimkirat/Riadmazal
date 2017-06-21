<?php


namespace RiadMazal\RiadMazalBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OffresAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('it', 'text');
          $formMapper->add('fr', 'text');
            $formMapper->add('en', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('it');
         $datagridMapper->add('fr');
          $datagridMapper->add('en');
      
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('it');
         $listMapper->addIdentifier('fr');
          $listMapper->addIdentifier('en');
    }
}