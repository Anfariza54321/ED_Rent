document.addEventListener("DOMContentLoaded", function () {
    const filterPills = document.querySelectorAll(".filter-pill");
    const orderItems = document.querySelectorAll(".order-item");
    const emptyState = document.getElementById("emptyState");

    filterPills.forEach((pill) => {
        pill.addEventListener("click", function () {
            filterPills.forEach((p) => p.classList.remove("active"));
            this.classList.add("active");

            const selectedFilter = this.getAttribute("data-filter");
            let visibleCount = 0;

            orderItems.forEach((item) => {
                const itemStatus = item.getAttribute("data-status");

                if (selectedFilter === "all" || itemStatus === selectedFilter) {
                    item.style.display = "block";
                    visibleCount++;
                } else {
                    item.style.display = "none";
                }
            });

            if (visibleCount === 0) {
                emptyState.classList.remove("d-none");
            } else {
                emptyState.classList.add("d-none");
            }
        });
    });
});
