<?php
namespace Meska\Lokys;
use Super\Old\Senelis;

class Tevas extends Senelis {

    public function __construct() {
        parent::__construct();
        echo '<h3>Tevo konstruktorius</h3>';
    }

    public function tvarka() {
        echo '<h3>Sutvarkita</h3>';
    }
}