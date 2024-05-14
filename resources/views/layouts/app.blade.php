<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Scripts -->
    @yield('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <style>
        .menu-mobile-backdrop {
            display: block;
            position: fixed;
            z-index: 10;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5)
        }
        .menu-mobile {
            display: block;
            position: fixed;
            z-index: 20;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body class="font-sans antialiased flex">
    <div class="transition-colors" id="menuBackdrop"></div>
    <aside class="hidden lg:block lg:w-72 bg-white min-h-screen pr-[30px] transition-colors delay-150">
        <div class="py-[30px] pl-[30px]">
            <img src="/images/logo_you.png">
        </div>
        <nav class="flex flex-col">
            <a href="#"
                class="bg-blue-custom-bg py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="font-medium text-sm leading-5 ">
                    Inicio
                </span>
            </a>
            <a href="#"
                class="group py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full group text-gray-title">
                <svg class="w-5 h-5" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3.33325 3.58866C3.11224 3.58866 2.90028 3.67646 2.744 3.83274C2.58772 3.98902 2.49992 4.20098 2.49992 4.422V12.7553C2.49992 12.9763 2.58772 13.1883 2.744 13.3446C2.90028 13.5009 3.11224 13.5887 3.33325 13.5887H5.83325C6.05427 13.5887 6.26623 13.6765 6.42251 13.8327C6.57879 13.989 6.66659 14.201 6.66659 14.422V15.9437L9.17992 13.7895C9.33075 13.6601 9.52286 13.5889 9.72159 13.5887H16.6666C16.8876 13.5887 17.0996 13.5009 17.2558 13.3446C17.4121 13.1883 17.4999 12.9763 17.4999 12.7553V4.422C17.4999 4.20098 17.4121 3.98902 17.2558 3.83274C17.0996 3.67646 16.8876 3.58866 16.6666 3.58866H3.33325ZM0.833252 4.422C0.833252 3.75896 1.09664 3.12307 1.56549 2.65423C2.03433 2.18539 2.67021 1.922 3.33325 1.922H16.6666C17.3296 1.922 17.9655 2.18539 18.4344 2.65423C18.9032 3.12307 19.1666 3.75896 19.1666 4.422V12.7553C19.1666 13.4184 18.9032 14.0543 18.4344 14.5231C17.9655 14.9919 17.3296 15.2553 16.6666 15.2553H10.0308L6.37492 18.3887C6.25386 18.4922 6.10566 18.5589 5.94787 18.5808C5.79008 18.6027 5.62931 18.5789 5.48462 18.5123C5.33993 18.4456 5.21737 18.3389 5.13146 18.2048C5.04556 18.0706 4.99991 17.9146 4.99992 17.7553V15.2553H3.33325C2.67021 15.2553 2.03433 14.9919 1.56549 14.5231C1.09664 14.0543 0.833252 13.4184 0.833252 12.7553V4.422Z"
                        class="fill-current group-hover:text-blue-custom" />
                    <path
                        d="M4.50977 5.86245C4.50977 5.6817 4.58157 5.50834 4.70939 5.38053C4.8372 5.25271 5.01055 5.18091 5.19131 5.18091H9.96213C10.1429 5.18091 10.3162 5.25271 10.4441 5.38053C10.5719 5.50834 10.6437 5.6817 10.6437 5.86245V11.3148C10.6437 11.4956 10.5719 11.6689 10.4441 11.7967C10.3162 11.9246 10.1429 11.9964 9.96213 11.9964H5.19131C5.01055 11.9964 4.8372 11.9246 4.70939 11.7967C4.58157 11.6689 4.50977 11.4956 4.50977 11.3148V5.86245ZM5.87286 6.544V10.6333H9.28059V6.544H5.87286ZM15.0737 6.544H11.666V5.18091H15.0737V6.544ZM15.0737 11.9964H11.666V10.6333H15.0737V11.9964ZM15.0737 9.27018H11.666V7.90709H15.0737V9.27018Z"
                        class="fill-current group-hover:text-blue-custom" />
                </svg>
                <span class="font-medium text-sm leading-5 group-hover:text-blue-custom">
                    Ver contenido
                </span>
            </a>
            <a href="#"
                class="group py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full text-gray-title">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 group-hover:text-blue-custom">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
                <span class="font-medium text-sm leading-5  group-hover:text-blue-custom">
                    Planificador
                </span>
            </a>
            <a href="#"
                class="hover:text-blue-custom py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full group text-gray-title">
                <svg class="w-5 h-5" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.99992 1.08862C7.87111 1.09369 5.8098 1.83606 4.16659 3.18946V2.75529C4.16659 2.53428 4.07879 2.32231 3.92251 2.16603C3.76623 2.00975 3.55427 1.92196 3.33325 1.92196C3.11224 1.92196 2.90028 2.00975 2.744 2.16603C2.58772 2.32231 2.49992 2.53428 2.49992 2.75529V5.25529C2.49992 5.27612 2.50992 5.29446 2.51159 5.31529C2.51715 5.3684 2.52776 5.42086 2.54325 5.47196C2.55583 5.52344 2.57312 5.57365 2.59492 5.62196C2.61858 5.6678 2.64647 5.71132 2.67825 5.75196C2.69657 5.78422 2.71718 5.81514 2.73992 5.84446C2.75492 5.85946 2.77492 5.86529 2.79075 5.87862C2.80659 5.89196 2.81409 5.91029 2.82992 5.92279C2.85901 5.93881 2.88907 5.953 2.91992 5.96529C2.96882 5.99497 3.02079 6.01928 3.07492 6.03779C3.12491 6.05301 3.17626 6.06334 3.22825 6.06862C3.26279 6.07753 3.29786 6.08421 3.33325 6.08862H5.83325C6.05427 6.08862 6.26623 6.00083 6.42251 5.84454C6.57879 5.68826 6.66658 5.4763 6.66658 5.25529C6.66658 5.03428 6.57879 4.82231 6.42251 4.66603C6.26623 4.50975 6.05427 4.42196 5.83325 4.42196H5.29909C6.62335 3.35778 8.26996 2.77524 9.96883 2.76989C11.6677 2.76454 13.3179 3.3367 14.6489 4.39252C15.9798 5.44834 16.9124 6.92513 17.2937 8.58066C17.6751 10.2362 17.4824 11.9721 16.7475 13.5038C16.0125 15.0355 14.7788 16.2719 13.2488 17.0102C11.7187 17.7486 9.98319 17.945 8.32683 17.5674C6.67047 17.1897 5.19162 16.2604 4.13287 14.9318C3.07412 13.6031 2.49832 11.9542 2.49992 10.2553C2.49992 10.0343 2.41212 9.82231 2.25584 9.66603C2.09956 9.50975 1.8876 9.42196 1.66659 9.42196C1.44557 9.42196 1.23361 9.50975 1.07733 9.66603C0.921049 9.82231 0.833252 10.0343 0.833252 10.2553C0.833252 12.0683 1.37087 13.8406 2.37811 15.348C3.38536 16.8555 4.817 18.0304 6.49199 18.7242C8.16698 19.418 10.0101 19.5995 11.7882 19.2458C13.5664 18.8921 15.1997 18.0191 16.4817 16.7371C17.7637 15.4551 18.6368 13.8218 18.9904 12.0436C19.3441 10.2655 19.1626 8.42235 18.4688 6.74736C17.775 5.07237 16.6001 3.64073 15.0926 2.63348C13.5852 1.62624 11.8129 1.08862 9.99992 1.08862Z"
                        class="fill-current group-hover:text-blue-custom" />
                    <path
                        d="M9.99992 11.0887C10.2209 11.0887 10.4329 11.0009 10.5892 10.8446C10.7455 10.6883 10.8333 10.4763 10.8333 10.2553V5.25533C10.8333 5.03432 10.7455 4.82236 10.5892 4.66607C10.4329 4.50979 10.2209 4.422 9.99992 4.422C9.7789 4.422 9.56694 4.50979 9.41066 4.66607C9.25438 4.82236 9.16659 5.03432 9.16659 5.25533V9.422H6.66659C6.44557 9.422 6.23361 9.50979 6.07733 9.66608C5.92105 9.82236 5.83325 10.0343 5.83325 10.2553C5.83325 10.4763 5.92105 10.6883 6.07733 10.8446C6.23361 11.0009 6.44557 11.0887 6.66659 11.0887H9.99992Z"
                        class="fill-current group-hover:text-blue-custom" />
                </svg>
                <span class="font-medium text-sm leading-5 group-hover:text-blue-custom">
                    Historial
                </span>
            </a>
            <a href="#"
                class="hover:text-blue-custom py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full group
                text-gray-title">
                <svg class="w-5 h-5" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M3.54609 8.0921H5.05238C5.37512 8.0921 5.63832 8.35531 5.63832 8.67804V12.6492C5.63832 12.9719 5.37512 13.2352 5.05238 13.2352H3.54609C3.22336 13.2352 2.96016 12.9719 2.96016 12.6492V8.67804C2.96016 8.35535 3.22336 8.0921 3.54609 8.0921ZM17.3351 15.0764H1.11895V0.98023C1.11895 0.729487 0.915664 0.526245 0.664922 0.526245C0.41418 0.526245 0.210938 0.729487 0.210938 0.98023V15.5304C0.210938 15.7811 0.41418 15.9844 0.664922 15.9844H17.335C17.5858 15.9844 17.789 15.7811 17.789 15.5304C17.7891 15.2796 17.5858 15.0764 17.3351 15.0764ZM8.66043 4.92234H10.1667C10.4895 4.92234 10.7527 5.18554 10.7527 5.50828V12.6493C10.7527 12.972 10.4895 13.2352 10.1667 13.2352H8.66043C8.3377 13.2352 8.07449 12.972 8.07449 12.6493V5.50828C8.07449 5.18554 8.3377 4.92234 8.66043 4.92234ZM13.7748 1.93019H15.2811C15.6038 1.93019 15.867 2.19339 15.867 2.51613V12.6493C15.867 12.972 15.6038 13.2352 15.2811 13.2352H13.7748C13.452 13.2352 13.1888 12.972 13.1888 12.6493V2.51613C13.1888 2.19339 13.452 1.93019 13.7748 1.93019Z"
                        class="fill-current group-hover:text-blue-custom" />
                </svg>
                <span class="font-medium text-sm leading-5 group-hover:text-blue-custom">Estadística</span>
            </a>
            <a href="#"
                class="py-[14px] pr-[12px] pl-[26px] flex gap-2 items-center rounded-r-full group text-gray-title">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 group-hover:text-blue-custom">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <span class="font-medium text-sm leading-5  group-hover:text-blue-custom">
                    Favoritos
                </span>
            </a>
        </nav>
        <div class="border-t border-b pt-[24px] pr-[20px] pb-[34px] pl-[26px] space-y-3">
            <span class="text-[9px] font-medium leading-3 text-gray-body-opacity uppercase">Empresa actual y perfiles conectados</span>
            <div class="flex gap-2 items-center">
                <div class="w-[25px] h-[25px] rounded-full bg-gray-avatar-opacity flex justify-center items-center">
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.36842 2.62373C2.36842 3.92952 3.43105 4.99215 4.73684 4.99215C6.04263 4.99215 7.10526 3.92952 7.10526 2.62373C7.10526 1.31794 6.04263 0.25531 4.73684 0.25531C3.43105 0.25531 2.36842 1.31794 2.36842 2.62373ZM8.94737 10.2553H9.47368V9.72899C9.47368 7.69794 7.82053 6.04478 5.78947 6.04478H3.68421C1.65263 6.04478 0 7.69794 0 9.72899V10.2553H8.94737Z" fill="#232323" fill-opacity="0.4"/>
                    </svg>
                </div>
                <span class="font-medium text-sm leading-5 text-gray-title">Gestora Sanchez</span>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-[25px] h-[25px] rounded-full flex items-center justify-center">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7.25531" r="7" fill="white"/>
                        <path d="M14 7.29809C14 3.40849 10.866 0.25531 7 0.25531C3.13403 0.25531 0 3.40844 0 7.29809C0 10.8133 2.55981 13.727 5.90625 14.2553V9.33389H4.12891V7.29809H5.90625V5.74648C5.90625 3.98138 6.95133 3.0064 8.55023 3.0064C9.31612 3.0064 10.1172 3.14395 10.1172 3.14395V4.87713H9.23453C8.36489 4.87713 8.09375 5.42003 8.09375 5.97702V7.29809H10.0352L9.7248 9.33389H8.09375V14.2553C11.4402 13.727 14 10.8134 14 7.29809Z" fill="#1877F2"/>
                    </svg>
                </div>
                <p class="font-normal text-sm leading-4 text-gray-body-opacity">EnBoca - bar terapia</p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-[25px] h-[25px] rounded-full flex items-center justify-center">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7.25531" r="7" fill="white"/>
                        <path d="M14 7.29809C14 3.40849 10.866 0.25531 7 0.25531C3.13403 0.25531 0 3.40844 0 7.29809C0 10.8133 2.55981 13.727 5.90625 14.2553V9.33389H4.12891V7.29809H5.90625V5.74648C5.90625 3.98138 6.95133 3.0064 8.55023 3.0064C9.31612 3.0064 10.1172 3.14395 10.1172 3.14395V4.87713H9.23453C8.36489 4.87713 8.09375 5.42003 8.09375 5.97702V7.29809H10.0352L9.7248 9.33389H8.09375V14.2553C11.4402 13.727 14 10.8134 14 7.29809Z" fill="#1877F2"/>
                    </svg>
                </div>
                <p class="font-normal text-sm leading-4 text-gray-body-opacity">Youposty.com</p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-[25px] h-[25px] rounded-full flex items-center justify-center">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7188 0.25531H3.28125C1.46907 0.25531 0 1.72438 0 3.53656V10.9741C0 12.7862 1.46907 14.2553 3.28125 14.2553H10.7188C12.5309 14.2553 14 12.7862 14 10.9741V3.53656C14 1.72438 12.5309 0.25531 10.7188 0.25531Z" fill="url(#paint0_radial_3253_5051)"/>
                        <path d="M10.7188 0.25531H3.28125C1.46907 0.25531 0 1.72438 0 3.53656V10.9741C0 12.7862 1.46907 14.2553 3.28125 14.2553H10.7188C12.5309 14.2553 14 12.7862 14 10.9741V3.53656C14 1.72438 12.5309 0.25531 10.7188 0.25531Z" fill="url(#paint1_radial_3253_5051)"/>
                        <path d="M7.00049 1.78656C5.51529 1.78656 5.32886 1.79307 4.74556 1.81959C4.16336 1.84628 3.76595 1.93843 3.41824 2.07367C3.05851 2.21334 2.75341 2.40021 2.44945 2.70427C2.14523 3.00828 1.95836 3.31338 1.81825 3.67295C1.68263 4.02076 1.59037 4.41834 1.56417 5.00027C1.53809 5.58362 1.53125 5.77011 1.53125 7.25537C1.53125 8.74062 1.53781 8.92645 1.56428 9.50975C1.59108 10.092 1.68323 10.4894 1.81836 10.8371C1.95814 11.1968 2.14501 11.5019 2.44907 11.8059C2.75297 12.1101 3.05807 12.2974 3.41753 12.4371C3.76551 12.5723 4.16298 12.6645 4.74507 12.6911C5.32842 12.7177 5.51469 12.7242 6.99984 12.7242C8.4852 12.7242 8.67103 12.7177 9.25433 12.6911C9.83653 12.6645 10.2344 12.5723 10.5824 12.4371C10.9419 12.2974 11.2466 12.1101 11.5504 11.8059C11.8547 11.5019 12.0415 11.1968 12.1816 10.8372C12.3161 10.4894 12.4084 10.0918 12.4357 9.50986C12.4619 8.92656 12.4688 8.74062 12.4688 7.25537C12.4688 5.77011 12.4619 5.58373 12.4357 5.00038C12.4084 4.41818 12.3161 4.02082 12.1816 3.67311C12.0415 3.31338 11.8547 3.00828 11.5504 2.70427C11.2463 2.4001 10.942 2.21323 10.582 2.07372C10.2334 1.93843 9.83576 1.84622 9.25356 1.81959C8.67021 1.79307 8.48449 1.78656 6.9988 1.78656H7.00049ZM6.50989 2.77208C6.65552 2.77186 6.818 2.77208 7.00049 2.77208C8.4607 2.77208 8.63373 2.77733 9.21036 2.80353C9.74356 2.82792 10.033 2.91701 10.2257 2.99187C10.481 3.09097 10.6629 3.20947 10.8542 3.40094C11.0456 3.59234 11.1641 3.77461 11.2634 4.02984C11.3383 4.22234 11.4275 4.51175 11.4518 5.04495C11.478 5.62147 11.4837 5.79461 11.4837 7.25411C11.4837 8.71361 11.478 8.8868 11.4518 9.46326C11.4274 9.99647 11.3383 10.2859 11.2634 10.4784C11.1643 10.7337 11.0456 10.9154 10.8542 11.1067C10.6628 11.2981 10.4811 11.4165 10.2257 11.5157C10.0332 11.5909 9.74356 11.6797 9.21036 11.7041C8.63384 11.7303 8.4607 11.736 7.00049 11.736C5.54023 11.736 5.36714 11.7303 4.79068 11.7041C4.25748 11.6795 3.96807 11.5904 3.77513 11.5156C3.51996 11.4164 3.33763 11.298 3.14623 11.1066C2.95482 10.9152 2.83637 10.7333 2.737 10.478C2.66213 10.2854 2.57294 9.99603 2.54866 9.46283C2.52246 8.88631 2.51721 8.71317 2.51721 7.25274C2.51721 5.79237 2.52246 5.6201 2.54866 5.04358C2.57305 4.51038 2.66213 4.22097 2.737 4.0282C2.83615 3.77297 2.95482 3.5907 3.14628 3.39929C3.33769 3.20789 3.51996 3.08938 3.77519 2.99007C3.96796 2.91487 4.25748 2.82601 4.79068 2.80151C5.29517 2.7787 5.49068 2.77186 6.50989 2.77072V2.77208ZM9.91971 3.68011C9.55741 3.68011 9.26346 3.97379 9.26346 4.33615C9.26346 4.69845 9.55741 4.9924 9.91971 4.9924C10.282 4.9924 10.576 4.69845 10.576 4.33615C10.576 3.97384 10.282 3.6799 9.91971 3.6799V3.68011ZM7.00049 4.44689C5.44955 4.44689 4.19207 5.70437 4.19207 7.25537C4.19207 8.80636 5.44955 10.0632 7.00049 10.0632C8.55148 10.0632 9.80853 8.80636 9.80853 7.25537C9.80853 5.70443 8.55138 4.44689 7.00038 4.44689H7.00049ZM7.00049 5.43241C8.00723 5.43241 8.82345 6.24851 8.82345 7.25537C8.82345 8.26211 8.00723 9.07832 7.00049 9.07832C5.9937 9.07832 5.17759 8.26211 5.17759 7.25537C5.17759 6.24851 5.9937 5.43241 7.00049 5.43241Z" fill="white"/>
                        <defs>
                            <radialGradient id="paint0_radial_3253_5051" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(3.71875 15.3336) rotate(-90) scale(13.875 12.9049)">
                            <stop stop-color="#FFDD55"/>
                            <stop offset="0.1" stop-color="#FFDD55"/>
                            <stop offset="0.5" stop-color="#FF543E"/>
                            <stop offset="1" stop-color="#C837AB"/>
                            </radialGradient>
                            <radialGradient id="paint1_radial_3253_5051" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-2.34505 1.2638) rotate(78.681) scale(6.20222 25.5657)">
                            <stop stop-color="#3771C8"/>
                            <stop offset="0.128" stop-color="#3771C8"/>
                            <stop offset="1" stop-color="#6600FF" stop-opacity="0"/>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <span class="font-normal text-sm leading-4 text-gray-body-opacity">enbocaterapia</span>
            </div>
            <button class="bg-orange-custom text-white font-semibold text-sm leading-3 px-3 py-2 rounded-2xl flex gap-2 items-center">
                <span class="bg-white p-1 rounded-full">
                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.15253 0.21669C5.29752 0.21669 5.43657 0.274285 5.53909 0.376805C5.64161 0.479325 5.6992 0.618371 5.6992 0.763356V3.86113H8.79698C8.94196 3.86113 9.08101 3.91873 9.18353 4.02125C9.28605 4.12377 9.34364 4.26281 9.34364 4.4078C9.34364 4.55278 9.28605 4.69183 9.18353 4.79435C9.08101 4.89687 8.94196 4.95446 8.79698 4.95446H5.6992V8.05224C5.6992 8.19723 5.64161 8.33627 5.53909 8.43879C5.43657 8.54131 5.29752 8.59891 5.15253 8.59891C5.00755 8.59891 4.8685 8.54131 4.76598 8.43879C4.66346 8.33627 4.60587 8.19723 4.60587 8.05224V4.95446H1.50809C1.36311 4.95446 1.22406 4.89687 1.12154 4.79435C1.01902 4.69183 0.961426 4.55278 0.961426 4.4078C0.961426 4.26281 1.01902 4.12377 1.12154 4.02125C1.22406 3.91873 1.36311 3.86113 1.50809 3.86113H4.60587V0.763356C4.60587 0.618371 4.66346 0.479325 4.76598 0.376805C4.8685 0.274285 5.00755 0.21669 5.15253 0.21669Z" fill="#FFA528"/>
                    </svg>
                </span>
                Añadir nuevo perfil
            </button>
        </div>
        <div class="flex gap-2 items-center pt-[24px] pr-[20px] pb-[34px] pl-[26px]">
            <span class="bg-blue-custom p-1 rounded-full">
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.15253 0.521683C5.29752 0.521683 5.43657 0.579278 5.53909 0.681798C5.6416 0.784317 5.6992 0.923364 5.6992 1.06835V4.16612H8.79698C8.94196 4.16612 9.08101 4.22372 9.18353 4.32624C9.28605 4.42876 9.34364 4.56781 9.34364 4.71279C9.34364 4.85778 9.28605 4.99682 9.18353 5.09934C9.08101 5.20186 8.94196 5.25946 8.79698 5.25946H5.6992V8.35723C5.6992 8.50222 5.6416 8.64126 5.53909 8.74378C5.43657 8.8463 5.29752 8.9039 5.15253 8.9039C5.00755 8.9039 4.8685 8.8463 4.76598 8.74378C4.66346 8.64126 4.60587 8.50222 4.60587 8.35723V5.25946H1.50809C1.36311 5.25946 1.22406 5.20186 1.12154 5.09934C1.01902 4.99682 0.961426 4.85778 0.961426 4.71279C0.961426 4.56781 1.01902 4.42876 1.12154 4.32624C1.22406 4.22372 1.36311 4.16612 1.50809 4.16612H4.60587V1.06835C4.60587 0.923364 4.66346 0.784317 4.76598 0.681798C4.8685 0.579278 5.00755 0.521683 5.15253 0.521683Z" fill="white"/>
                </svg>
            </span>
            <span class="text-sm font-normal text-blue-custom">Añadir nueva empresa</span>
        </div>
    </aside>
    <main class="flex-1 bg-[#f8f8f8] h-screen overflow-y-auto">
        <div class="bg-white border flex">
            <div class="lg:hidden py-[19px] px-[18px] border-r cursor-pointer" id="menuBtn">
                <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.8 0C0.587827 0 0.384344 0.0842856 0.234315 0.234315C0.0842854 0.384344 0 0.587827 0 0.8C0 1.01217 0.0842854 1.21566 0.234315 1.36569C0.384344 1.51571 0.587827 1.6 0.8 1.6H20C20.2122 1.6 20.4157 1.51571 20.5657 1.36569C20.7157 1.21566 20.8 1.01217 20.8 0.8C20.8 0.587827 20.7157 0.384344 20.5657 0.234315C20.4157 0.0842856 20.2122 0 20 0H0.8ZM0 7.2C0 6.98783 0.0842854 6.78434 0.234315 6.63431C0.384344 6.48429 0.587827 6.4 0.8 6.4H20C20.2122 6.4 20.4157 6.48429 20.5657 6.63431C20.7157 6.78434 20.8 6.98783 20.8 7.2C20.8 7.41217 20.7157 7.61566 20.5657 7.76568C20.4157 7.91571 20.2122 8 20 8H0.8C0.587827 8 0.384344 7.91571 0.234315 7.76568C0.0842854 7.61566 0 7.41217 0 7.2ZM0 13.6C0 13.3878 0.0842854 13.1843 0.234315 13.0343C0.384344 12.8843 0.587827 12.8 0.8 12.8H20C20.2122 12.8 20.4157 12.8843 20.5657 13.0343C20.7157 13.1843 20.8 13.3878 20.8 13.6C20.8 13.8122 20.7157 14.0157 20.5657 14.1657C20.4157 14.3157 20.2122 14.4 20 14.4H0.8C0.587827 14.4 0.384344 14.3157 0.234315 14.1657C0.0842854 14.0157 0 13.8122 0 13.6Z" fill="#232323" fill-opacity="0.5"/>
                </svg>
            </div>
            <div class="flex flex-1 justify-between px-5 py-2">
                <div class="bg-profile-blue-bg font-semibold text-sm leading-3 px-3 py-2 rounded-full flex gap-2 items-center cursor-pointer">
                    <span class="p-1 rounded-full">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5C4.5 6.981 6.519 9 9 9C11.481 9 13.5 6.981 13.5 4.5C13.5 2.019 11.481 0 9 0C6.519 0 4.5 2.019 4.5 4.5ZM17 19H18V18C18 14.141 14.859 11 11 11H7C3.14 11 0 14.141 0 18V19H17Z" fill="#00AAE3" fill-opacity="0.5"/>
                        </svg>
                    </span>
                    <span class="text-gray-title text-sm font-medium leading-6">
                        Gestoria Sanchez
                    </span>
                </div>
                <div class="flex gap-3 items-center">
                    <div class="flex items-center gap-2">
                        <div class="text-white py-2 bg-orange-custom rounded-md px-1 font-medium text-sm">22</div>
                        <span class="text-sm font-normal">Post disponibles</span>
                    </div>
                    <button class="px-3 py-2 leading-4 bg-gradient-to-r from-plan-from-gradient to-plan-to-gradient font-normal text-sm rounded-md">Mejorar plan</button>
                    <div class="w-[36px] h-[36px]">
                        <img src="/images/avatar.png">
                    </div>
                </div>
            </div>
        </div>
        <main>
            {{ $slot }}
        </main>
    </main>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @yield('scripts')
    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                prevEl: ".prev",
                nextEl: ".next",
            },
            breakpoints: {
                1366: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                744: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
            }
        });
        const menuBtn = document.querySelector('#menuBtn'),
            menu = document.querySelector('aside'),
            menuBackdrop = document.querySelector('#menuBackdrop');

        menuBtn.addEventListener('click', () => {
            menuBackdrop.classList.toggle('menu-mobile-backdrop')
            menu.classList.toggle('menu-mobile')
        })

        menuBackdrop.addEventListener('click', () => {
            menuBackdrop.classList.remove('menu-mobile-backdrop')
            menu.classList.remove('menu-mobile')
        });
    </script>
</body>

</html>
