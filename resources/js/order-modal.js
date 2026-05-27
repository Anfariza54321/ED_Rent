let orderModalInstance = null;

window.showOrderDetail = function (
    kode,
    motorName,
    startDate,
    endDate,
    total,
    status,
    imgUrl,
) {
    const modalTitle = document.getElementById("modalTitleMotor");
    const modalBookingCode = document.getElementById("modalBookingCode");
    const modalMotorImg = document.getElementById("modalMotorImg");
    const modalMotorName = document.getElementById("modalMotorName");
    const modalPickupTime = document.getElementById("modalPickupTime");
    const modalReturnTime = document.getElementById("modalReturnTime");
    const modalBreakdownBase = document.getElementById("modalBreakdownBase");
    const modalTotalPay = document.getElementById("modalTotalPay");
    const modalMainAction = document.getElementById("modalMainAction");

    const modalHeader = document.querySelector(".modal-header-custom");
    const timelineIcons = document.querySelectorAll(".timeline-icon");

    modalBookingCode.innerText = kode;
    modalMotorName.innerText = motorName;
    modalPickupTime.innerHTML = `<i class="bi bi-clock me-1"></i> ${startDate}`;
    modalReturnTime.innerHTML = `<i class="bi bi-clock me-1"></i> ${endDate}`;
    modalBreakdownBase.innerText = total;
    modalTotalPay.innerText = total;
    modalMotorImg.src = imgUrl
        ? imgUrl
        : "https://placehold.co/400x300/f8fafc/0f172a?text=Motor";

    modalHeader.className =
        "modal-header-custom d-flex justify-content-between align-items-center p-3 text-white";

    if (status === "waiting" || status === "Menunggu") {
        modalTitle.innerText = "Detail Booking: Menunggu Pembayaran";
        modalHeader.style.backgroundColor = "#d97706";
        timelineIcons[0].className = "timeline-icon bg-warning text-white";
        timelineIcons[1].className = "timeline-icon bg-light text-muted";
        modalMainAction.innerHTML = `
            <a href="/checkout/pay/${kode}" class="btn btn-dark py-2.5 rounded-pill fw-bold shadow-sm" style="background-color: #0f172a; border-color: #0f172a;">
                <i class="bi bi-credit-card-2-front me-1"></i> Selesaikan Pembayaran
            </a>
        `;
    } else if (status === "active" || status === "Disewa") {
        modalTitle.innerText = "Detail Booking: Sewa Aktif";
        modalHeader.style.backgroundColor = "#0369a1";
        timelineIcons[0].className = "timeline-icon bg-primary text-white";
        timelineIcons[1].className = "timeline-icon bg-primary text-white";
        modalMainAction.innerHTML = `
            <a href="https://wa.me/..." target="_blank" class="btn btn-outline-dark py-2.5 rounded-pill fw-bold" style="border-color: #cbd5e1; color: #334155;">
                <i class="bi bi-whatsapp me-1"></i> Bantuan Logistik
            </a>
        `;
    } else if (status === "completed" || status === "Selesai") {
        modalTitle.innerText = "Detail Booking: Transaksi Selesai";
        modalHeader.style.backgroundColor = "#15803d";
        timelineIcons[0].className = "timeline-icon bg-success text-white";
        timelineIcons[1].className = "timeline-icon bg-success text-white";
        timelineIcons[0].innerHTML = '<i class="bi bi-check-lg"></i>';
        timelineIcons[1].innerHTML = '<i class="bi bi-check-lg"></i>';
        modalMainAction.innerHTML = `
            <a href="/catalog" class="btn btn-success py-2.5 rounded-pill fw-bold shadow-sm">
                <i class="bi bi-arrow-counterclockwise me-1"></i> Sewa Motor Lagi
            </a>
        `;
    }

    const modalElement = document.getElementById("orderDetailModal");
    if (!orderModalInstance) {
        orderModalInstance = new bootstrap.Modal(modalElement);
    }
    orderModalInstance.show();
};
