document.addEventListener("DOMContentLoaded", function () {
  const navBtn = document.querySelector(".nav-btn");
  const navList = document.querySelector(".nav-list");

  if (navBtn && navList) {
    navBtn.addEventListener("click", function () {
      navList.classList.toggle("open");
    });

    navList.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", function () {
        navList.classList.remove("open");
      });
    });

    document.addEventListener("click", function (event) {
      const isClickInsideMenu = navList.contains(event.target);
      const isClickOnButton = navBtn.contains(event.target);

      if (!isClickInsideMenu && !isClickOnButton) {
        navList.classList.remove("open");
      }
    });
  }
});

if (document.querySelector("#app") && window.Vue) {
  const { createApp, ref, computed, watch } = Vue;

  createApp({
    setup() {
      const savedCart = localStorage.getItem("cart");

      const cart = ref(savedCart ? JSON.parse(savedCart) : []);
      const showCart = ref(false);

      const count = computed(() => {
        return cart.value.reduce((sum, item) => sum + item.quantity, 0);
      });

      const total = computed(() => {
        return cart.value.reduce((sum, item) => sum + item.price * item.quantity, 0);
      });

      function toggle(name, price) {
        const item = cart.value.find((item) => item.name === name);

        if (item) {
          remove(name);
        } else {
          cart.value.push({
            name: name,
            price: price,
            quantity: 1
          });
        }
      }

      function plus(item) {
        item.quantity++;
      }

      function minus(item) {
        item.quantity--;

        if (item.quantity === 0) {
          remove(item.name);
        }
      }

      function remove(name) {
        cart.value = cart.value.filter((item) => item.name !== name);
      }

      function clearCart() {
        cart.value = [];
      }

      function isAdded(name) {
        return cart.value.some((item) => item.name === name);
      }

      watch(cart, () => {
        localStorage.setItem("cart", JSON.stringify(cart.value));
      }, { deep: true });

      return {
        cart,
        showCart,
        count,
        total,
        toggle,
        plus,
        minus,
        remove,
        clearCart,
        isAdded
      };
    }
  }).mount("#app");
}