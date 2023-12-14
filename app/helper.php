<?php

use App\Models\Setting;



function settings()
{
   $setting =  Setting::find(1);
    return $setting;
}