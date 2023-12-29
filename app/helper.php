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
   $adminPages =  AdminPage::whereNull('parent_id')->get();
    return $adminPages;
}
function admin_inner_pages($id)
{
  
   $adminInnerPages =  AdminPage::where('parent_id', $id)->get();
    return $adminInnerPages;
}



