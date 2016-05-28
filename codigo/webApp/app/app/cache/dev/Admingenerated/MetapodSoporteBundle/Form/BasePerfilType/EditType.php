<?php

namespace Admingenerated\MetapodSoporteBundle\Form\BasePerfilType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use JMS\SecurityExtraBundle\Security\Authorization\Expression\Expression;

class EditType extends AbstractType
{
    protected $securityContext;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $formOptions = $this->getFormOption('nombre', array(  'required' => true,  'label' => 'Nombre',  'translation_domain' => 'Admin',));
        $builder->add('nombre', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('descripcion', array(  'required' => false,  'label' => 'Descripcion',  'translation_domain' => 'Admin',));
        $builder->add('descripcion', 'text', $formOptions);

    
    }

    protected function getFormOption($name, array $formOptions)
    {
        return $formOptions;
    }

    public function getName()
    {
        return 'edit_perfil';
    }

    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }

}
