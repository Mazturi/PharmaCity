<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.autocomplete' shared service.

include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Finder.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Autocomplete.php';
include_once $this->targetDirs[3].'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Paginator.php';

return $this->services['easyadmin.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Autocomplete(${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->getEasyadmin_Config_ManagerService()) && false ?: '_'}, new \EasyCorp\Bundle\EasyAdminBundle\Search\Finder(${($_ = isset($this->services['easyadmin.query_builder']) ? $this->services['easyadmin.query_builder'] : $this->load('getEasyadmin_QueryBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['easyadmin.paginator']) ? $this->services['easyadmin.paginator'] : $this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator()) && false ?: '_'}), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'});
