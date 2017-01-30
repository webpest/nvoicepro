<?php

namespace NvoicePro;

use Illuminate\Database\Eloquent\Model;
use NvoicePro\InvoiceItem;

class Invoice extends Model
{
    public function invoiceItems(){
        $this->hasMany('InvoiceItem');
    }
}
