<section class="container py-4 mt-2">
    <div class="text-center text-md-start mb-3">
        <h5 class="fw-bold text-carbon mb-1">Kategori Gaya Berkendara</h5>
        <p class="text-secondary small mb-0">Sesuaikan karakter jalananmu dengan tipe motor yang tepat.</p>
    </div>

    <div class="category-scroll-container d-flex gap-3 justify-content-start overflow-x-auto pb-2"
        style="scrollbar-width: none; -ms-overflow-style: none;">

        <a href="{{ request()->fullUrlWithQuery(['category' => null, 'page' => null]) }}"
            class="category-btn text-decoration-none text-nowrap {{ !request('category') ? 'active' : '' }}">
            <i class="bi bi-grid-fill me-2"></i>Semua Kendaraan
        </a>


        <a href="{{ request()->fullUrlWithQuery(['category' => 'fairing', 'page' => null]) }}"
            class="category-btn text-decoration-none text-nowrap {{ request('category') == 'fairing' ? 'active' : '' }}">
            <i class="bi bi-speedometer2 me-2"></i>Fairing Sport
        </a>


        <a href="{{ request()->fullUrlWithQuery(['category' => 'matic', 'page' => null]) }}"
            class="category-btn text-decoration-none {{ request('category') == 'matic' ? 'active' : '' }}">
            <i class="bi bi-lightning-charge me-2"></i>Matic
        </a>


        <a href="{{ request()->fullUrlWithQuery(['category' => 'naked', 'page' => null]) }}"
            class="category-btn text-decoration-none text-nowrap {{ request('category') == 'naked' ? 'active' : '' }}">
            <i class="bi bi-gear-wide-connected me-2"></i>Naked Bike
        </a>


        <a href="{{ request()->fullUrlWithQuery(['category' => 'bebek', 'page' => null]) }}"
            class="category-btn text-decoration-none text-nowrap {{ request('category') == 'bebek' ? 'active' : '' }}">
            <i class="bi bi-bicycle me-2"></i>Bebek / Underbone
        </a>


        <a href="{{ request()->fullUrlWithQuery(['category' => 'trail', 'page' => null]) }}"
            class="category-btn text-decoration-none text-nowrap {{ request('category') == 'trail' ? 'active' : '' }}">
            <i class="bi bi-compass me-2"></i>Trail Adventure
        </a>

    </div>
</section>
