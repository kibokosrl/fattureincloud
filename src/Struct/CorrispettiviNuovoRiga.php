<?php

namespace Svbk\FattureInCloud\Struct;

/**
 * Rappresenta la richiesta per la creazione di un nuovo articolo fattura.
 *
 * @package fattureincloud
 * @subpackage CorrispettiviNuovoRiga
 * @author Brando Meniconi <b.meniconi@silverbackstudio.it>
 * @since 1.0
 */
class CorrispettiviNuovoRiga extends Request
{
    /**
     * opzionale. Categoria del prodotto (utilizzata per il piano dei conti).
     *
     * @access public
     * @var string
     */
    public $categoria;

    /**
     * Importo della riga.
     *
     * @access public
     * @var double
     */
    public $importo;

    /**
     * . Codice aliquota IVA (ottenibili con il parametro "lista_iva" della
     * funzione "/info/account").
     *
     * @access public
     * @var number
     */
    public $cod_iva;
}
