<section class="bg-white rounded-lg shadow-sm py-5 px-4 space-y-4">
    <h3 class="font-bold leading-5 text-xl font-sans text-gray-title">Temas de interés para tu comunidad</h3>
    <div class="grid grid-flow-col grid-rows-2 gap-2 overflow-x-scroll scroll-smooth scrollbar-hide">
        @foreach ($tags as $tag)
            <button class="rounded px-2 py-1 bg-gray-btn text-gray-body font-normal text-xs flex items-center">{{ $tag }}</button>
        @endforeach
    </div>
</section>
