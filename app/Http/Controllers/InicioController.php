<?php

namespace App\Http\Controllers;

use App\Models\dashboard_admin;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Transversal;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $dataTemp = dashboard_admin ::all();
        $data = json_decode($dataTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        return view("home", compact('data', 'menu', 'submenu', 'transversales'));
    }
    public function notFound()
    {
        return view("notFound");
    }

    public function Favorables()
    {
        return view("favorables");
    }

    public function VentanaEmergente()
    {
     return view("ventanaEmergente");
    }
    public function entornoHogar()
    {
     return view("EntornoHogar");
    }
    public function Establecimientos()
    {
     return view("establecimientos");
    }
    public function Podcast()
    {
     return view("Podcast");
    }
    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
