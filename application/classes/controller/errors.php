<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alex
 * Date: 6/22/12
 * Time: 6:13 PM
 * To change this template use File | Settings | File Templates.
 */

class Controller_Errors extends Controller
{
    public function action_404()
    {
        $this->request->status = 404;
        $this->request->response = View::factory('errors/404');

    }

}