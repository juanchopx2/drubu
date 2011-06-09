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
   * Executes guardarRuta action
   *
   * @param sfRequest $request A request object
   */
  public function executeGuardarRutas(sfWebRequest $request) {
    $infoRuta = json_decode($request->getPostParameter('paradas'));

    $ruta = new Ruta();
    $ruta->setNombreRuta($infoRuta['nombre']);
    #$ruta->save();

    return $this->renderText('{ success: true }');
  }
}
