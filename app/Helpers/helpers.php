<?php
   
use Carbon\Carbon;
use App\Models\Contactinfo;
use App\Models\About;

if (! function_exists('contactinfo')) {
    function Contactinfo()
    {
        return Contactinfo::first();
    }
}

if (! function_exists('aboutus')) {
    function aboutus()
    {
        return About::first();
    }
}