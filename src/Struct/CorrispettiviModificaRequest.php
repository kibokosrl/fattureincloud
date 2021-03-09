<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la richiesta di creazione di un nuovo corrispettivi.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviModificaRequest
 * @author Matteo Schiona <ms@kiboko.it>
 * @since 1.0
 */
class CorrispettiviModificaRequest extends Request
{
    /**
     * Identificativo univoco del registrazione.
     *
     * @access public
     * @var string
     */
    public $id;

    /**
     * Tipologia dei documenti da registrare (ricevute, scontrini).
     *
     * @access public
     * @var string
     */
    public $tipo;

    /**
     * (Opzionale) Data della registrazione.
     *
     * @access public
     * @var date
     */
    public $data;

    /**
     * (Opzionale) Specifica se attribuire in modo automatico il protocollo sulla base della numerazione presente nel parametro "protocollo".
     *
     * @access public
     * @var string
     */
    public $protocollo_auto;

    /**
     * (Opzionale) Numero protocollo e numerazione del documento.
     *
     * @access public
     * @var string
     */
    public $protocollo;

    /**
     * (Opzionale) Descrizione.
     *
     * @access public
     * @var string
     */
    public $desc;

    /**
     * (Opzionale) Centro di ricavo.
     *
     * @access public
     * @var string
     */
    public $centro_ricavo;

    /**
     * Conto di saldo.
     *
     * @access public
     * @var string
     */
    public $metodo;

    /**
     * (Opzionale) Specifica se gli importi specificati in "lista_righe" sono comprensivi di iva.
     *
     * @access public
     * @var boolean
     */
    public $importi_ivati;

    /**
     * (Opzionale) Lista delle righe della registrazione.
     *
     * @access public
     * @var Corrispettivi\Riga\Nuovo[] Lista delle righe della registrazione
     */
    public $lista_righe;
}
