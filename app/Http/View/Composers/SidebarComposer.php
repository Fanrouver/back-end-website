<?php

namespace App\Http\View\Composers;

use App\Classes\Sidebar;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $pageName = request()->route()->getName();

        $view->with('sidebarMenu', Sidebar::menu());
        $view->with('pageName', $pageName);
    }
}