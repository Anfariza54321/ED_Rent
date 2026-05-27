<main class="container py-5 mt-4">
    <div class="col-xl-10 mx-auto" id="ordersGrid">

        @forelse ($orders as $order)
            <div class="order-card-clean p-4 order-item" data-status="{{ $order->status }}">
                <div class="row align-items-center g-4">

                    <div class="col-md-auto text-center text-md-start">
                        <div class="order-img-wrapper mx-auto">
                            <img src="{{ $order->motor && $order->motor->image ? asset('storage/' . $order->motor->image) : 'https://placehold.co/400x300/f8fafc/0f172a?text=' . urlencode($order->motor_name ?? 'Motor') }}"
                                alt="{{ $order->motor_name }}">
                        </div>
                    </div>

                    <div class="col-md col-12 text-center text-md-start">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-2 gap-2">
                            <div>
                                <span class="badge bg-light-soft text-muted border small px-2 py-1 mb-1 d-inline-block">
                                    Kode: {{ $order->kode_booking }}
                                </span>
                                <h4 class="fw-bold text-carbon mb-0 mt-1">
                                    {{ $order->motor->model ?? $order->motor_name }}</h4>
                            </div>
                            <div>
                                @if ($order->status == 'Menunggu')
                                    <span class="badge-status-waiting"><i class="bi bi-clock-history me-1"></i> Menunggu
                                        Bayar</span>
                                @elseif($order->status == 'Disewa')
                                    <span class="badge-status-active"><i class="bi bi-play-circle me-1"></i>
                                        Aktif/Berjalan</span>
                                @elseif($order->status == 'Selesai')
                                    <span class="badge-status-completed"><i class="bi bi-check-circle-fill me-1"></i>
                                        Selesai</span>
                                @endif
                            </div>
                        </div>

                        <div class="row g-2 text-secondary small pt-2 border-top border-light mt-1">
                            <div class="col-6 col-sm-4">
                                <i class="bi bi-calendar2-week me-1"></i>
                                <strong>Sewa:</strong>
                                {{ \Carbon\Carbon::parse($order->tanggal_mulai)->translatedFormat('d M Y') }}
                            </div>
                            <div class="col-6 col-sm-4">
                                <i class="bi bi-hourglass-split me-1"></i>
                                <strong>Durasi:</strong>
                                {{ \Carbon\Carbon::parse($order->tanggal_rencana_kembali)->diffInDays(\Carbon\Carbon::parse($order->tanggal_mulai)) }}
                                Hari
                            </div>
                            <div class="col-12 col-sm-4 text-sm-end">
                                <span class="text-secondary">Total:</span>
                                <span class="text-carbon fw-bold fs-6">Rp
                                    {{ number_format($order->total_harga, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-auto col-12 d-grid gap-2 text-center">
                        <button class="btn btn-carbon py-2.5 px-4 rounded-pill"
                            onclick="showOrderDetail(
                                '{{ $order->kode_booking }}', 
                                '{{ $order->motor->model ?? $order->motor_name }}', 
                                '{{ \Carbon\Carbon::parse($order->tanggal_mulai)->translatedFormat('d M Y') }}', 
                                '{{ \Carbon\Carbon::parse($order->tanggal_rencana_kembali)->translatedFormat('d M Y (H:i)') }}', 
                                'Rp {{ number_format($order->total_harga, 0, ',', '.') }}', 
                                '{{ $order->status }}',
                                '{{ $order->motor && $order->motor->image ? asset('storage/' . $order->motor->image) : '' }}'
                            )">
                            @if ($order->status === 'waiting' || $order->status === 'Menunggu')
                                <i class="bi bi-credit-card-2-front me-1"></i> Detail & Bayar
                            @elseif($order->status === 'active' || $order->status === 'Disewa')
                                <i class="bi bi-info-circle me-1"></i> Detail Sewa
                            @else
                                <i class="bi bi-file-earmark-text me-1"></i> Detail Riwayat
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div id="emptyState" class="text-center py-5">
                <i class="bi bi-receipt display-2 text-muted"></i>
                <h4 class="fw-bold text-carbon mt-3">Tidak Ada Pesanan</h4>
                <p class="text-secondary">Saat ini tidak ada riwayat pesanan sewa motor.</p>
                <a href="{{ url('/catalog') }}" class="btn btn-carbon rounded-pill px-4 mt-2 text-decoration-none">Sewa
                    Motor Sekarang</a>
            </div>
        @endforelse
        <div class="d-flex justify-content-center custom-pagination mt-5">
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
    </div>
</main>

<x-modal-orderList />
