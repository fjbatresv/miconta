<?php

namespace Admingenerated\MiContaSoporteBundle\Form\BaseUsuarioType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use JMS\SecurityExtraBundle\Security\Authorization\Expression\Expression;

class NewType extends AbstractType
{
    protected $securityContext;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $formOptions = $this->getFormOption('nombre', array(  'required' => true,  'label' => 'Nombre',  'translation_domain' => 'Admin',));
        $builder->add('nombre', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('apellido', array(  'required' => false,  'label' => 'Apellido',  'translation_domain' => 'Admin',));
        $builder->add('apellido', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('username', array(  'required' => true,  'label' => 'Username',  'translation_domain' => 'Admin',));
        $builder->add('username', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('email', array(  'required' => true,  'label' => 'Email',  'translation_domain' => 'Admin',));
        $builder->add('email', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('direccion', array(  'required' => false,  'label' => 'Direccion',  'translation_domain' => 'Admin',));
        $builder->add('direccion', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('fecha_nacimiento', array(  'required' => false,  'read_only' => true,  'attr' =>   array(    'class' => 'datepicker',    'data-format' => 'yyyy-mm-dd',  ),  'label' => 'Fecha nacimiento',  'translation_domain' => 'Admin',));
        $builder->add('fecha_nacimiento', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('EstadoUsuario', array(  'class' => 'MiConta\\SoporteBundle\\Model\\EstadoUsuario',  'multiple' => false,  'label' => 'Estado',  'translation_domain' => 'Admin',));
        $builder->add('EstadoUsuario', 'model', $formOptions);

    
    }

    protected function getFormOption($name, array $formOptions)
    {
        return $formOptions;
    }

    public function getName()
    {
        return 'new_usuario';
    }

    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }

}
