<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="app">
        <header>
            <a href="index.php?page=home" class="logo-link">
                <img src="media/logo.jpg" alt="" class="logo-image">
                <span class="logo-text">The Krusty Krab</span>
            </a>

            <button class="nav-btn" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav-list">
                <ul>
                <li><a href="index.php?page=home">Головна</a></li>
                <li><a href="index.php?page=menu">Меню</a></li>
                <li><a href="index.php?page=contacts">Контакти</a></li>
                <li><a href="#" @click.prevent="showCart = !showCart">Замовлення: {{ count }}</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="cart" v-if="showCart">
            <button class="button" type="button" @click="showCart = false">×</button>
            <h2>Моє замовлення</h2>
            <p v-if="cart.length === 0">Поки що нічого не додано.</p>

            <div v-for="item in cart" :key="item.name">
                <h3>{{ item.name }}</h3>
                <p>${{ item.price.toFixed(2) }} × {{ item.quantity }}</p>
                
                <button class="button" type="button" @click="minus(item)">-</button>
                <button class="button" type="button" @click="plus(item)">+</button>
                <button class="button" type="button" @click="remove(item.name)">🗑</button>
            </div>
            
            <button v-if="cart.length > 0" class="button" type="button" @click="clearCart">Видалити всі замовлення</button>
            <h3>Разом: ${{ total.toFixed(2) }}</h3>
            <button v-if="cart.length > 0" class="button checkout-button" type="button" @click="checkout">Оформити замовлення</button>
        </div>

      <main>
        <?= $content ?>
      </main>

      <footer>
        <p>&copy; <?= date('Y') ?> The Krusty Krab. Not all rights reserved.</p>
      </footer>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="script.js"></script>
  </body>
</html>