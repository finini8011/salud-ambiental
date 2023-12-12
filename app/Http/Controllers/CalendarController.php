<?php

namespace App\Http\Controllers;

use App\Models\dashboard_admin;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Submenu2;
use App\Models\Transversal;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        return view("calendario/index", compact('data', 'menu', 'submenu', 'transversales', 'submenu2'));
    }
}
