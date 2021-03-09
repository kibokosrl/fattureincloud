<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la risposta alla lista di corrispettivi.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviNuovoRequest
 * @author Matteo Schiona <ms@kiboko.it>
 * @since 1.0
 */
class CorrispettiviListaResponse extends Response
{
    /**
     * Request Success.
     *
     * @access public
     * @var boolean
     */
    public $success;

    /**
     * Identificativo del documento creato.
     *
     * @access public
     * @var array CorrispettiviDetailed
     */
    public $lista_corrispettivi;
}
