<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // pgzn_mobile_app_backend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pgzn_mobile_app_backend_homepage');
            }

            return array (  '_controller' => 'PGZN\\MobileAppBackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pgzn_mobile_app_backend_homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if ($pathinfo === '/admin/core/get-short-object-description') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/pgzn/mobileappbackend')) {
                    if (0 === strpos($pathinfo, '/admin/pgzn/mobileappbackend/apps')) {
                        // admin_pgzn_mobileappbackend_apps_list
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/apps/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_list',  '_route' => 'admin_pgzn_mobileappbackend_apps_list',);
                        }

                        // admin_pgzn_mobileappbackend_apps_create
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/apps/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_create',  '_route' => 'admin_pgzn_mobileappbackend_apps_create',);
                        }

                        // admin_pgzn_mobileappbackend_apps_batch
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/apps/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_batch',  '_route' => 'admin_pgzn_mobileappbackend_apps_batch',);
                        }

                        // admin_pgzn_mobileappbackend_apps_edit
                        if (preg_match('#^/admin/pgzn/mobileappbackend/apps/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_apps_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_edit',));
                        }

                        // admin_pgzn_mobileappbackend_apps_delete
                        if (preg_match('#^/admin/pgzn/mobileappbackend/apps/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_apps_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_delete',));
                        }

                        // admin_pgzn_mobileappbackend_apps_show
                        if (preg_match('#^/admin/pgzn/mobileappbackend/apps/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_apps_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_show',));
                        }

                        // admin_pgzn_mobileappbackend_apps_export
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/apps/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_export',  '_route' => 'admin_pgzn_mobileappbackend_apps_export',);
                        }

                        // admin_pgzn_mobileappbackend_apps_history
                        if (preg_match('#^/admin/pgzn/mobileappbackend/apps/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_apps_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_history',));
                        }

                        // admin_pgzn_mobileappbackend_apps_history_view_revision
                        if (preg_match('#^/admin/pgzn/mobileappbackend/apps/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_apps_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'pgznappsadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_apps_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/pgzn/mobileappbackend/charities')) {
                        // admin_pgzn_mobileappbackend_charities_list
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/charities/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_list',  '_route' => 'admin_pgzn_mobileappbackend_charities_list',);
                        }

                        // admin_pgzn_mobileappbackend_charities_create
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/charities/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_create',  '_route' => 'admin_pgzn_mobileappbackend_charities_create',);
                        }

                        // admin_pgzn_mobileappbackend_charities_batch
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/charities/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_batch',  '_route' => 'admin_pgzn_mobileappbackend_charities_batch',);
                        }

                        // admin_pgzn_mobileappbackend_charities_edit
                        if (preg_match('#^/admin/pgzn/mobileappbackend/charities/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_charities_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_edit',));
                        }

                        // admin_pgzn_mobileappbackend_charities_delete
                        if (preg_match('#^/admin/pgzn/mobileappbackend/charities/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_charities_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_delete',));
                        }

                        // admin_pgzn_mobileappbackend_charities_show
                        if (preg_match('#^/admin/pgzn/mobileappbackend/charities/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_charities_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_show',));
                        }

                        // admin_pgzn_mobileappbackend_charities_export
                        if ($pathinfo === '/admin/pgzn/mobileappbackend/charities/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_export',  '_route' => 'admin_pgzn_mobileappbackend_charities_export',);
                        }

                        // admin_pgzn_mobileappbackend_charities_history
                        if (preg_match('#^/admin/pgzn/mobileappbackend/charities/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_charities_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_history',));
                        }

                        // admin_pgzn_mobileappbackend_charities_history_view_revision
                        if (preg_match('#^/admin/pgzn/mobileappbackend/charities/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pgzn_mobileappbackend_charities_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'pgzncharitiesadmin',  '_sonata_name' => 'admin_pgzn_mobileappbackend_charities_history_view_revision',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                        // admin_sonata_user_user_history
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_history',));
                        }

                        // admin_sonata_user_user_history_view_revision
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                        // admin_sonata_user_group_history
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_history',));
                        }

                        // admin_sonata_user_group_history_view_revision
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_history_view_revision',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // sonata_user_admin_security_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                        }

                        // sonata_user_admin_security_check
                        if ($pathinfo === '/admin/login_check') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                        }

                    }

                    // sonata_user_admin_security_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                // get_apps
                if (0 === strpos($pathinfo, '/api/apps') && preg_match('#^/api/apps(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_apps;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_apps')), array (  '_controller' => 'PGZN\\MobileAppBackendBundle\\Controller\\AppController::getAppsAction',  '_format' => NULL,));
                }
                not_get_apps:

                // get_charities
                if (0 === strpos($pathinfo, '/api/charities') && preg_match('#^/api/charities(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_charities;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_charities')), array (  '_controller' => 'PGZN\\MobileAppBackendBundle\\Controller\\CharitiesController::getCharitiesAction',  '_format' => NULL,));
                }
                not_get_charities:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
