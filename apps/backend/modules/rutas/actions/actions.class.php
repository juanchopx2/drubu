<?php

/**
 * rutas actions.
 *
 * @package    drubu
 * @subpackage rutas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rutasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->rutaForm = new rutaForm();
  }

 /**
  * Executes crearFormsParadas action
  */
  public function executeCrearFormsParadas(sfWebRequest $request) {
    $paradas = json_decode($request->getPostParameter('paradas'));

    return $this->renderText('{ success: true }');
  }
}
