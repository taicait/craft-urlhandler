<?php
/**
 * URL Handler plugin for Craft CMS 3.x
 *
 * make URL handler
 *
 * @link      https://undigital.com.au/
 * @copyright Copyright (c) 2021 UnDigital
 */

namespace urlhandler\urlhandler\controllers;

use urlhandler\urlhandler\UrlHandler;

use Craft;
use craft\web\Controller;

/**
 * @author    UnDigital
 * @package   UrlHandler
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the DefaultController actionIndex() method';

        return $result;
    }

    /**
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the DefaultController actionDoSomething() method';

        return $result;
    }
}
