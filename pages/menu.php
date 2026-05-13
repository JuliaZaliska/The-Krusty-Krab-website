<section class="menu">
    <article>
        <h1>Наше меню</h1>
        <img src="media/menu1.webp" alt="Меню ресторану">
        <p>Поки для замовлення доступні лише наступні позиції:</p>
    </article>

    <div class="card-grid">
        <article class="card">
            <h2>Krabby Patty</h2>
            <img src="media/krabby-patty.jpg" alt="Крабсбургер">
            <h3>$1.25</h3>
            <button class="button" type="button" @click="toggle('Krabby Patty', 1.25)">
            {{ isAdded('Krabby Patty') ? '✓' : '+' }}
            </button>
            <p>Булочка, котлета, листя салату, цибуля, помідори, сир, мариновані огірки, гірчиця, кетчуп і секретний інгредієнт.</p>
        </article>

        <article class="card">
            <h2>Cheesy Patty</h2>
            <img src="media/krabby-patty-extra-cheese.webp" alt="Сирний Крабсбургер">
            <h3>$1.50</h3>
            <button class="button" type="button" @click="toggle('Cheesy Patty', 1.50)">
            {{ isAdded('Cheesy Patty') ? '✓' : '+' }}
            </button>
            <p>Булочка, котлета, четверний сир, листя салату, цибуля, помідори, мариновані огірки, гірчиця, кетчуп і секретний інгредієнт.</p>
        </article>

        <article class="card">
            <h2>Jelly Patty</h2>
            <img src="media/jelly-patty.webp" alt="Крабсбургер з желе">
            <h3>$2.00</h3>
            <button class="button" type="button" @click="toggle('Jelly Patty', 2.00)">
            {{ isAdded('Jelly Patty') ? '✓' : '+' }}
            </button>
            <p>Булочка, котлета, желе медуз, листя салату, цибуля, помідори, сир, мариновані огірки, гірчиця та кетчуп.</p>
        </article>

        <article class="card">
            <h2>Krabby Fries</h2>
            <img src="media/krabby-fries.webp" alt="Картопля фрі">
            <h3>$2.99</h3>
            <button class="button" type="button" @click="toggle('Krabby Fries', 2.99)">
            {{ isAdded('Krabby Fries') ? '✓' : '+' }}
            </button>
            <p>Класична картопля фрі, сіль і фірмова приправа.</p>
        </article>

        <article class="card">
            <h2>Kelp Fries</h2>
            <img src="media/kelp-fries.webp" alt="Фрі з водоростей">
            <h3>$1.99</h3>
            <button class="button" type="button" @click="toggle('Kelp Fries', 1.99)">
            {{ isAdded('Kelp Fries') ? '✓' : '+' }}
            </button>
            <p>Хрустка фрі з водоростей, сіль і фірмова приправа.</p>
        </article>

        <article class="card">
            <h2>Coral Bits</h2>
            <img src="media/coral-bits.webp" alt="Шматочки рожевого коралу">
            <h3>$1.25</h3>
            <button class="button" type="button" @click="toggle('Coral Bits', 1.25)">
            {{ isAdded('Coral Bits') ? '✓' : '+' }}
            </button>
            <p>Шматочки рожевого коралу, паніровка, сіль і спеції.</p>
        </article>

        <article class="card">
            <h2>Krusty Dog</h2>
            <img src="media/krusty-dog.webp" alt="Хот-дог">
            <h3>$1.25</h3>
            <button class="button" type="button" @click="toggle('Krusty Dog', 1.25)">
            {{ isAdded('Krusty Dog') ? '✓' : '+' }}
            </button>
            <p>Булочка, сосиска, гірчиця, кетчуп і фірмовий соус.</p>
        </article>

        <article class="card">
            <h2>Krusty Krab Pizza</h2>
            <img src="media/krusty-krab-pizza.webp" alt="Піца">
            <h3>$3.99</h3>
            <button class="button" type="button" @click="toggle('Krusty Krab Pizza', 3.99)">
            {{ isAdded('Krusty Krab Pizza') ? '✓' : '+' }}
            </button>
            <p>Фірмова піца на сирній основі з пепероні та грибами.</p>
        </article>

        <article class="card">
            <h2>Salad</h2>
            <img src="media/salad.webp" alt="Салат">
            <h3>$1.50</h3>
            <button class="button" type="button" @click="toggle('Salad', 1.50)">
            {{ isAdded('Salad') ? '✓' : '+' }}
            </button>
            <p>Листя салату, помідори, оливки, гриби, цвітна капуста, сухарики та легка заправка.</p>
        </article>
    </div>   
    <section class="api-menu">
        <h2>Найпопулярніші позиції в меню(перевірка php json api):</h2>
        <div id="api-menu-list" class="card-grid"></div>
    </section>
</section>