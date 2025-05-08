<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class PortafolioController extends Controller
{
    public function index() {
        return view('inicio');
    }

    public function sobreMi() {
        return view('sobre-mi');
    }

    public function proyectos() {
        $proyectos = Proyecto::all();
        return view('proyectos', compact('proyectos'));
    }

    public function contacto() {
        return view('contacto');
    }

    public function enviarContacto(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);
        return back()->with('success', 'Mensaje enviado');
    }
}
