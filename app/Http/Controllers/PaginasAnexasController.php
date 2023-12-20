<?php

namespace App\Http\Controllers;

use App\Models\dashboard_admin;
use App\Models\Menu;
use App\Models\PaginasAnexas;
use App\Models\Submenu;
use App\Models\Submenu2;
use App\Models\Transversal;
use Illuminate\Http\Request;

class PaginasAnexasController extends Controller
{
    public function politicaCronica()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'politica_cronica')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('politicaCronica', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function politicaDistritalSaludAmbiental()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'politica_distrital_salud_ambiental')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('politicaDistritalSaludAmbiental', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function vigilanciaSaludAmbiental()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'vigilancia_salud_ambiental')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('vigilanciaSaludAmbiental', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function participacionCiudadana()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'participacion_ciudadana')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('participacionCiudadana', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function favorables()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'favorables')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('favorables', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function acredited()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'acredited')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('acredited', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function preguntas()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'preguntas')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('preguntas', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }

    public function oficinas()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        $paginaAnexaTemp = PaginasAnexas::where("link_interno", 'oficinas')->get();
        $paginaAnexa = json_decode($paginaAnexaTemp, true);
        return view('oficinas', compact('data', 'menu', 'submenu', 'transversales', 'submenu2', 'paginaAnexa'));
    }
}
