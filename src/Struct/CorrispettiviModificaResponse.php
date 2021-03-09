<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la risposta alla modifica di un corrispettivo.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviModificaResponse
 * @author Matteo Schiona <ms@kiboko.it>
 * @since 1.0
 */
class CorrispettiviModificaResponse extends Response
{
    /**
     * Request Success.
     *
     * @access public
     * @var boolean
     */
    public $success;

    /**
     * Identificativo della registrazione modificata.
     *
     * @access public
     * @var number
     */
    public $new_id;
}
