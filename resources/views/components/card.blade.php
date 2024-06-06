@props([
    'imageSrc' => '',
    'title' => '',
    'status' => '',
])

<div class="card bg-white rounded shadow p-4">
    <img src="{{ $imageSrc }}" alt="{{ $title }}" class="card-image w-full h-48 object-cover rounded">
    <h3 class="card-title text-lg font-semibold mt-2">{{ $title }}</h3>
    <p class="card-status text-gray-500">{{ $status }}</p>
    <div class="mt-2 flex justify-between">
        <button class="card-detail-btn bg-blue-500 text-white px-4 py-2 rounded" onclick="showDetail('{{ $title }}')">
            <x-nav-link :href="route('gedung.index')" :active="request()->routeIs('gedung.index')">
                {{ __("Detail") }}
            </x-nav-link>
        </button>
        <button class="card-pinjam-btn bg-green-500 text-white px-4 py-2 rounded" onclick="pinjamItem('{{ $title }}')">Pinjam</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.card-title').forEach(el => el.classList.add("px-6", "py-3", "text-left", "text-xs", "font-medium", "text-black-500", "uppercase"));
        document.querySelectorAll('.card-status').forEach(el => el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-black-800", "dark:text-black-200"));
        document.querySelectorAll('.card-detail-btn').forEach(el => el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-black-800", "dark:text-black-200"));
        document.querySelectorAll('.card-pinjam-btn').forEach(el => el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-black-800", "dark:text-black-200"));
    });
</script>
