@php
$types = [
    'kode-etik' => [ 'title' => 'Kode Etik', 'doc' => 'https://best-world.id/dw/kode-etik-pt-best-240401.pdf'],
    'marketing-plan' => [ 'title' => 'Marketing Plan', 'doc' => 'https://best-world.id/dw/catalog-product-250117.pdf'],
    'katalog-produk' => [ 'title' => 'Katalog Produk', 'doc' => 'https://best-world.id/dw/marketing-plan-pt-best-250117.pdf'],
];
@endphp
<x-layouts.template>
    <section class="bg-neutral-100 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-neutral-800 mb-4">
                <span class="text-primary">{{ $types[$type]['title'] }}</span>
            </h1>
        </div>
        <div class="container mx-auto px-4">
            <embed src="{{ $types[$type]['doc'] }}" type="application/pdf" width="100%" height="600px" />
        </div>
    </section>
</x-layouts.template>
