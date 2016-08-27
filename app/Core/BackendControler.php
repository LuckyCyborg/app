<?php
/**
 * BackendController - A backend Controller for the included example Modules.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

namespace App\Core;

use App\Core\Controller as BaseController;


class BackendController extends BaseController
{
    /**
     * The currently used Template.
     *
     * @var string
     */
    protected $template = 'AdminLte';

    /**
     * The currently used Layout.
     *
     * @var string
     */
    protected $layout = 'backend';


    public function __construct()
    {
        parent::__construct();
    }

}
