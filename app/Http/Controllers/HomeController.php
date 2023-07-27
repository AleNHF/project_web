<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageVisit;
use App\Models\User;
use App\Models\Estudiante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //REPORTES VISITAS
        $visits = PageVisit::where('page_slug', 'home')->value('visits');

        $pageVisitas = PageVisit::all();
        $total = $pageVisitas->sum('visits');

        $slugs = $pageVisitas->pluck('page_slug');
        $totalVisits = $pageVisitas->pluck('visits');

        //REPORTES USUARIOS
        $totalUsers = User::count();
        $totalEstudiantes = Estudiante::count();

        //REPORTES CARRERA
        $carreraEconomia = Estudiante::where('carreraInteres', 'Economia')->count();
        $carreraAdministracion = Estudiante::where('carreraInteres', 'Administracion')->count();
        $carreraComercio = Estudiante::where('carreraInteres', 'Comercio')->count();
        $carreraComercial = Estudiante::where('carreraInteres', 'Comercial')->count();
        $carreraFinanciera = Estudiante::where('carreraInteres', 'Financiera')->count();

        //REPORTE COLEGIOS
        $estudiantesCole = Estudiante::select('colegio', \DB::raw('count(*) as total'))
            ->groupBy('colegio')
            ->orderByDesc('total')
            ->limit(25)
            ->get();

        return view('home', compact(
            'visits','slugs','totalVisits',
            'total','totalUsers','totalEstudiantes',
            'carreraEconomia','carreraAdministracion','carreraComercio','carreraComercial','carreraFinanciera',
            'estudiantesCole'
        ));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function game()
    {
        $visits = PageVisit::where('page_slug', 'game')->value('visits');

        return view('game', compact('visits'));
    }
}
