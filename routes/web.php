<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// RUTA PRINCIPAL DE INICIO (UNIFICADA)
// ==========================================
Route::get('/', function () {
    
    // 1. Array de Categorías (Ya las tenías configuradas)
    $categorias = [
        [
            'nombre' => 'Infantil',
            'descripcion' => 'Cuentos mágicos para los más pequeños',
            'bg_color' => '#FCEEE9', 
            'icon_color' => '#D96B43', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>'
        ],
        [
            'nombre' => 'Fantasía',
            'descripcion' => 'Mundos imaginarios y aventuras épicas',
            'bg_color' => '#F9EFE2', 
            'icon_color' => '#C48A43', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'
        ],
        [
            'nombre' => 'Ciencia Ficción',
            'descripcion' => 'Viajes al futuro y nuevas realidades',
            'bg_color' => '#F7EBE1', 
            'icon_color' => '#A35C37', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'
        ],
        [
            'nombre' => 'Romance',
            'descripcion' => 'Historias de amor que emocionan',
            'bg_color' => '#FBEBEA', 
            'icon_color' => '#C95B53', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>'
        ],
        [
            'nombre' => 'Desarrollo Personal',
            'descripcion' => 'Crece y transforma tu vida',
            'bg_color' => '#F4EDE4', 
            'icon_color' => '#8E7355', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>'
        ],
        [
            'nombre' => 'Académicos',
            'descripcion' => 'Conocimiento para tu formación',
            'bg_color' => '#FAF0DD', 
            'icon_color' => '#D09A29', 
            'svg' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/></svg>'
        ],
    ];

    // 2. NUEVO: Array de Libros Destacados (Necesario para el @foreach de la vista)
// 2. Array de Libros Destacados (Actualizado con los 6 libros de las imágenes)
    $librosDestacados = [
        [
            'titulo' => 'Cien Años de Soledad',
            'autor' => 'Gabriel García Márquez',
            'categoria' => 'Ficción Literaria',
            'precio' => 44.25,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9786124262784_ef8rc4mqeziackm5.jpg?width=700&height=1050&store=default&image-type=image'
        ],
        [
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'categoria' => 'Infantil y Juvenil',
            'precio' => 39.90,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9786124516481_p9welpyfvqn0uqog.jpg?width=700&height=1050&store=default&image-type=small_image'
        ],
        [
            'titulo' => 'Hábitos Atómicos',
            'autor' => 'James Clear',
            'categoria' => 'Autoayuda y Desarrollo Personal',
            'precio' => 44.93,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9786125027580_m5jqihtccdatavfk.jpg?width=700&height=1050&store=default&image-type=image'
        ],
        [
            'titulo' => 'Sapiens: De Animales a Dioses',
            'autor' => 'Yuval Noah Harari',
            'categoria' => 'Historia y Ciencias Sociales',
            'precio' => 51.75,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9786287641549_12xcbvi1sd1hj8yi.png?width=700&height=1050&store=default&image-type=image'
        ],
        [
            'titulo' => 'La Sombra del Viento',
            'autor' => 'Carlos Ruiz Zafón',
            'categoria' => 'Ficción Literaria',
            'precio' => 52.43,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9786124181276_f2rew5x4mjl8gnua.jpg?width=700&height=1050&store=default&image-type=image'
        ],
        [
            'titulo' => 'Harry Potter y la Piedra Filosofal',
            'autor' => 'J.K. Rowling',
            'categoria' => 'Infantil y Juvenil',
            'precio' => 149.25,
            'portada' => 'https://www.crisol.com.pe/media/catalog/product/9/7/9788418174070_8d1gp7kb3jqm0eph.jpg?width=700&height=1050&store=default&image-type=small_image'
        ]
    ];

    // 3. Enviamos AMBAS variables juntas a la vista
    return view('welcome', compact('categorias', 'librosDestacados'));
});

// ==========================================
// RUTAS DE MARCADOR DE POSICIÓN
// ==========================================
Route::get('/libros', function () { return 'Listado de libros'; })->name('libros.index');
Route::get('/novedades', function () { return 'Libros novedosos'; })->name('libros.novedades');
Route::get('/populares', function () { return 'Libros populares'; })->name('libros.populares');
Route::get('/buscar', function () { return 'Resultados de búsqueda'; })->name('libros.buscar');
Route::get('/perfil', function () { return 'Perfil de usuario'; })->name('perfil');
Route::get('/carrito', function () { return 'Carrito de compras'; })->name('carrito');