<section class="bg-white rounded-lg shadow-sm py-5 px-4">
    <h3 class="font-bold text-xl font-sans text-gray-title">Dales el último toque a tus publicaciones guardadas y ¡hazlas virales!</h3>
    <p class="font-normal text-sm text-gray-subtitle mt-2">Aquí puedes volver a ver aquellas publicaciones que has guardado como borrador o has visto completas sin publicarlas</p>
    <section class="grid grid-cols-12 gap-4 pt-4">
        <div class="hidden md:flex md:col-span-1 md:justify-center md:items-center">
            <button type="button" class="rounded-full w-7 h-7 flex justify-center items-center bg-gray-button-slide prev">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.434 11.4404L6.43398 11.4404C6.33067 11.5425 6.1927 11.6 6.04851 11.6C5.90432 11.6 5.76635 11.5425 5.66304 11.4404L0.571448 6.41384C0.51703 6.36012 0.473905 6.29571 0.444507 6.22462C0.415111 6.15353 0.4 6.07712 0.4 6C0.4 5.92288 0.415111 5.84647 0.444507 5.77538C0.473905 5.70429 0.51703 5.63988 0.571448 5.58616L5.66304 0.55958C5.76635 0.457539 5.90432 0.4 6.04851 0.4C6.1927 0.4 6.33067 0.457539 6.43398 0.55958L6.43568 0.56126L6.43566 0.561279L6.44031 0.56609C6.49085 0.6161 6.53093 0.675984 6.5583 0.742045C6.58584 0.808521 6.6 0.87998 6.6 0.952107C6.6 1.02423 6.58584 1.09569 6.5583 1.16217C6.53077 1.22861 6.49039 1.2888 6.43943 1.33899L6.434 11.4404ZM6.434 11.4404L6.43566 11.4387L6.44031 11.4339L6.434 11.4404ZM1.71687 5.99907L6.43934 10.6609C6.43936 10.6609 6.43938 10.661 6.4394 10.661L6.43944 10.661L6.36919 10.7322C6.41052 10.7729 6.44343 10.8218 6.46592 10.8761C6.4884 10.9304 6.5 10.9888 6.5 11.0479C6.5 11.107 6.4884 11.1654 6.46592 11.2197L1.71687 5.99907ZM1.71687 5.99907L6.43934 1.33907L1.71687 5.99907Z" fill="white" stroke="white" stroke-width="0.2"/>
                </svg>
            </button>
        </div>
        <div class="swiper multiple-slide-carousel col-span-12 md:col-span-10 w-full relative h-fit">
            <div class="swiper-wrapper p-3">
                @foreach (collect(range(1,20)) as $item)
                    <article class="shadow-md border hover:shadow-lg rounded-lg transition-shadow swiper-slide w-full">
                        <div class="p-4 space-y-4">
                            <div class="text-gray-body font-normal text-sm leading-4">
                                ¡Bienvenidos a la empresa líder en suministros para oficina! 💼 En nuestro sitio encontrarás todo lo que necesitas para hacer de tu espacio de trabajo un lugar más eficiente y agradable. Desde papelería hasta mobiliario, pasando por tecnología y productos de limpieza, tenemos todo lo que necesitas para tamos buscando maneras de ofrecerte los mejores<span class="text-gray-body-opacity leading-4">Ver más</span>
                            </div>
                            <div class="flex gap-3">
                                <button class="bg-accent-bg py-2 w-[34px] h-[32px] rounded-md flex justify-center items-center group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" fill="currentColor" class="text-accent-bg group-hover:text-accent-heart transition-colors delay-100" />
                                        <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" fill="transparent" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-accent-heart " />
                                    </svg>
                                    </button>
                                <button
                                    class="flex-1 bg-orange-custom-btn flex justify-center leading-4 font-medium px-3 py-2 rounded-md text-xs text-gray-button hover:bg-orange-custom hover:text-white transition-colors delay-100">Ver</button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center items-center col-span-12 gap-4 md:hidden">
            <button type="button" class="rounded-full w-7 h-7 flex justify-center items-center bg-gray-button-slide prev">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.434 11.4404L6.43398 11.4404C6.33067 11.5425 6.1927 11.6 6.04851 11.6C5.90432 11.6 5.76635 11.5425 5.66304 11.4404L0.571448 6.41384C0.51703 6.36012 0.473905 6.29571 0.444507 6.22462C0.415111 6.15353 0.4 6.07712 0.4 6C0.4 5.92288 0.415111 5.84647 0.444507 5.77538C0.473905 5.70429 0.51703 5.63988 0.571448 5.58616L5.66304 0.55958C5.76635 0.457539 5.90432 0.4 6.04851 0.4C6.1927 0.4 6.33067 0.457539 6.43398 0.55958L6.43568 0.56126L6.43566 0.561279L6.44031 0.56609C6.49085 0.6161 6.53093 0.675984 6.5583 0.742045C6.58584 0.808521 6.6 0.87998 6.6 0.952107C6.6 1.02423 6.58584 1.09569 6.5583 1.16217C6.53077 1.22861 6.49039 1.2888 6.43943 1.33899L6.434 11.4404ZM6.434 11.4404L6.43566 11.4387L6.44031 11.4339L6.434 11.4404ZM1.71687 5.99907L6.43934 10.6609C6.43936 10.6609 6.43938 10.661 6.4394 10.661L6.43944 10.661L6.36919 10.7322C6.41052 10.7729 6.44343 10.8218 6.46592 10.8761C6.4884 10.9304 6.5 10.9888 6.5 11.0479C6.5 11.107 6.4884 11.1654 6.46592 11.2197L1.71687 5.99907ZM1.71687 5.99907L6.43934 1.33907L1.71687 5.99907Z" fill="white" stroke="white" stroke-width="0.2"/>
                </svg>
            </button>
            <button type="button" class="rounded-full w-7 h-7 flex justify-center items-center bg-gray-button-slide next">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.565997 0.559559L0.566017 0.559579C0.669326 0.457538 0.8073 0.4 0.951488 0.4C1.09568 0.4 1.23365 0.457538 1.33696 0.559579L6.42855 5.58616C6.48297 5.63988 6.52609 5.70429 6.55549 5.77538C6.58489 5.84647 6.6 5.92288 6.6 6C6.6 6.07712 6.58489 6.15353 6.55549 6.22462C6.52609 6.29571 6.48297 6.36012 6.42855 6.41384L1.33696 11.4404C1.23365 11.5425 1.09568 11.6 0.951488 11.6C0.807299 11.6 0.669325 11.5425 0.566017 11.4404L0.564316 11.4387L0.564337 11.4387L0.559694 11.4339C0.509148 11.3839 0.469072 11.324 0.4417 11.258C0.414156 11.1915 0.4 11.12 0.4 11.0479C0.4 10.9758 0.414156 10.9043 0.4417 10.8378C0.46923 10.7714 0.509609 10.7112 0.560569 10.661L0.565997 0.559559ZM0.565997 0.559559L0.564339 0.561277L0.559693 0.56609L0.565997 0.559559ZM5.28313 6.00093L0.560658 1.33907C0.560637 1.33905 0.560617 1.33903 0.560596 1.33901L0.560555 1.33897L0.630808 1.26781C0.58948 1.22713 0.556572 1.17816 0.534084 1.12389C0.511597 1.06961 0.5 1.01117 0.5 0.952105C0.5 0.893042 0.511597 0.834596 0.534084 0.780323L5.28313 6.00093ZM5.28313 6.00093L0.560658 10.6609L5.28313 6.00093Z" fill="white" stroke="white" stroke-width="0.2"/>
                    </svg>
            </button>
        </div>
        <div class="hidden md:flex md:col-span-1 md:justify-center md:items-center">
            <button type="button" class="rounded-full w-7 h-7 flex justify-center items-center bg-gray-button-slide next">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.565997 0.559559L0.566017 0.559579C0.669326 0.457538 0.8073 0.4 0.951488 0.4C1.09568 0.4 1.23365 0.457538 1.33696 0.559579L6.42855 5.58616C6.48297 5.63988 6.52609 5.70429 6.55549 5.77538C6.58489 5.84647 6.6 5.92288 6.6 6C6.6 6.07712 6.58489 6.15353 6.55549 6.22462C6.52609 6.29571 6.48297 6.36012 6.42855 6.41384L1.33696 11.4404C1.23365 11.5425 1.09568 11.6 0.951488 11.6C0.807299 11.6 0.669325 11.5425 0.566017 11.4404L0.564316 11.4387L0.564337 11.4387L0.559694 11.4339C0.509148 11.3839 0.469072 11.324 0.4417 11.258C0.414156 11.1915 0.4 11.12 0.4 11.0479C0.4 10.9758 0.414156 10.9043 0.4417 10.8378C0.46923 10.7714 0.509609 10.7112 0.560569 10.661L0.565997 0.559559ZM0.565997 0.559559L0.564339 0.561277L0.559693 0.56609L0.565997 0.559559ZM5.28313 6.00093L0.560658 1.33907C0.560637 1.33905 0.560617 1.33903 0.560596 1.33901L0.560555 1.33897L0.630808 1.26781C0.58948 1.22713 0.556572 1.17816 0.534084 1.12389C0.511597 1.06961 0.5 1.01117 0.5 0.952105C0.5 0.893042 0.511597 0.834596 0.534084 0.780323L5.28313 6.00093ZM5.28313 6.00093L0.560658 10.6609L5.28313 6.00093Z" fill="white" stroke="white" stroke-width="0.2"/>
                    </svg>
            </button>
        </div>
    </section>
</section>
