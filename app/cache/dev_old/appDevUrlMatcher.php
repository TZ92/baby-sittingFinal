<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // pidev_graphe_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_graphe_homepage')), array (  '_controller' => 'Pidev\\GrapheBundle\\Controller\\DefaultController::indexAction',));
        }

        // _graphePie
        if ($pathinfo === '/pie') {
            return array (  '_controller' => 'Pidev\\GrapheBundle\\Controller\\GrapheController::chartPieAction',  '_route' => '_graphePie',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // _grapheHistogramme
            if ($pathinfo === '/histogramme') {
                return array (  '_controller' => 'Pidev\\GrapheBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => '_grapheHistogramme',);
            }

            // pidev_user_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_user_homepage')), array (  '_controller' => 'Pidev\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            // homeadmin
            if ($pathinfo === '/back/home') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ReclamationController::noteAction',  '_route' => 'homeadmin',);
            }

            // ajoutAdmin
            if ($pathinfo === '/back/ajout') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\AdministrateurController::ajoutAction',  '_route' => 'ajoutAdmin',);
            }

            // updatAdmin
            if ($pathinfo === '/back/updat') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\AdministrateurController::updatAction',  '_route' => 'updatAdmin',);
            }

            // deleteAdmin
            if ($pathinfo === '/back/delete') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\AdministrateurController::deleteAction',  '_route' => 'deleteAdmin',);
            }

            // listeAdmin
            if ($pathinfo === '/back/Liste') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\AdministrateurController::ListeAction',  '_route' => 'listeAdmin',);
            }

            // rechercheAdmin
            if ($pathinfo === '/back/recherche') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\AdministrateurController::rechercheAction',  '_route' => 'rechercheAdmin',);
            }

            // ajoutBaby
            if ($pathinfo === '/back/baby/ajoutb') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::ajoutAction',  '_route' => 'ajoutBaby',);
            }

            // updateBaby
            if (0 === strpos($pathinfo, '/back/updateb') && preg_match('#^/back/updateb(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateBaby')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::updateAction',));
            }

            // deleteBaby
            if (0 === strpos($pathinfo, '/back/deleteb') && preg_match('#^/back/deleteb/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteBaby')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/back/admin')) {
                // listeBaby
                if ($pathinfo === '/back/admin/listeb') {
                    return array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::listeAction',  '_route' => 'listeBaby',);
                }

                // showBaby
                if (0 === strpos($pathinfo, '/back/admin/show') && preg_match('#^/back/admin/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'showBaby')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::showAction',));
                }

            }

            // rechercheBaby
            if ($pathinfo === '/back/rechb') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::rechercheAction',  '_route' => 'rechercheBaby',);
            }

            // profilBaby
            if ($pathinfo === '/back/admin/profil') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::profileAction',  '_route' => 'profilBaby',);
            }

            // generateBaby
            if ($pathinfo === '/back/generateBaby') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\BabysitterController::generateBabyAction',  '_route' => 'generateBaby',);
            }

            // ajoutparent
            if ($pathinfo === '/back/ajoutp') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::indexAction',  '_route' => 'ajoutparent',);
            }

            // parents_show
            if (0 === strpos($pathinfo, '/back/showp') && preg_match('#^/back/showp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parents_show')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::showAction',));
            }

            // parents_update
            if (0 === strpos($pathinfo, '/back/editp') && preg_match('#^/back/editp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parents_update')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::editAction',));
            }

            // parents_delete
            if (0 === strpos($pathinfo, '/back/delete') && preg_match('#^/back/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parents_delete')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::deleteAction',));
            }

            // parents_new
            if ($pathinfo === '/back/new') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::newAction',  '_route' => 'parents_new',);
            }

            // generateParent
            if ($pathinfo === '/back/generateParent') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ParentsController::generateParentAction',  '_route' => 'generateParent',);
            }

            // listeReclamation
            if ($pathinfo === '/back/listrec') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ReclamationController::listAction',  '_route' => 'listeReclamation',);
            }

            // deleteReclamation
            if (0 === strpos($pathinfo, '/back/deleterec') && preg_match('#^/back/deleterec/(?P<idreclamation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteReclamation')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ReclamationController::deleteAction',));
            }

            // pidevback_ajout
            if ($pathinfo === '/back/ajoutService') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ServiceController::addServiceAction',  '_route' => 'pidevback_ajout',);
            }

            // pidevback_delete
            if (0 === strpos($pathinfo, '/back/supprimerService') && preg_match('#^/back/supprimerService(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidevback_delete')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ServiceController::deleteServiceAction',));
            }

            // pidevback_update
            if (0 === strpos($pathinfo, '/back/updateService') && preg_match('#^/back/updateService(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidevback_update')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\ServiceController::updateServiceAction',));
            }

            // pidevback_listCategories
            if ($pathinfo === '/back/listeCategories') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\CategorieController::listCategoriesAction',  '_route' => 'pidevback_listCategories',);
            }

            // pidevback_ajoutCategorie
            if ($pathinfo === '/back/ajoutCategorie') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\CategorieController::addCategorieAction',  '_route' => 'pidevback_ajoutCategorie',);
            }

            // pidevback_deleteCategorie
            if (0 === strpos($pathinfo, '/back/supprimerCategorie') && preg_match('#^/back/supprimerCategorie(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidevback_deleteCategorie')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\CategorieController::deleteCategorieAction',));
            }

            // pidevback_updateCategorie
            if (0 === strpos($pathinfo, '/back/updateCategorie') && preg_match('#^/back/updateCategorie(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidevback_updateCategorie')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\CategorieController::updateCategorieAction',));
            }

            if (0 === strpos($pathinfo, '/back/liste')) {
                // pidevback_list
                if ($pathinfo === '/back/listeServices') {
                    return array (  '_controller' => 'Pidev\\backBundle\\Controller\\ServiceController::listServicesAction',  '_route' => 'pidevback_list',);
                }

                // listEvenement
                if ($pathinfo === '/back/listeven') {
                    return array (  '_controller' => 'Pidev\\backBundle\\Controller\\EvenementController::listAction',  '_route' => 'listEvenement',);
                }

            }

            // ajoutEvenement
            if ($pathinfo === '/back/addeven') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\EvenementController::ajoutAction',  '_route' => 'ajoutEvenement',);
            }

            // deleteEvenement
            if (0 === strpos($pathinfo, '/back/deleteven') && preg_match('#^/back/deleteven/(?P<idevenement>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteEvenement')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\EvenementController::deleteAction',));
            }

            // updateEvenement
            if (0 === strpos($pathinfo, '/back/update') && preg_match('#^/back/update/(?P<idevenement>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateEvenement')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\EvenementController::updateAction',));
            }

            // ajoutGarderie
            if ($pathinfo === '/back/addgard') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\GarderieController::ajoutAction',  '_route' => 'ajoutGarderie',);
            }

            // listGarderie
            if ($pathinfo === '/back/listegard') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\GarderieController::listAction',  '_route' => 'listGarderie',);
            }

            // deleteGarderie
            if (0 === strpos($pathinfo, '/back/deletegard') && preg_match('#^/back/deletegard/(?P<idgarderie>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteGarderie')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\GarderieController::deleteAction',));
            }

            // ajoutImage
            if ($pathinfo === '/back/ajoutimage') {
                return array (  '_controller' => 'Pidev\\backBundle\\Controller\\EvenementController::uploadAction',  '_route' => 'ajoutImage',);
            }

            // updateGarderie
            if (0 === strpos($pathinfo, '/back/updategard') && preg_match('#^/back/updategard/(?P<idgarderie>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateGarderie')), array (  '_controller' => 'Pidev\\backBundle\\Controller\\GarderieController::updateAction',));
            }

        }

        if (0 === strpos($pathinfo, '/front')) {
            // pidev_front_homepage
            if ($pathinfo === '/front/hello') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pidev_front_homepage',);
            }

            // pidev_backBundle_List
            if ($pathinfo === '/front/listOffre') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::listAction',  '_route' => 'pidev_backBundle_List',);
            }

            // pidev_backBundle_generate
            if ($pathinfo === '/front/generate') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::generatePdfAction',  '_route' => 'pidev_backBundle_generate',);
            }

            // pidev_backBundle_add
            if ($pathinfo === '/front/addOffre') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::ajoutAction',  '_route' => 'pidev_backBundle_add',);
            }

            // pidev_backBundle_delete
            if (0 === strpos($pathinfo, '/front/deleteOffre') && preg_match('#^/front/deleteOffre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_backBundle_delete')), array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::deleteAction',));
            }

            // Update_Offre
            if (0 === strpos($pathinfo, '/front/UpdateOffre') && preg_match('#^/front/UpdateOffre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Update_Offre')), array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::updateAction',));
            }

            // pidevFront_list
            if ($pathinfo === '/front/listeServices') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\ServiceController::listServicesAction',  '_route' => 'pidevFront_list',);
            }

            // pidevFront_choisir
            if (0 === strpos($pathinfo, '/front/choisirFront') && preg_match('#^/front/choisirFront(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidevFront_choisir')), array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\ServiceParentController::choisirServiceAction',));
            }

            // pdf_Offre2
            if (0 === strpos($pathinfo, '/front/pdf2') && preg_match('#^/front/pdf2/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf_Offre2')), array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\OffreMissionController::helloAction',));
            }

            if (0 === strpos($pathinfo, '/front/up')) {
                // my_image
                if ($pathinfo === '/front/up2') {
                    return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\ImageController::uploadAction',  '_route' => 'my_image',);
                }

                // my_image_route
                if (preg_match('#^/front/up/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_route')), array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\ImageController::photoAction',));
                }

            }

            // list
            if ($pathinfo === '/front/list') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\RechercheController::listeAction',  '_route' => 'list',);
            }

            // rech
            if ($pathinfo === '/front/rech') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\RechercheController::rechercheAction',  '_route' => 'rech',);
            }

            // listeGarderie
            if ($pathinfo === '/front/listegarderie') {
                return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\GarderieController::listAction',  '_route' => 'listeGarderie',);
            }

            if (0 === strpos($pathinfo, '/front/baby')) {
                // profilBabyFront
                if ($pathinfo === '/front/baby/profil') {
                    return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\BabysitterController::profileAction',  '_route' => 'profilBabyFront',);
                }

                // ajoutBabyFront
                if ($pathinfo === '/front/baby/ajoutbaby') {
                    return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\BabysitterController::ajoutAction',  '_route' => 'ajoutBabyFront',);
                }

                // listeBabyFront
                if ($pathinfo === '/front/baby/listeb') {
                    return array (  '_controller' => 'Pidev\\FrontBundle\\Controller\\BabysitterController::listeAction',  '_route' => 'listeBabyFront',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
