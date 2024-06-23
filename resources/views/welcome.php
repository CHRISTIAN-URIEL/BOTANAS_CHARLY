<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Botanas Charly</title>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="shortcut icon" href="IMGCHARLY/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <header>
        <h1>Bienvenido a Botanas Charly</h1>
    </header>
    <main>
        <section class="product-cards">
            <div class="card">
                <img src="IMGCHARLY/CHURROS.png" alt="Churros">
                <h2>Churros</h2>
                <p>Precio Mayoreo: $100</p>
                <p>Precio Menudeo: $120</p>
                <input type="number" value="1" min="1">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i> Agregar al carrito</button>
                <button class="buy-now"><i class="fas fa-shopping-bag"></i> Comprar ahora</button>
            </div>
            <div class="card">
                <img src="IMGCHARLY/MIX.png" alt="Mix de Cacahuates">
                <h2>Mix de Cacahuates</h2>
                <p>Precio Mayoreo: $90</p>
                <p>Precio Menudeo: $110</p>
                <input type="number" value="1" min="1">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i> Agregar al carrito</button>
                <button class="buy-now"><i class="fas fa-shopping-bag"></i> Comprar ahora</button>
            </div>
            <div class="card">
                <img src="IMGCHARLY/MOVIEPOPS.png" alt="Movie Pops">
                <h2>Movie Pops</h2>
                <p>Precio Mayoreo: $80</p>
                <p>Precio Menudeo: $100</p>
                <input type="number" value="1" min="1">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i> Agregar al carrito</button>
                <button class="buy-now"><i class="fas fa-shopping-bag"></i> Comprar ahora</button>
            </div>
            <div class="card">
                <img src="IMGCHARLY/SEMILLAS.png" alt="Semillas">
                <h2>Semillas</h2>
                <p>Precio Mayoreo: $70</p>
                <p>Precio Menudeo: $90</p>
                <input type="number" value="1" min="1">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i> Agregar al carrito</button>
                <button class="buy-now"><i class="fas fa-shopping-bag"></i> Comprar ahora</button>
            </div>
            <div class="card">
                <img src="IMGCHARLY/ESPAÑOL.png" alt="Cacahuate Español">
                <h2>Cacahuate Español</h2>
                <p>Precio Mayoreo: $85</p>
                <p>Precio Menudeo: $105</p>
                <input type="number" value="1" min="1">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i> Agregar al carrito</button>
                <button class="buy-now"><i class="fas fa-shopping-bag"></i> Comprar ahora</button>
            </div>
        </section>
    </main>
</body>
</html>
