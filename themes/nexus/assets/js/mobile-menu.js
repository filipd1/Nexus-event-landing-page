document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".mobile-menu-toggle")
    const nav = document.querySelector(".mobile-menu")

    toggle.addEventListener("click", (e) => {
        e.stopPropagation()
        nav.classList.toggle("active")
    })

    nav.addEventListener("click", (e) => {
        e.stopPropagation()
    })

    document.addEventListener("click", (e) => {
        if (!nav.contains(e.target) && !toggle.contains(e.target)) {
            nav.classList.remove("active")
        }
    })
})
