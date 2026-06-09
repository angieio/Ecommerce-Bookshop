<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Definimos las categorías que ya tenías
        $categorias = [
            [
                'nombre' => 'Ficción',
                'descripcion' => 'Novelas, literatura contemporánea y clásicos inolvidables.',
                'bg_color' => '#FEE2E2',
                'icon_color' => '#EF4444',
                'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>'
            ],
            [
                'nombre' => 'Desarrollo Personal',
                'descripcion' => 'Libros para potenciar tus habilidades, mentalidad y productividad.',
                'bg_color' => '#FEF3C7',
                'icon_color' => '#D97706',
                'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10H12V2z"></path><path d="M12 2a10 10 0 0 1 10 10h-2a8 8 0 0 0-8-8V2z"></path></svg>'
            ]
        ];

        // 2. NUEVO: Definimos el array de libros destacados de prueba
        $librosDestacados = [
            [
                'titulo' => 'El Imperio de los Lobos',
                'autor' => 'Jean-Christophe Grangé',
                'categoria' => 'Ficción / Thriller',
                'precio' => 69.00,
                'portada' => 'https://m.media-amazon.com/images/I/71QlCCNjENL._AC_UF1000,1000_QL80_.jpg'
            ],
            [
                'titulo' => 'Hábitos Atómicos',
                'autor' => 'James Clear',
                'categoria' => 'Desarrollo Personal',
                'precio' => 55.50,
                'portada' => 'https://img3.od-cdn.com/ImageType-100/5822-1/%7B466951F0-BA86-4EC8-B150-2A0417331CF2%7DIMG100.JPG'
            ],
            [
                'titulo' => 'La Sombra del Viento',
                'autor' => 'Carlos Ruiz Zafón',
                'categoria' => 'Ficción / Misterio',
                'precio' => 75.00,
                'portada' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3_DtGa0Kso98OMixPNlo0ZwV5NK9scEl1QQ&s'
            ]
        ];

        // 3. Enviamos AMBAS variables a la vista welcome usando compact()
        return view('welcome', compact('categorias', 'librosDestacados'));
    }
}