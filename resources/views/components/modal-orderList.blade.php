<div class="modal fade" id="orderDetailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content modal-content-custom border-0 shadow-lg"
            style="border-radius: 24px; background-color: #ffffff;">

            <div class="modal-header-custom d-flex justify-content-between align-items-center p-4 text-white"
                style="background: linear-gradient(135deg, #111827 0%, #1f2937 100%); border-bottom: 1px solid rgba(255,255,255,0.08);"
                id="modalHeaderBg">
                <div>
                    <h5 class="modal-title fw-extrabold tracking-tight mb-0" id="modalTitleMotor"
                        style="font-size: 1.15rem;">Detail Transaksi</h5>
                    <span class="font-monospace small opacity-75 d-block mt-0.5" id="modalBookingCode"
                        style="letter-spacing: 0.5px;">KBR-XXXX</span>
                </div>
                <button type="button" class="btn-close btn-close-white opacity-75" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4.5">
                <div class="row g-4">
                    <div class="col-md-5 text-center border-end-md">
                        <div class="rounded-4 p-4 d-flex align-items-center justify-content-center"
                            style="height: 210px; background-color: #f8fafc; border: 1px solid #e2e8f0;">
                            <img id="modalMotorImg" src="" alt="Motor" class="img-fluid"
                                style="max-height: 100%; object-fit: contain; filter: drop-shadow(0 10px 15px rgba(0,0,0,0.05));">
                        </div>

                        <h4 class="fw-extrabold text-carbon mt-3 mb-1" id="modalMotorName" style="color: #0f172a;">Nama
                            Motor</h4>
                        <p class="text-muted small mb-0"><i class="bi bi-shield-check text-dark me-1"></i> Telah
                            diinspeksi 50 Titik Mekanis</p>

                        <div class="d-grid mt-4 pt-2" id="modalMainAction">
                        </div>
                    </div>

                    <div class="col-md-7 ps-md-4">
                        <span class="text-xs fw-bold text-muted text-uppercase d-block mb-3"
                            style="letter-spacing: 1px; font-size: 0.75rem;">Logistik Distribusi</span>

                        <div class="timeline-step">
                            <div class="timeline-icon active" style="background-color: #0f172a;"><i
                                    class="bi bi-geo-alt-fill text-white" style="font-size: 0.7rem;"></i></div>
                            <h6 class="fw-bold text-carbon mb-0" style="color: #1e293b;">Penyerahan Unit</h6>
                            <p class="text-secondary small mb-0" id="modalPickupTime">Loading...</p>
                            <span class="text-muted" style="font-size: 0.75rem;">Hub KudaBesiRent Pusat (No. 24)</span>
                        </div>

                        <div class="timeline-step">
                            <div class="timeline-icon" style="background-color: #f1f5f9; border: 1px solid #cbd5e1;"><i
                                    class="bi bi-flag-fill text-muted" style="font-size: 0.7rem;"></i></div>
                            <h6 class="fw-bold text-carbon mb-0" style="color: #1e293b;">Batas Pengembalian</h6>
                            <p class="text-secondary small mb-0" id="modalReturnTime">Loading...</p>
                            <span class="text-muted" style="font-size: 0.75rem;">Wajib dikembalikan dengan tangki
                                penuh.</span>
                        </div>

                        <div class="my-4" style="border-top: 1px dashed #e2e8f0;"></div>

                        <span class="text-xs fw-bold text-muted text-uppercase d-block mb-3"
                            style="letter-spacing: 1px; font-size: 0.75rem;">Ikhtisar Finansial</span>

                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span>Sewa Dasar Unit</span>
                            <span id="modalBreakdownBase" class="fw-semibold text-dark">Rp -</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span>Fasilitas Helm (x2) & Jas Hujan</span>
                            <span class="badge bg-dark-subtle text-dark fw-bold border-0 px-2 py-1"
                                style="font-size: 0.65rem; background-color: #f1f5f9 !important;">COMPLIMENTARY</span>
                        </div>
                        <div class="d-flex justify-content-between small mb-3 text-secondary">
                            <span>Proteksi Kerusakan & Asuransi</span>
                            <span class="text-dark fw-medium" style="font-size: 0.8rem;"><i
                                    class="bi bi-check2 text-dark me-0.5"></i> Included</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center p-3 rounded-3 mt-1"
                            style="background-color: #f8fafc; border: 1px solid #f1f5f9;">
                            <span class="fw-bold text-secondary small">Total Tagihan Bersih</span>
                            <span class="fs-4 fw-extrabold text-carbon" id="modalTotalPay"
                                style="color: #0f172a; letter-spacing: -0.5px;">Rp -</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@vite(['resources/js/order-modal.js'])
