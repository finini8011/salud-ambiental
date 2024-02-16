<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\dashboard_admin;
use App\Models\ImagenesCalendario;
use App\Models\Menu;
use App\Models\Pagina;
use App\Models\Submenu;
use App\Models\Submenu2;
use App\Models\Transversal;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeAdminController extends Controller
{
    public function homeAdmin()
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
        return view('homeAdmin', compact('data', 'menu', 'submenu', 'transversales', 'submenu2'));
    }

    public function inicioAdmin(Request $request)
    {
        /* User::create([
            'name' => "Administrador",
            'email' => "usuario@correo.com",
            'password' => Hash::make("12345!qaz")
        ]); */
        $credentials = [
            "email" => $request->email,
            "password" => $request->pass
        ];
        if(Auth::attempt($credentials) || Auth::user()) {
            $extension = '';
            return view('inicioAdmin', compact('extension'));
        } else {
            return redirect('homeAdmin');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('homeAdmin');
    }

    public function dashboardAdmin(Request $request)
    {
        $extension = '';
        return view('dashboardAdmin', compact('extension'));
    }

    public function loadView(Request $request, $id)
    {
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        switch ($id) {
            case 'rd':
                $vista = 'redesSociales';
                $extension = 'rd';
                break;

            case 'cu':
                $vista = 'carruselUno';
                $extension = 'cu';
                break;

            case 'cd':
                $vista = 'carruselDos';
                $extension = 'cd';
                break;

            case 'in':
                $vista = 'indicadores';
                $extension = 'in';
                break;

            case 'bo':
                $vista = 'botones';
                $extension = 'bo';
                break;

            case 'ba':
                $vista = 'banner';
                $extension = 'ba';
                break;

            case 'bd':
                $vista = 'botonesDerecho';
                $extension = 'bd';
                break;

            case 'br':
                $vista = 'botonesRecoleccion';
                $extension = 'br';
                break;

            case 'iv':
                $vista = 'iframe';
                $extension = 'iv';
                break;

            case 'tw':
                $vista = 'twitter';
                $extension = 'tw';
                break;

            case 'mu':
                $vista = 'modalUno';
                $extension = 'mu';
                break;

            case 'md':
                $vista = 'modalDos';
                $extension = 'md';
                break;

            case 'mt':
                $vista = 'modalTres';
                $extension = 'mt';
                break;

            case 'mc':
                $vista = 'modalCuatro';
                $extension = 'mc';
                break;

            case 'mci':
                $vista = 'modalCinco';
                $extension = 'mci';
                break;

            case 'he':
                $vista = 'headerAdmin';
                $extension = 'he';
                break;

            case 'fo':
                $vista = 'footerAdmin';
                $extension = 'fo';
                break;

            default:
                $vista = 'homeAdmin';
                $extension = '';
                $data = [];
                break;
        }
        return view($vista, compact('data', 'extension'));
    }

    public function saveDatos($id, $info)
    {
        $dashboardAdmin = dashboard_admin::find($id);
        $dashboardAdmin->datos = $info;
        $dashboardAdmin->save();
    }

    public function saveFile(Request $request)
    {
        foreach ($request->request as $key => $value) {
            if($key != '_token') {
                $arrayKey = explode("-", $key);
                $this->saveDatos($arrayKey[1], $value);
            }
        }
        foreach ($request->files as $key => $value) {
            $originalName = $value->getClientOriginalName();
            move_uploaded_file($value,  'img/' . $originalName);
            $arrayKey2 = explode("-", $key);
            $this->saveDatos($arrayKey2[1], 'img/' . $originalName);
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function menuAdmin()
    {
        $extension = '';
        return view('menuAdmin', compact('extension'));
    }

    public function archivosAdmin()
    {
        $extension = '';
        return view('archivosAdmin', compact('extension'));
    }

    public function menuPrincipalAdmin(Request $request)
    {
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $extension = '';
        return view('menuPrincipalAdmin', compact('data', 'menu', 'extension'));
    }

    public function saveMenu(Request $request)
    {
        foreach ($request->request as $key => $value) {
            if($key != '_token') {
                $menus = Menu::find($key);
                $menus->nombre = $value;
                $menus->save();
            }
        }
        foreach ($request->files as $key => $value) {
            $originalName = $value->getClientOriginalName();
            move_uploaded_file($value,  'img/' . $originalName);
            $menus = Menu::find($key);
            $menus->imagen = 'img/' . $originalName;
            $menus->save();
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function submenuAdmin(Request $request)
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $extension = '';
        return view('submenuAdmin', compact('menu', 'submenu', 'extension'));
    }

    public function submenu2Admin(Request $request)
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $extension = '';
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        return view('submenu2Admin', compact('menu', 'submenu', 'extension', 'submenu2'));
    }

    public function editSubmenu(Request $request, $id)
    {
        if (!$submenu = Submenu::where("id", $request->input('id'))->first()) {
            $submenu = new Submenu();
            $submenu->menu_id = $id;
            $submenu->nombre = $request->input('nombre');
            $submenu->link_interno = $request->input('link_interno') == '' ? 'url_test' : $request->input('link_interno');
            $submenu->link_externo = $request->input('link_externo');
            $submenu->save();
            return [Submenu::where("menu_id", $id)->get(), 0];
        }
        $submenu->nombre = $request->input('nombre');
        $submenu->link_interno = $request->input('link_interno') == '' ? 'url_test' : $request->input('link_interno');
        $submenu->link_externo = $request->input('link_externo');
        $submenu->save();
        return [$submenu, 1];
    }

    public function editSubmenu2(Request $request)
    {
        if (!$submenu = Submenu2::where("id", $request->input('id'))->first()) {
            $submenu = new Submenu2();
            $submenu->submenu_id = $request->input('submenu_id');
            $submenu->nombre = $request->input('nombre');
            $submenu->link_interno = $request->input('link_interno') == '' ? 'url_test' : $request->input('link_interno');
            $submenu->link_externo = $request->input('link_externo');
            $submenu->save();
            return [Submenu2::all(), 0];
        }
        $submenu->submenu_id = $request->input('submenu_id');
        $submenu->nombre = $request->input('nombre');
        $submenu->link_interno = $request->input('link_interno') == '' ? 'url_test' : $request->input('link_interno');
        $submenu->link_externo = $request->input('link_externo');
        $submenu->save();
        return [$submenu, 1];
    }

    public function transversalesAdmin()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $transversalesTemp = Transversal::all();
        $transversales = json_decode($transversalesTemp, true);
        $extension = '';
        return view('transversalesAdmin', compact('menu', 'transversales', 'extension'));
    }

    public function ModificarTransversal(Request $request, $id)
    {
        $transversalesTemp = Transversal::where("id",$id)->first();
        $transversales = json_decode($transversalesTemp, true);
        $extension = '';
        return view('modificarTransversal', compact('transversales', 'id', 'extension'));
    }

    public function saveTransversales(Request $request)
    {
        $id = $request->idTransversales;
        $paginas = $id != 0 ? Transversal::find($id) : new Transversal();
        $paginas->titulo = $request->titulo;
        $paginas->link_interno = $request->link_interno;
        $paginas->banner = $request->banner;
        $paginas->link_banner = $request->link_banner;
        $paginas->cuerpo = $request->cuerpo;
        $paginas->activo = $request->activo;
        $paginas->save();

        foreach ($request->files as $key => $value) {
            $originalName = $value->getClientOriginalName();
            move_uploaded_file($value,  'img/' . $originalName);
            $paginas = $id != 0 ? Transversal::find($id) : Transversal::find($paginas->id);
            $paginas->$key = 'img/' . $originalName;
            $paginas->save();
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function loadViewMenu(Request $request, $id, $menuId)
    {
        $coloresMenus = [
            ["aire", "lineaAire", "colorAire"],
            ["alimentos", "lineaAlimentos", "colorAlimentos"],
            ["agua", "lineaAgua", "colorAgua"],
            ["cambioC", "lineaCambioC", "colorCambioC"],
            ["espacio", "lineaEspacio", "colorEspacio"],
            ["colorMedicamentos", "lineaMedicamentos", "colorMedicamentos"],
            ["colorSeguridadquimica", "lineaQuimica", "colorSeguridadquimica"],
            ["colorETOZ", "lineaETOZ", "colorETOZ"]
        ];
        $color = $coloresMenus[$menuId - 1];
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $pagina = Pagina::where("link_interno", $id)->first();
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        return view('plantillaGeneral', compact('pagina', 'menu', 'submenu', 'data', 'transversales', 'menuId', 'submenu2', 'color'));
    }

    public function loadViewMenuTransversal(Request $request, $id, $menuId)
    {
        $coloresMenus = [
            ["aire", "lineaAire", "colorAire"],
            ["alimentos", "lineaAlimentos", "colorAlimentos"],
            ["agua", "lineaAgua", "colorAgua"],
            ["cambioC", "lineaCambioC", "colorCambioC"],
            ["espacio", "lineaEspacio", "colorEspacio"],
            ["colorMedicamentos", "lineaMedicamentos", "colorMedicamentos"],
            ["colorSeguridadquimica", "lineaQuimica", "colorSeguridadquimica"],
            ["colorETOZ", "lineaETOZ", "colorETOZ"]
        ];
        $color = $coloresMenus[$menuId - 1];
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $submenuTemp1 = Submenu::join('menus','menu_id', '=', 'menus.id')->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'submenus.menu_id', 'menus.nombre as NombreMenu')->get();
        $submenu = json_decode($submenuTemp1, true);
        $dataTemp = dashboard_admin::all();
        $data = json_decode($dataTemp, true);
        $transveralesTemp = Transversal::where("activo", 1)->get();
        $transversales = json_decode($transveralesTemp, true);
        $transveralId = Transversal::where("activo", 1)->where("link_interno", $id)->first();
        $submenu2Temp = Submenu2::all();
        $submenu2 = json_decode($submenu2Temp, true);
        return view('plantillaTransversal', compact('menu', 'submenu', 'data', 'transversales', 'menuId', 'transveralId', 'submenu2', 'color'));
    }

    public function paginasAdmin()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $paginasTemp = Pagina::all(); //join('menus','menu_id', '=', 'menus.id')->where("menu_id", 1)->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'menus.nombre as NombreMenu')->get();
        $paginas = json_decode($paginasTemp, true);
        $extension = '';
        return view('paginasAdmin', compact('menu', 'paginas', 'extension'));
    }

    public function subirArchivosAdmin()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $archivosTemp = Archivo::all(); //join('menus','menu_id', '=', 'menus.id')->where("menu_id", 1)->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'menus.nombre as NombreMenu')->get();
        $archivos = json_decode($archivosTemp, true);
        $extension = '';
        return view('subirArchivosAdmin', compact('menu', 'archivos', 'extension'));
    }

    public function subirImagenesCalendarioAdmin()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $archivosTemp = Archivo::all(); //join('menus','menu_id', '=', 'menus.id')->where("menu_id", 1)->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'menus.nombre as NombreMenu')->get();
        $archivos = json_decode($archivosTemp, true);
        $extension = '';
        return view('subirImagenesCalendario', compact('menu', 'archivos', 'extension'));
    }

    public function crearModificarPagina(Request $request, $id)
    {
        if ($id == 0) {
            $extension = '';
            $pagina = [];
            return view('crearModificarPagina', compact('pagina', 'id', 'extension'));
        } else {
            $paginaTemp = Pagina::where("id",$id)->first();
            $pagina = json_decode($paginaTemp, true);
            $extension = '';
            return view('crearModificarPagina', compact('pagina', 'id', 'extension'));
        }
    }

    public function savePagina(Request $request)
    {
        $id = $request->idPagina;
        $paginas = $id != 0 ? Pagina::find($id) : new Pagina();
        $paginas->patron = $request->patron;
        $paginas->titulo = $request->titulo;
        $paginas->link_interno = $request->link_interno;
        $paginas->link_banner = $request->link_banner;
        $paginas->cuerpo = $request->cuerpo;
        $paginas->save();

        foreach ($request->files as $key => $value) {
            $originalName = $value->getClientOriginalName();
            move_uploaded_file($value,  'img/' . $originalName);
            $paginas = $id != 0 ? Pagina::find($id) : Pagina::find($paginas->id);
            $paginas->$key = 'img/' . $originalName;
            $paginas->save();
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function saveArchivo(Request $request)
    {
        try {
            $file = $request->file;
            $originalName = $file->getClientOriginalName();
            $path = Storage::putFile('uploads', $file);
            $fileName = basename(Storage::url($path));
            $archivos = new Archivo();
            $archivos->descripcion = $request->descripcion;
            $archivos->filename = $fileName;
            $archivos->originalName = $originalName;
            $archivos->save();
        } catch (Exception $e) {
            return back()->with('mensaje', $e->getMessage());
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function saveImagen(Request $request)
    {
        try {
            $file = $request->file;
            $originalName = $file->getClientOriginalName();
            move_uploaded_file($file,  'img/calendario/' . $originalName);
            $imagen = new ImagenesCalendario();
            $imagen->descripcion = $request->descripcion;
            $imagen->nombre_archivo = $originalName;
            $imagen->save();
        } catch (Exception $e) {
            return back()->with('mensaje', $e->getMessage());
        }
        return back()->with('mensaje', 'Datos guardados');
    }

    public function deleteArchivo(Request $request, $id)
    {
        $archivo = Archivo::find($id);
        $archivo->delete();
        return back()->with('mensaje', 'Archivo eliminado');
    }

    public function downloadFile(request $request, $archivo)
    {
        if(!$datoArchivo = Archivo::where("originalName",$archivo)->first()) {
            return back()->with('mensaje', 'Archivo no existente');
        }
        $nombreArchivo = $datoArchivo->filename;
        $file = storage_path('app\uploads\\' . $nombreArchivo);
        return response()->download($file, $archivo);
    }

    public function calendarioAdmin()
    {
        $menuTemp = Menu::all();
        $menu = json_decode($menuTemp, true);
        $archivosTemp = Archivo::all(); //join('menus','menu_id', '=', 'menus.id')->where("menu_id", 1)->select('submenus.id','submenus.nombre', 'submenus.link_interno', 'submenus.link_externo', 'menus.nombre as NombreMenu')->get();
        $archivos = json_decode($archivosTemp, true);
        $extension = '';
        return view('calendarioAdmin', compact('menu', 'archivos', 'extension'));
    }

    /*
    public function loadPagina(Request $request, $id)
    {
        $paginaTemp = Pagina::where("id",$id)->first();
        $pagina = json_decode($paginaTemp, true);
        return $pagina;
    }

    public function aireAdmin()
    {
        $extension = '';
        return view('aireAdmin', compact('extension'));
    } */

}
