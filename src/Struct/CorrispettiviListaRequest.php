<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la richiesta la lista dei corrispettivi.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviListaRequest
 * @author Matteo Schiona <ms@kiboko.it>
 * @since 1.0
 */
class CorrispettiviListaRequest extends Request
{
    /**
     * Anno di riferimento.
     *
     * @access public
     * @var integer
     */
    public $anno;

    /**
     * Tipo di registrazione da cercare ricevute o spese.
     *
     * @access public
     * @var string
     */
    public $tipo;

    /**
     * Data di inizio (Opzionale).
     *
     * @access date
     * @var string
     */
    public $data_inizio;

    /**
     * Data di fine (Opzionale).
     *
     * @access date
     * @var string
     */
    public $data_fine;

    /**
     * Identificativo univoco della registrazione. (opzionale).
     *
     * @access public
     * @var string
     */
    public $id;
}
