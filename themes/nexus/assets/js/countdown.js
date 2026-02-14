document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".timer").forEach(timer => {
        const end = parseInt(timer.dataset.end, 10)

        const daysElement = timer.querySelector(".timer-days")
        const hoursElement = timer.querySelector(".timer-hours")
        const minutesElement = timer.querySelector(".timer-minutes")

        const update = () => {
            const now = Date.now()
            let diff = Math.floor((end - now) / 1000)

            if (diff <= 0) {
                diff = 0
            }

            const days = Math.floor(diff / 86400)
            const hours = Math.floor((diff % 86400) / 3600)
            const minutes = Math.floor((diff % 3600) / 60)

            if (daysElement) daysElement.textContent = days
            if (hoursElement) hoursElement.textContent = String(hours).padStart(2, "0")
            if (minutesElement) minutesElement.textContent = String(minutes).padStart(2, "0")
        }

        update()
        setInterval(update, 60000)
    })
})