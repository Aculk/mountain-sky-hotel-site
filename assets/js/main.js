document.addEventListener("DOMContentLoaded", () => {

    const burger = document.querySelector(".burger");
    const mobileMenu = document.querySelector(".mobile-menu");
    const overlay = document.querySelector(".menu-overlay");

    if (!burger || !mobileMenu || !overlay) return;

    function openMenu() {
        burger.classList.add("active");
        mobileMenu.classList.add("active");
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    function closeMenu() {
        burger.classList.remove("active");
        mobileMenu.classList.remove("active");
        overlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    burger.addEventListener("click", () => {
        if (burger.classList.contains("active")) closeMenu();
        else openMenu();
    });

    overlay.addEventListener("click", closeMenu);

    mobileMenu.querySelectorAll("a, .btn-book-mobile, .lang__dropdown a").forEach(link => {link.addEventListener("click", closeMenu);
    });
});





document.addEventListener("DOMContentLoaded", () => {
    const langBlock = document.querySelector(".lang--js");
    const current = document.querySelector(".lang__current");
    const dropdown = document.querySelector(".lang__dropdown");

    if (current) {
        current.addEventListener("click", (e) => {
            e.stopPropagation();
            langBlock.classList.toggle("open");
        });
    }

    // При клике на язык — не закрываем пока не произойдёт переход
    if (dropdown) {
        dropdown.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    }

    // Клик вне меню — закрыть
    document.addEventListener("click", () => {
        langBlock.classList.remove("open");
    });
});
