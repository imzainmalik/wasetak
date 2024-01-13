<?php

use App\Models\AdminPage;
use App\Models\Setting;



function settings()
{
   $setting =  Setting::find(1);
    return $setting;
}

function admin_pages()
{
   $adminPages =  AdminPage::where('is_active',1)->whereNull('parent_id')->get();
    return $adminPages;
}
function admin_inner_pages($id)
{
  
   $adminInnerPages =  AdminPage::where('is_active',1)->where('parent_id', $id)->get();
    return $adminInnerPages;
}



