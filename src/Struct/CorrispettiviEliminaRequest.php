<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la richiesta per eliminare un corrispettivo.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviEliminaRequest
 * @author Matteo Schiona <ms@kiboko.it>
 * @since 1.0
 */
class CorrispettiviEliminaRequest extends Request
{
    /**
     * Identificativo univoco della registrazione.
     *
     * @access public
     * @var string
     */
    public $id;
}
