<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\Command\\DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type', 4 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'), array(0 => 'AppBundle\\Form\\RegistrationType', 1 => 'AppBundle\\Form\\ProfileType', 2 => 'AppBundle\\Form\\DoctorType', 3 => 'AppBundle\\Form\\MediaType', 4 => 'AppBundle\\Form\\PatientType', 5 => 'AppBundle\\Form\\PharmacyType', 6 => 'AppBundle\\Form\\PrescriptionType', 7 => 'AppBundle\\Form\\SupplierType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 9 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 10 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 11 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 12 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 13 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 14 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 15 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 16 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 17 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 18 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 19 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 20 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
