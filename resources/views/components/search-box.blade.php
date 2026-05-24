<section class="container search-widget-container my-4" data-aos="fade-up" data-aos-offset="20">
    <div class="search-widget-card p-4 bg-white rounded-4 shadow-sm border border-light-subtle">

        <button
            class="btn btn-carbon w-100 d-lg-none d-flex align-items-center justify-content-center gap-2 py-3 rounded-3 border-0 transition-all shadow-sm"
            type="button" data-bs-toggle="collapse" data-bs-target="#searchCollapseContent" aria-expanded="false"
            aria-controls="searchCollapseContent">
            <i class="bi bi-sliders2-vertical"></i>
            <span class="fw-bold">Atur Waktu & Cari Motor</span>
        </button>

        <div class="collapse d-lg-block" id="searchCollapseContent">
            <div class="pt-3 pt-lg-0">
                <form id="searchForm" action="{{ url()->current() }}" method="GET" class="row g-3 align-items-end">

                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div class="col-lg-3 col-md-6 col-12">
                        <label class="form-label text-secondary small fw-bold text-uppercase"
                            style="font-size: 0.75rem;">
                            <i class="bi bi-calendar-event text-carbon me-1"></i> Tanggal & Jam Sewa
                        </label>
                        <input type="datetime-local" class="form-control form-control-clean py-2.5 rounded-3"
                            id="rentDateTime" name="rent_date" value="{{ request('rent_date') }}">
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <label class="form-label text-secondary small fw-bold text-uppercase"
                            style="font-size: 0.75rem;">
                            <i class="bi bi-clock-history text-carbon me-1"></i> Durasi Sewa
                        </label>
                        <select class="form-select form-select-clean py-2.5 rounded-3" id="rentDuration"
                            name="duration">
                            <option value="1" {{ request('duration') == '1' ? 'selected' : '' }}>1 Hari (24 Jam)
                            </option>
                            <option value="2" {{ request('duration') == '2' ? 'selected' : '' }}>2 Hari (48 Jam)
                            </option>
                            <option value="3" {{ request('duration') == '3' ? 'selected' : '' }}>3 Hari (72 Jam)
                            </option>
                            <option value="5" {{ request('duration') == '5' ? 'selected' : '' }}>5 Hari</option>
                            <option value="7" {{ request('duration') == '7' ? 'selected' : '' }}>1 Minggu (7 Hari)
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-4 col-12">
                        <label class="form-label text-secondary small fw-bold text-uppercase"
                            style="font-size: 0.75rem;">
                            <i class="bi bi-search text-carbon me-1"></i> Cari Kendaraan
                        </label>
                        <input type="text" class="form-control form-control-clean py-2.5 rounded-3"
                            id="searchKeyword" name="search" value="{{ request('search') }}"
                            placeholder="Cari nama motor (e.g. Ninja, Vespa)...">
                    </div>

                    <div class="col-lg-2 col-12 d-grid">
                        <button type="submit" class="btn btn-carbon py-2.5 rounded-3 fw-bold shadow-sm">
                            <i class="bi bi-filter me-1"></i> Cari
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>
