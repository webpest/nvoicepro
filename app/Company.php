<?php

namespace NvoicePro;

use Illuminate\Database\Eloquent\Model;
use NvoicePro\Product_Service;

class Company extends Model
{
    public function product_and_services(){
        $this->hasMany('Product_Service');
    }
}
