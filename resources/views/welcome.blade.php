{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en-US">

<head>
    <script>
        ! function() {
            var reb2b = window.reb2b = window.reb2b || [];
            if (reb2b.invoked) return;
            reb2b.invoked = true;
            reb2b.methods = ["identify", "collect"];
            reb2b.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    reb2b.push(args);
                    return reb2b;
                };
            };
            for (var i = 0; i < reb2b.methods.length; i++) {
                var key = reb2b.methods[i];
                reb2b[key] = reb2b.factory(key);
            }
            reb2b.load = function(key) {
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.async = true;
                script.src = "https://s3-us-west-2.amazonaws.com/b2bjsstore/b/" + key + "/reb2b.js.gz";
                var first = document.getElementsByTagName("script")[0];
                first.parentNode.insertBefore(script, first);
            };
            reb2b.SNIPPET_VERSION = "1.0.1";
            reb2b.load("9NMMZHP7R5NW");
        }();
    </script>
    <title>Leading Service Provider in the Amazon FBA Industry | Product Photography, Listing Optimization, PPC, A+
        Content</title>
    <meta name='description'
        content="AMZ One Step experts always pursue achieving the best results for your Amazon listings when it comes to Amazon Listing Optimization, Amazon Product Photography, Amazon Videography, Amazon PPC Services, Amazon EBC services &amp; Account management.">
    <meta name='keywords'
        content="Amazon Listing Optimization service, amazon listing images, amazon product listing optimization service, Amazon Product Photography services usa, Amazon Videography services, Amazon EBC services, amazon a plus content, Amazon ebc service, Amazon Seo, amazon listing images">
    <link rel="canonical" href="https://www.amzonestep.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <meta name='viewport' content="width=device-width, initial-scale=1">
    <meta name='csrf-token' content="4IGcgkc4sWR9nOge6qPIYYfB01P0l4BcuyV2AVjq" />
    <meta name='google-site-verification' content="RL2dOpYqmUnbxH3ds9rM5MRR4vfVGSNDtHghjzv_8dE" />
    <meta name="facebook-domain-verification" content="f6wn9lfcb28q72c12n5fj4zxhcnjqg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@amzonestep" />
    <meta name="twitter:title" content="AMZ One Step - Amazon Product Photography" />
    <meta name="twitter:description"
        content="AMZ One Step provides wide range of services for Amazon Sellers in Listing Optimization, Product Photography, AMZ WordSpy Keyword Tool, EBC and PPC." />
    <meta name="twitter:image" content="https://www.amzonestep.com/front/images/logo.png" />
    <meta name="google-site-verification" content="nf5QE3UIUM3PysFs35JXvIthPxdMbnhtvsSIpkenQXs"   />
    <meta name="robots" content="index, follow">


    <meta property="og:locale" content="en_US">
    <meta property="og:title"
        content="Leading Service Provider in the Amazon FBA Industry | Product Photography, Listing Optimization, PPC, A+ Content">
    <meta property="og:description"
        content="AMZ One Step experts always pursue achieving the best results for your Amazon listings when it comes to Amazon Listing Optimization, Amazon Product Photography, Amazon Videography, Amazon PPC Services, Amazon EBC services &amp; Account management.">
    <meta property="og:image" content="https://www.amzonestep.com/front/images/AMZOneStep.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="100">
    <link rel="shortcut icon" href="https://www.amzonestep.com/front/images/amz-fav-icon.png">


    <!-- Google Tag Manager -->
    <script async defer>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W4773SM');
    </script>
    <!-- End Google Tag Manager -->




    <!-- BOBBY SALES SOFTWARE SERVICE-->
    <script async defer type="text/javascript">
        var _ss = _ss || [];
        _ss.push(['_setDomain', 'https://koi-3QNNKO87G6.marketingautomation.services/net']);
        _ss.push(['_setAccount', 'KOI-4BGY51R0I0']);
        _ss.push(['_trackPageView']);
        (function() {
            var ss = document.createElement('script');
            ss.type = 'text/javascript';
            ss.async = true;
            ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'koi-3QNNKO87G6.marketingautomation.services/client/ss.js?ver=2.4.0';
            var scr = document.getElementsByTagName('script')[0];
            scr.parentNode.insertBefore(ss, scr);
        })();
    </script>


    <!-- Global site tag (gtag.js) - Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-595966944"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-595966944');
    </script>


    <!-- Microsoft Clarity Tracking Code -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "gq2e9culbq");
    </script>

    <!-- Meta Pixel Code overall-->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4189385028045091');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=4189385028045091&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Schema -->





    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "AMZ One Step",
            "alternateName": "productphoto",
            "url": "https://www.amzonestep.com",
            "logo": "https://www.amzonestep.com/images/logo.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1 888 310 0066",
                "contactType": "",
                "areaServed": "US",
                "availableLanguage": "en"
            },
            "sameAs": "https://www.instagram.com/amzonestep/"
        }
    </script>
    <!-- End -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages = document.querySelectorAll("img.lazy");
            var lazyloadThrottleTimeout;

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        });
    </script>









</head>

<body>
    <!-- Google Tag Manager (script) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4773SM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (script) -->


    <link rel="stylesheet" href="https://www.amzonestep.com/front/js/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.amzonestep.com/front/js/dist/css/fa.css">
    <link rel="stylesheet" href="https://www.amzonestep.com/front/css/main.css?v=1.1.95" rel="stylesheet"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://www.amzonestep.com/front/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.amzonestep.com/front/js/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css?ver=5.9.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css"
        onload="this.media='all'">

    <style>
        .btn-cta,
        .btn-outline-secondary,
        .btn-primary {
            min-width: 125px;
            font-size: 17px;
        }

        .navbar a.nav-link {
            width: 100%
        }

        .radio-inline {
            position: relative;
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: 400;
            vertical-align: middle;
            cursor: pointer;
        }

        .radio-inline input[type=radio] {
            margin-left: 15px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
            font-size: 18px;
            letter-spacing: 0.5px;
        }

        .theme-input-style {
            border: 0;
            /* border-bottom: 1px solid #F57917 !important; */
            height: 50px;
            width: 100%;
            padding: 0 20px;
        }

        input:focus {
            outline: 0;
        }

        .form-container {
            box-shadow: 0 5px 40px rgb(0 0 0 / 5%);
            /* border-top: 10px solid #071630; */
            /* width: 50%; */
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .asterisk {
            color: red;
            margin-left: 3px;
        }

        .klaviyo_header {
            font-size: 50px;
        }

        #email-error,
        #phone-error {
            display: none;
            color: red;
            font-size: 15px;
            font-weight: normal;
            padding-top: 5px;
        }

        .donthide {
            opacity: 1 !important;
            visibility: visible;
            display: block !important;
        }

        .telephone {
            font-size: 1.5rem;
            text-decoration: none !important;
            color: #F5812A;
        }

        .telephone:hover {
            color: #F5812A !important;
        }

        .radio-img {
            width: 180px;
            height: 180px;
            padding: 20px;
            cursor: pointer;
        }

        .shadow-box {
            box-shadow: 0 0px 25px 4px #d5d5d5 !important;
            position: relative !important;
            display: inline-block;
            border-style: solid !important;
            border-width: 0px !important;
            border-color: rgba(0, 0, 0, 0) !important;
            background-color: rgba(0, 0, 0, 0) !important;
            transition: border 0.3s ease !important;
            background: rgb(255, 255, 255) !important;
            width: 250px;
            height: 200px;
        }

        .radioSize {
            width: 70%;
            height: 7.5em;
        }

        .radioSize2 {
            width: 100%;
            height: 6.5em;
        }

        .hide-radio {
            top: 15%;
            left: 23%;
            opacity: 0;
            cursor: pointer;
        }

        .hide-radio2 {
            top: 8%;
            left: 9%;
            opacity: 1;
            cursor: pointer;
        }

        /*[type=radio] {*/

        /*    position: absolute;*/

        /*    opacity: 1;*/

        /*}*/

        [type=radio]+img,
        [type=radio]+h2 {
            cursor: pointer;
        }

        .label-text {
            font-size: 17px;
            font-weight: bold;
        }

        #msform .action-button {
            float: none;
        }

        .container-box {
            display: flex;
        }

        @media only screen and (max-width:768px) {
            .container-box {
                display: block;
            }
        }

        .shadow-box+input[type=radio] {
            cursor: pointer;
        }

        input[type=radio]:checked+.radio-img {
            background-color: #f6b17d;
        }

        input[type=radio]:checked+.radio-h2 {
            background-color: #f6b17d;
        }

        /*input[type=radio]:checked + .box {*/

        /*    color: white;*/

        /*    transform: translateY(70px);*/

        /*}*/

        /*.middle input[type=radio]:checked + .box span:before {*/

        /*    transform: translateY(0px);*/

        /*    opacity: 1;*/

        /*}*/

        /*.middle .box {*/

        /*    width: 200px;*/

        /*    height: 200px;*/

        /*    background-color: #fff;*/

        /*    transition: all 250ms ease;*/

        /*    will-change: transition;*/

        /*    display: inline-block;*/

        /*    text-align: center;*/

        /*    cursor: pointer;*/

        /*    position: relative;*/

        /*    font-family: "Inter", sans-serif;*/

        /*    font-weight: 900;*/

        /*}*/

        .form-check .radio-img:active {
            transform: translateY(10px);
        }

        .form-check .radio-img {
            left: 0;
            right: 0;
            transition: all 300ms ease;
            user-select: none;
        }

        .form-check .radio-img:before {
            font-size: 1.2em;
            font-family: FontAwesome;
            display: block;
            transform: translateY(-80px);
            opacity: 0;
            transition: all 300ms ease-in-out;
            font-weight: normal;
            color: white;
        }

        input[type=radio]:not(:disabled)~.box {
            cursor: pointer;
        }

        input[type=radio]:checked+.box:before {
            color: #3d3f43;
            font-family: FontAwesome;
            border: 2px solid #00c2c3;
            content: "\f00c";
            font-size: 24px;
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background: white;
            box-shadow: 0px 2px 5px -2px rgb(0 0 0 / 25%);
        }

        input[type=radio]:checked+.box:after {
            color: #3d3f43;
            font-family: FontAwesome;
            border: 2px solid #00c2c3;
            content: "\f00c";
            font-size: 24px;
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background: white;
            box-shadow: 0px 2px 5px -2px rgb(0 0 0 / 25%);
        }

        span.text-lite {
            font-weight: normal;
        }

        .bg-gray {
            background: #f8f8f8;
        }

        .shadowbox {
            box-shadow: 0 2px 6px -2px rgb(0 0 0 / 50%);
        }

        .shadowbox:hover {
            background: #efefef;
        }

        .checkBoxIcon {
            float: right;
            position: static;
            margin-top: 10px;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .select-input {
            border-color: #f3f3f3;
            background-color: #f3f3f3;
            border: 0;
            height: 50px;
            width: 100%;
            padding: 0 20px;
            outline: 0;
        }

        .error-box {
            text-align: center;
            justify-content: center;
            display: flex;
        }

        .error-msg {
            color: rgb(245, 129, 42);
            display: none;
            margin-top: 10px;
        }

        .other-input {
            display: none;
        }

        .steps {
            font-size: 20px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right;
        }

        .form-check {
            padding-left: 0px;
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
            max-width: 880px;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left;
            color: #fff;
        }

        /* #msform fieldset:not(:first-of-type) {
            display: none;
        } */

        #msform .action-button {
            width: 140px;
            background: #00B4A7;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 0px 0px 10px 5px;
            /* float: right; */
            height: 44px;
            border-radius: 8px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #00B4A7;
        }

        #msform .action-button-previous {
            width: 100px;
            background: #F5812A;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            /*float: right;*/
            border-radius: 38px;
        }

        a.navbar-brand {
            margin-left: 40px;
        }

        input[type="checkbox"] {
            transform: scale(1.5);
            accent-color: black;
            cursor: pointer;
        }

        input[type="radio"] {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Chrome, Safari, Opera */
            transform: scale(1.5);
        }

        .servicesName {
            height: 480px;
            overflow-y: unset;
        }

        .servicesName option:checked {
            background: orange !important;
            color: white;
        }

        textarea.asinURL {
            outline: none;
            height: 40px;
            margin-top: 15px;
        }

        .servicesName option::before {
            content: "";
        }

        .servicesName option:checked::after {
            background: #080807 !important;
            color: white;
            content: "\2713";
            margin-left: 10px;
        }

        .country_code,
        strategy_services {
            width: 0px;
            padding: 0;
            margin: 0;
        }

        .multiselect_revenue {
            font-size: 14px;
            height: 40px;
            width: 100%;
            line-height: 35px;
            border-radius: 4px;
            box-shadow: none;
            outline: none;
            background-color: #fff;
            color: #444f5b;
            border: 1px solid #d9dbde;
            font-weight: 400;
            padding: 0 20px;
            margin: 0;
            transition: .1s border-color ease-in-out;
            cursor: pointer;
        }

        /*Multiselect Services Styling*/

        .multiSelect {
            width: 100%;
            position: relative;
        }

        .multiSelect *,
        .multiSelect *::before,
        .multiSelect *::after {
            box-sizing: border-box;
        }

        .multiSelect_dropdown {
            font-size: 14px;
            min-height: 35px;
            line-height: 35px;
            border-radius: 4px;
            box-shadow: none;
            outline: none;
            background-color: #fff;
            color: #444f5b;
            border: 1px solid #d9dbde;
            font-weight: 400;
            padding: 0.5px 13px;
            margin: 0;
            transition: .1s border-color ease-in-out;
            cursor: pointer;
        }

        .multiSelect_dropdown.-hasValue {
            padding: 5px 30px 5px 5px;
            cursor: default;
        }

        .multiSelect_dropdown.-open {
            box-shadow: none;
            outline: none;
            padding: 4.5px 29.5px 4.5px 4.5px;
            border: 1.5px solid #d9dbde;
        }

        .multiSelect_arrow::before,
        .multiSelect_arrow::after {
            content: '';
            position: absolute;
            display: block;
            width: 2px;
            height: 8px;
            border-radius: 20px;
            border-bottom: 8px solid #99A3BA;
            top: 40%;
            transition: all .15s ease;
        }

        .multiSelect_arrow::before {
            right: 18px;
            -webkit-transform: rotate(-50deg);
            transform: rotate(-50deg);
        }

        .multiSelect_arrow::after {
            right: 13px;
            -webkit-transform: rotate(50deg);
            transform: rotate(50deg);
        }

        .multiSelect_list {
            margin: 0;
            margin-bottom: 25px;
            padding: 0;
            list-style: none;
            opacity: 0;
            visibility: hidden;
            position: absolute;
            max-height: calc(10 * 31px);
            top: 28px;
            left: 0;
            z-index: 9999;
            right: 0;
            background: #fff;
            border-radius: 4px;
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            transition: opacity 0.1s ease, visibility 0.1s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
            transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
            transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
            -webkit-transform: scale(0.8) translate(0, 4px);
            transform: scale(0.8) translate(0, 4px);
            border: 1px solid #d9dbde;
            box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.12);
        }

        .multiSelect_option {
            margin: 0;
            padding: 0;
            opacity: 0;
            -webkit-transform: translate(6px, 0);
            transform: translate(6px, 0);
            transition: all .15s ease;
        }

        .multiSelect_option.-selected {
            display: none;
        }

        .multiSelect_option:hover {
            color: white;
            background: #F5812A;
        }

        .multiSelect_text {
            cursor: pointer;
            display: block;
            padding: 5px 13px;
            color: #525c67;
            font-size: 14px;
            text-decoration: none;
            outline: none;
            position: relative;
            transition: all .15s ease;
        }

        .multiSelect_list.-open {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1) translate(0, 12px);
            transform: scale(1) translate(0, 12px);
            transition: opacity 0.15s ease, visibility 0.15s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
            transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
            transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        }

        .multiSelect_list.-open+.multiSelect_arrow::before {
            -webkit-transform: rotate(-130deg);
            transform: rotate(-130deg);
        }

        .multiSelect_list.-open+.multiSelect_arrow::after {
            -webkit-transform: rotate(130deg);
            transform: rotate(130deg);
        }

        .multiSelect_list.-open .multiSelect_option {
            opacity: 1;
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(1) {
            transition-delay: 10ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(2) {
            transition-delay: 20ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(3) {
            transition-delay: 30ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(4) {
            transition-delay: 40ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(5) {
            transition-delay: 50ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(6) {
            transition-delay: 60ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(7) {
            transition-delay: 70ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(8) {
            transition-delay: 80ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(9) {
            transition-delay: 90ms;
        }

        .multiSelect_list.-open .multiSelect_option:nth-child(10) {
            transition-delay: 100ms;
        }

        .multiSelect_choice {
            /*background: rgba(77, 132, 254, 0.1);*/
            background: black;
            color: white;
            padding: 4px 8px;
            line-height: 17px;
            margin: 5px;
            display: inline-block;
            font-size: 13px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
        }

        .multiSelect_deselect {
            width: 12px;
            height: 12px;
            display: inline-block;
            stroke: #b2bac3;
            stroke-width: 4px;
            margin-top: -1px;
            margin-left: 2px;
            vertical-align: middle;
        }

        .multiSelect_choice:hover .multiSelect_deselect {
            stroke: #a1a8b1;
        }

        .multiSelect_noselections {
            text-align: center;
            padding: 7px;
            color: #b2bac3;
            font-weight: 450;
            margin: 0;
        }

        .multiSelect_placeholder {
            position: absolute;
            left: 20px;
            font-size: 14px;
            top: 8px;
            padding: 0 4px;
            background-color: #fff;
            color: #b8bcbf;
            pointer-events: none;
            transition: all .1s ease;
        }

        .multiSelect_dropdown.-open+.multiSelect_placeholder,
        .multiSelect_dropdown.-open.-hasValue+.multiSelect_placeholder {
            top: -11px;
            left: 17px;
            color: #444f5b;
            font-size: 13px;
        }

        .multiSelect_dropdown.-hasValue+.multiSelect_placeholder {
            top: -11px;
            left: 17px;
            color: #6e7277;
            font-size: 13px;
        }

        button#submitBtn {
            padding: 0px 14px !important;
            /* width: fit-content !important; */
        }

        /*Multiselect Services Styling*/

        .intl-tel-input {
            width: 100% !important;
        }

        * {
            /* font-family:'Montserrat', sans-serif; */
        }

        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100% !important;
        }

        @media screen and (max-width:768px) {
            .form-container {
                width: 100%;
                max-width: 90%;
            }
        }

        #msform fieldset {
            background: transparent !important;
        }

        .contact-us .card.px-4.pt-4.pb-0.mb-3 {
            background: transparent !important;
            color: #fff !important;
        }

        #msform {
            margin: auto !important;
        }

        label {
            color: #fff !important;
        }

        h2.steps {
            font-size: 58px;
            line-height: 58px !important;
            margin-bottom: 40px;
            text-align: left
        }

        section.contact-us {
            padding-top: 0px;
            padding-bottom: 0px;
        }
    </style>
    <main>
        <div id="header" class="container-fluid sticky-top bg-transparent" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row justify-content-center align-items-center" bis_skin_checked="1">

                    <div class="col-md-4 col-lg-2  col-sm-4 col-6" bis_skin_checked="1">
                        <a class="navbar-brand col-lg-3 me-0" href="/"><img
                                src="https://amzonestep.com/front/images/amz-one-step-logo-white.png"
                                style="width:150px;" alt="AMZ One Step"></a>
                    </div>
                    <div class="col-md-2 col-lg-6 col-sm-2 col-6 order-2 order-sm-2 order-md-2 order-lg-1"
                        bis_skin_checked="1">

                        <nav class="navbar navbar-expand-lg" aria-label="Thirteenth navbar example">
                            <div class="container-fluid" bis_skin_checked="1">
                                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarsExample11" aria-controls="navbarsExample11"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11"
                                    bis_skin_checked="1" style="">
                                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="https://amzonestep.com">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-product-photography">Amazon
                                                        Product Photography</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-product-video-services">Amazon
                                                        Product Videography</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-listing-optimization">Amazon
                                                        Listing Optimization</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-ppc-service">Amazon
                                                        PPC
                                                        Management</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-enhanced-brand-content-service">A+
                                                        Content/EBC Service</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-account-management">Amazon
                                                        Account Management</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/product-packaging-design">Product
                                                        Packaging</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-product-3d-rendering">Amazon
                                                        3D
                                                        Rendering</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-product-ranking">Amazon
                                                        Keyword Ranking</a></li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/services/amazon-posts-management">Amazon
                                                        Posts Management</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link" href="https://amzonestep.com/portfolio">Portfolio</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="https://amzonestep.com/aboutus">About</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/blog/">Blog</a></li>
                                                <li><a class="dropdown-item" href="/blog/category/case-study/">Case
                                                        Studies</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="https://amzonestep.com/community">VIP
                                                        Community</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item d-flex d-md-none">
                                            <a class="nav-link" href="https://amzonestep.com/strategy-book-call">Start
                                                a Project
                                            </a>
                                        </li>
                                        <li class="nav-item d-flex d-md-none">
                                            <a class="nav-link" href="https:/amzonestep.spp.io">Client Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                    <div class="col-lg-2 col-md-6 d-lg-flex d-sm-flex d-none col-lg-4 col-sm-6 col-9 order-1 order-sm-1 order-md-1 order-lg-2 justify-content-end "
                        bis_skin_checked="1">
                        <div class="d-lg-flex d-md-flex d-none col-lg-12 gap-2 col-12 col-md-12 justify-content-lg-end"
                            bis_skin_checked="1">
                            <a href="https://amzonestep.com/strategy-book-call"
                                class="btn btn-primary project-cta">Start a
                                Project</a>
                            <a href="https://amzonestep.spp.io"
                                class="btn btn-primary project-cta client-login ">Client Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="first-section">
            <div class="container-fluid" id="main-header">
                <div class="container">
                    <div class=" banner-hp px-4 pt-5 my-5 text-center">
                        <h1 class="white">Boost Your <span class="line1">amazon sales</span> by 30% With
                            High-Converting Creatives</h1>
                        <div class="col-lg-12">
                            <p class="lead mb-4">Without wasting money on expensive ads, product giveaways, and
                                time-consuming launch strategies.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                                <a href="javascript:void(0);" class="btn btn-primary btn-lg px-4 me-sm-3"
                                    onclick="document.getElementById('leadsform').scrollIntoView({behavior: 'smooth'});">
                                    Book a Consultation
                                </a>
                                <a href="https://www.amzonestep.com/portfolio"
                                    class="btn btn-outline-secondary btn-lg px-4">See
                                    Portfolio</a>
                            </div>
                        </div>
                        <div class="overflow-hidden" style="max-height: 70vh;margin-top:100px">
                            <div class="container px-5">
                                {{-- <img src="https://www.amzonestep.com/front/images/6000-brands-trust-us.png"
                                    class="img-fluid mb-4" alt="6000 brands trust us"> --}}
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 spotlight">
                                <img class="img-fluid mobile-show"
                                    src="https://www.amzonestep.com/front/images/spot-mobile.png"
                                    alt="Spotlight Appearances">

                                <img class="desktop-show" style="float:left;"
                                    src="https://www.amzonestep.com/front/images/spotlight-appearances.png"
                                    alt="Spotlight Appearances">
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="brand-logo owl-carousel">
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/white-label.png"
                                            alt="White Label logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/pick-fu.png"
                                            alt="PickFu logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/amz-finder.png"
                                            alt="AMZ Finder logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/helium-10.png"
                                            alt="Helium 10 logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/lunch-with-norm.png"
                                            alt="Lunch With Norm logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/forbes.png"
                                            alt="Forbes logo">
                                    </span>
                                    <span class="single-brand-logo">
                                        <img src="https://www.amzonestep.com/front/images/orange-klink.png"
                                            alt="Orange Klik logo">
                                    </span>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
    <div class="brand-logo owl-carousel">
        @foreach($spotlights as $spotlight)
            <span class="single-brand-logo">
                <img src="{{ asset($spotlight->image) }}" 
                     alt="Spotlight Logo {{ $loop->iteration }}">
            </span>
        @endforeach
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="video">
            <div class="container">
                <div class="row featurette">
                    <div class="col-md-12 col-lg-6 align-self-center">
                        <h2 class="featurette-heading fw-normal mb-2 lh-1">THE #1 CREATIVES AND ADS AGENCY</h2>
                        <p class="lead">AMZ One Step is a creatives and advertising agency trusted by some of the top
                            agencies, renowned experts and big brands on Amazon.</p>
                        <p class="lead" style="font-weight:500">Work with a global team of strategists on a project
                            basis or subscription plans - designed to meet your outsourcing needs.</p>
                        <a href="#leadsform" class="btn-cta mb-4">Get a Quote <img loading="lazy"
                                src="https://www.amzonestep.com/front/images/cta-icon.png"
                                alt="Get a Quote from AZM One Step" /></a>
                    </div>
                    <div class="col-md-12 col-lg-6 ">
                        <video controls playsinline width="100%" height="auto"
                            poster="https://www.amzonestep.com/front/images/thumb.png">
                            <source src="https://www.amzonestep.com/front/videos/video-intro.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <section id="why-brands">
            <div class="container">
                <div class="row text-center">
                    <h2 class="mb-5"><span class="line2">Why Brands Love Us</span></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-sm-2 g-4 text-center">
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <p class="card-title">Your Amazon Dream Team, Under One Roof</p>
                                <p class="card-text">With a team of 150+ specialists, we manage all aspects of Amazon
                                    Creatives and Advertising. From research, photography, and design to ad management,
                                    we handle everything in-house. No need for multiple vendors. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <p class="card-title">Data Driven <br>Creatives</p>
                                <p class="card-text">Our Creatives don’t just look good, we back them up by data. On
                                    average our Creatives increase Conversion Rates by 20%, driving growth in sales. Ask
                                    us about our Conversion Guarantee Program.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <p class="card-title">Worldwide <br>Coverage</p>
                                <p class="card-text"> No matter where you are, we can pick up your samples from your
                                    doorstep and deliver them to one of our studios. We work with you in your timezone
                                    and pride ourselves on quick response times.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <p class="card-title">Flexible in Every Aspect</p>
                                <p class="card-text"> Whether you want full end to end packages or just need us for
                                    photography/design, we got you covered. If you are not happy with the results, we
                                    work with you until you are.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="blue-bg-2">
            <div class="container-fluid">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="text-center white mb-5"><span class="line3">Store front Portfolio</span></h2>
                            <style>
                                .portfolio-animation .owl-item {
                                    text-align: center;
                                    transition: transform 0.3s ease, opacity 0.3s ease;
                                }

                                .portfolio-animation .item img {
                                    width: 100%;
                                    transition: transform 0.3s ease;
                                }

                                .scale-70 img {
                                    transform: scale(0.7);
                                }

                                .scale-80 img {
                                    transform: scale(0.8);
                                }

                                .scale-90 img {
                                    transform: scale(0.9);
                                }

                                .scale-100 img {
                                    transform: scale(1);
                                }
                            </style>
                            {{-- <div class="portfolio-animation owl-carousel owl-theme">
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio01.png"
                                        alt="Portfolio 1" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio02.png"
                                        alt="Portfolio 2" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio03.png"
                                        alt="Portfolio 3" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio04.png"
                                        alt="Portfolio 4" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/porfolio-50.png"
                                        alt="Portfolio 5" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio06.png"
                                        alt="Portfolio 5" loading="lazy"></div>
                                <div class="item"><img width="251px" height="520px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/portfolio07.png"
                                        alt="Portfolio 5" loading="lazy"></div>
                            </div> --}}
                            <div class="portfolio-animation owl-carousel owl-theme">
                                @foreach ($frontportfolios as $portfolio)
                                    <div class="item">
                                        <img width="251px" height="520px" class="img-fluid"
                                            src="{{ asset($portfolio->image) }}"
                                            alt="Portfolio Image {{ $loop->iteration }}" loading="lazy">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <style>
                            .large-image-carousel .item img {
                                max-width: 872px;
                                height: auto;
                                object-fit: contain;
                            }

                            .thumbnail-carousel .item img {
                                cursor: pointer;
                                /* max-width: 100px;
                                    border: 2px solid transparent;*/
                            }

                            .thumbnail-carousel .item img.active {
                                border-color: #007bff;
                            }

                            .thumbnail-carousel {
                                margin-top: 20px;
                            }
                        </style>
                        {{-- <div class="col-md-10 col-lg-8  mx-auto">
                            <h2 class="text-center mt-5 mb-5 white"><span class="line4">Product Images</span></h2>
                            <!-- Large Image Carousel -->
                            <div id="largeImageCarousel" class="owl-carousel owl-theme large-image-carousel ">
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image1.png"
                                        alt="Image 1"></div>
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image2.png"
                                        alt="Image 2"></div>
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image3.png"
                                        alt="Image 3"></div>
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image4.png"
                                        alt="Image 4"></div>
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image5.png"
                                        alt="Image 5"></div>
                                <div class="item"><img width="856px" height="481px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image6.png"
                                        alt="Image 6"></div>
                            </div>
                            <!-- Thumbnail Carousel -->
                            <div id="thumbnailCarousel" class="owl-carousel owl-theme thumbnail-carousel">
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image1.png"
                                        alt="Image 1"></div>
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image2.png"
                                        alt="Image 2"></div>
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image3.png"
                                        alt="Image 3"></div>
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image4.png"
                                        alt="Image 4"></div>
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image5.png"
                                        alt="Image 5"></div>
                                <div class="item"><img width="139px" height="78px" class="img-fluid"
                                        src="https://www.amzonestep.com/front/images/product-image6.png"
                                        alt="Image 6"></div>
                            </div>
                        </div> --}}
                        <div class="col-md-10 col-lg-8 mx-auto">
    <h2 class="text-center mt-5 mb-5 white"><span class="line4">Product Images</span></h2>
    
    <!-- Large Image Carousel -->
    <div id="largeImageCarousel" class="owl-carousel owl-theme large-image-carousel">
        @foreach($productimages as $image)
            <div class="item">
                <img width="856px" height="481px" class="img-fluid"
                     src="{{ asset($image->image) }}"
                     alt="Product Image {{ $loop->iteration }}">
            </div>
        @endforeach
    </div>

    <!-- Thumbnail Carousel -->
    <div id="thumbnailCarousel" class="owl-carousel owl-theme thumbnail-carousel">
        @foreach($productimages as $image)
            <div class="item">
                <img width="139px" height="78px" class="img-fluid"
                     src="{{ asset($image->image) }}"
                     alt="Product Image {{ $loop->iteration }}">
            </div>
        @endforeach
    </div>
</div>


                        <h2 class="text-center mt-5 mb-5 white"><span class="line5">A+ content</span></h2>
                    </div>
                </div>
                <div class="text-center"><img src="https://www.amzonestep.com/front/images/a-plus-content.png"
                        width="1555px" height="463px" class="img-fluid" alt="Image 6">
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6  align-self-center">
                        <h2><span class="line6">Our Services</span></h2>
                        <h3 class="services-subheading">Amazon Listing Images</h3>
                        <h3 class="services-subheading">Listing Video</h3>
                        <h3 class="services-subheading">A+ Content</h3>
                        <h3 class="services-subheading">Copywriting</h3>
                        <h3 class="services-subheading">3D Rendering</h3>
                        <h3 class="services-subheading">Storefront Design</h3>
                        <h3 class="services-subheading services-last">PPC Management</h3>
                    </div>
                    <div class="col-md-1">
                        <h2></h2>
                    </div>
                    <div class="col-md-5">
                        <h2><span class="line6">How it works</span></h2>
                        <div class="row row-cols-1 row-cols-md-1 row-cols-sm-2 g-1 how-it-works">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="steps gray">Step 1</h2>
                                        <p class="card-title">Request a quote/ Book a Call</p>
                                        <p class="card-text">We have a custom approach for every product. We recommend
                                            you either request a quote or schedule a complimentary discovery call. We
                                            will provide you with a customized quote that fits your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="steps gray">Step 2</h2>
                                        <p class="card-title">Onboarding & Sample Shipment</p>
                                        <p class="card-text">After order confirmation, you will be directed to our
                                            client portal where you will see the onboarding steps. Depending on the
                                            project scope, we may require a product sample. Our shipping options will be
                                            shared inside
                                            the portal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="steps gray">Step 3</h2>
                                        <p class="card-title">Strategy & Planning</p>
                                        <p class="card-text">Our team will conduct research and create plans based on
                                            the information provided in the form. It will be presented to you before
                                            execution to get your input and feedback.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="steps gray">Step 4</h2>
                                        <p class="card-title">Deliver & Feedback</p>
                                        <p class="card-text">We deliver the first draft within 2-4 weeks of receiving
                                            your sample. If you need any changes, we provide multiple sets of revisions.
                                            Please consult with your project manager for more accurate timelines based
                                            on
                                            the scope.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="#leadsform" class="btn-cta-big">Get a Free
                            Consultation
                            <img loading="lazy" src="https://www.amzonestep.com/front/images/cta-icon.png"
                                alt="Get a Quote from AZM One Step" /></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div class="container-fluid blue-bg">
                <div class="row">
                    <h2 class="text-center green"><span class="line9">Testimonials Video</span></h2>
                    <p class="text-center">This is what our clients have to say about us.</p>
                    <div class="col-md-12 owl-theme mb-4">
                        <!-- Partners -->
                        <div class="testimonials-video">
                            <video controls playsinline width="100%"
                                poster="https://www.amzonestep.com/front/images/testimonial-video1.png"
                                style="max-width: 100%; height: auto;">
                                <source src="https://www.amzonestep.com/front/images/testimonials.mp4"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 mb-3">
                        <!-- Partners -->
                        <div class="testimonials-one owl-carousel">
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-1.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-2.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-3.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-4.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-5.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 pb-5">
                        <!-- Partners -->
                        <div class="testimonials-two owl-carousel">
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-6.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-7.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-8.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-9.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                            <div class="single-brand-logo">
                                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                                    src="https://www.amzonestep.com/front/images/testimonial-10.png"
                                    alt="AMZ One Step Testimonials">
                            </div>
                        </div>
                    </div> --}}

                    @php
    $half = ceil($testimonials->count() / 2); 
    $firstRow = $testimonials->take($half);
    $secondRow = $testimonials->skip($half);
@endphp

<div class="col-md-12 mb-3">
    <!-- Testimonials Row 1 -->
    <div class="testimonials-one owl-carousel">
        @foreach($firstRow as $testimonial)
            <div class="single-brand-logo">
                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                     src="{{ asset($testimonial->image) }}"
                     alt="Testimonial Image {{ $loop->iteration }}">
            </div>
        @endforeach
    </div>
</div>

<div class="col-md-12 mb-4 pb-5">
    <!-- Testimonials Row 2 -->
    <div class="testimonials-two owl-carousel">
        @foreach($secondRow as $testimonial)
            <div class="single-brand-logo">
                <img loading="lazy" width="437px" height="250px" class="img-fluid"
                     src="{{ asset($testimonial->image) }}"
                     alt="Testimonial Image {{ $loop->iteration + $half }}">
            </div>
        @endforeach
    </div>
</div>

                </div>
            </div>
        </section>
        <section id="vip-access">
            <div class="container-fluid ">
                <div class="container">
                    <div class="row vip-access">
                        <div class="col-md-6 vip-left-col align-self-center">
                            <h2><span class="line10">access to amz one step Vip</span></h2>
                            <p>Only available for AMZ One Step clients</p>
                            <ul class="checklist">
                                <li>0 to 10k Roadmap Course</li>
                                <li>Ready-to-Use Templates</li>
                                <li>Coaching Calls</li>
                                <li>Like-Minded Community</li>
                                <li>ChatGPT Prompts</li>
                                <li>Unlock VIP Trip to Las Vegas</li>
                                <li>Exclusive discounts and Much more</li>
                            </ul>
                            <a href="https://www.skool.com/amz-one-step/about" target="_blank" class="btn-cta">Join
                                AMZ
                                One Step VIP <img loading="lazy" alt="Get a Quote from AZM One Step"
                                    src="https://www.amzonestep.com/front/images/cta-icon.png" /></a>
                        </div>
                        <div class="col-md-5 vip-right-col">
                            <img loading="lazy" width="652px" height="367px" class="img-fluid"
                                src="https://www.amzonestep.com/front/images/amz-vip.png"
                                alt="AMZ One Step VIP Access" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-work">
            <div class="container">
                <div class="row text-center">
                    <h2><span class="line11">Our work with helium</span></h2>
                    <h3>Freedom Ticket</h3>
                    <p>AMZ One Step built the entire Creatives Module for the Freedom Ticket Course</p>
                </div>
                <div class="row featurette py-4">
                    <div class="col-md-6  align-self-center">
                        <p class="featurette-heading fw-normal lh-1">Watch a Sneak Peak from the Module </p>
                        <h2 class="featurette-heading fw-normal lh-1"><span class="line12">Listing Optimization &
                                SEO</span></h2>
                        <p class="lead">Elevate your product listings with SEO and optimization strategies, ensuring
                            your listings shine in Amazon's competitive online arena.</p>
                    </div>
                    <div class="col-md-6">
                        <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/P3poH9RAFJc?si=ZSsWGUcjho94c16R&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-11 mx-auto">
                    <div class="row featurette py-4">
                        <div class="col-md-4 -md-1  order-2 order-sm-2 order-md-2 order-lg-1">
                            <img loading="lazy" width="380px" height="363px" class="img-fluid"
                                src="https://www.amzonestep.com/front/images/project-5k.png"
                                alt="Project 5K + Amazon Posts" class="project-image" />
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-6  align-self-center  order-1 order-sm-1 order-md-1 order-lg-2">
                            <h2 class="featurette-heading fw-normal lh-1"><span class="line13">Project 5K + Amazon
                                    Posts</span></h2>
                            <p class="lead">Look what we have done for Helium10's famous coffin shelves!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="row">
                    <p>Updated October 6, 2024</p>
                    <p class="letter-heading"><span class="line15">Dear Amazon Seller,</span></p>


                    <p class="lead"><strong>We get it. Scaling an Amazon business isn’t easy.</strong> Even when
                        you’re already successful.</p>

                    <p class="lead">You’re constantly balancing growth and profitability.</p>

                    <p class="lead">You know how to rank a product, but <strong>maintaining that position?</strong>
                        That’s a different challenge. Conversion rates are slipping, even with all the optimizations.
                    </p>

                    <p class="lead">PPC costs keep climbing, cutting deeper into your margins. You’re spending more
                        to stay visible, but it doesn’t always translate to higher sales.</p>

                    <p class="lead"><strong>Organic ranking feels like a moving target,</strong> and keeping your
                        products at the top takes more time and resources than ever.</p>

                    <p class="lead">You’ve got a catalog of SKUs, but the struggle is keeping them all performing at
                        their peak. Launching new products is still a high-stakes game.</p>

                    <p class="lead">You want to grow, but not at the expense of your bottom line.</p>

                    <p class="lead">You know what success looks like—you’ve tasted it. But scaling up means more
                        complexity, more competition, and more pressure to keep winning.</p>

                    <p class="lead">At <strong>AMZ One Step,</strong> we get the demands of the big leagues. We’re
                        here to help you optimize every detail of your listings, boost conversion rates, and keep your
                        products in front of the right customers.</p>

                    <p class="lead">We take the creative work off your plate, so you can focus on what you do
                        best—growing your business.</p>

                    <p class="lead"><strong>Let’s take your brand to the next level.</strong></p>

                    <p class="lead" style="background: #d4f7ee; width: fit-content;">Together, we can turn every
                        click into a sale and make sure your investment pays off.</p>

                    <p class="lead">Here’s to continued success,</p>

                    <p class="lead"><strong>Kamal from AMZ One Step</strong></p>

                    <p class="text-center"><a href="#leadsform" class="btn-cta">Book A Call
                            Now <img loading="lazy" src="https://www.amzonestep.com/front/images/cta-icon.png"
                                alt="Get a Quote from AZM One Step" /></a></p>

                </div>
            </div>
        </section>
        <section class="contact-us" id="leadsform">
            <div class="form-container container-fluid mt-5 mb-5 blue-bg">
                <div class="row text-center">
                    <h2 class="text-center green"><span class="line14">Contact Us Now</span></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12 col-sm-12 text-center p-0 mt-3 mb-2">
                        <div class="container">

                            <div class="card px-4 pt-4 pb-0 mb-3">


                                <h2 id='redirectingText' class='h2 d-none'>Please wait a moment while we take you to
                                    the next step.</h2>
                                <form action="{{ route('form.store') }}" method="post" id="msform"
                                    name="myForm" novalidate>
                                    @csrf
                                    <!-- progressbar -->
                                    <!-- <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br> -->

                                    <!-- <h4 class="h4 text-center padding-para">Almost there! Let's get quick contact info.</h4> -->
                                    <!-- fieldset1 -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset class="stepstohide">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-12 mx-auto">
                                                            <label style="margin-left: 5px;"
                                                                class="text-center label-text"><span
                                                                    class="text-lite">Let's get started...</span>
                                                                What's your full name?</label>
                                                        </div>
                                                        <div class="col-md-12 mx-auto">
                                                            <div class="">
                                                                <div class="mb-3 ml-0 pl-0">
                                                                    <input type="text" class="form-control"
                                                                        required placeholder="John Doe"
                                                                        id="first_name" name="first_name">
                                                                </div>
                                                                <!-- <small style="margin-left: 5px;">Full Name</small> -->
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p class="error-msg" id="failure1">This question is required</p>
                                                <!-- <a type="button" name="next" class="next text-center action-button" id="next1"><i class="fa fa-arrow-right"></i></a> -->
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="stepstohide" id="">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="form-group col-md-12 mx-auto pl-0">
                                                            <label style="margin-left: 5px;" class="label-text"> What
                                                                is your email address?</label>
                                                            <div class="ml-0 pl-0">
                                                                <input type="text" autocomplete="off" required
                                                                    class="form-control" placeholder="Your Email"
                                                                    name="email" id="email">
                                                                <label id="email-error" class="error"
                                                                    for="email">Please enter a valid email
                                                                    address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="error-msg" id="failure8">This question is required</p>
                                                <!-- <a type="button" name="previous" class="previous text-center action-button-previous"><i class="fa fa-arrow-left"></i></a> -->
                                                <!-- <a type="button" name="next" class="next text-center action-button" id="nextEmail"><i class="fa fa-arrow-right"></i></a> -->
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="stepstohide">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-12 mx-auto">
                                                            <!-- <h3 class="text-orange">Nice to meet you <i class="fa fa-smile align-middle"></i></h3> -->
                                                            <div class="form-group">
                                                                <label style="margin-left: 5px;"
                                                                    class="label-text">What services are you looking
                                                                    for?</label>
                                                                <input id="00N8c00000dklfn" maxlength="255"
                                                                    name="Strategy_Services__c" size="20"
                                                                    type="hidden"
                                                                    class="form-control theme-input-style strategy_services invisible" />
                                                                <div class="form-check">
                                                                    <div class="multiSelect">
                                                                        <select id="services-fields"
                                                                            multiple="multiple"
                                                                            name="Services_Name__c[]"
                                                                            class="multiSelect_field"
                                                                            data-placeholder="Services">
                                                                            <option
                                                                                class="bg-gray cursor-pointer serviceIcon bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Product Photography">Product
                                                                                Photography </option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Full Listing Creatives">Full
                                                                                Listing Creatives</option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Product Videography">Product
                                                                                Videography</option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="A+ Content">A+ Content</option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Main Image Split Testing">Main
                                                                                Image Split Testing</option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Copywriting">Copywriting
                                                                            </option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="3D Rendering">3D Rendering
                                                                            </option>
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="PPC Management">PPC Management
                                                                            </option>
                                                                            <!-- <option class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4" value="Brand Registry">Brand Registry</option> -->
                                                                            <!-- <option class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4" value="Amazon Storefront or Posts">Amazon Storefront or Posts</option> -->
                                                                            <option
                                                                                class="bg-gray cursor-pointer bg-gray shadowbox py-3 my-2 px-4"
                                                                                value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        style="display: none;">
                                                                        <symbol xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 24 24" id="iconX">
                                                                            <g stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <line x1="18" y1="6"
                                                                                    x2="6" y2="18">
                                                                                </line>
                                                                                <line x1="6" y1="6"
                                                                                    x2="18" y2="18">
                                                                                </line>
                                                                            </g>
                                                                        </symbol>
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="error-msg" id="failure2">This question is required</p>
                                                <!-- <a type="button" name="previous" class="previous text-center action-button-previous"><i class="fa fa-arrow-left"></i></a> -->
                                                <!-- <a type="button" name="next" class="next text-center action-button" id="next2"><i class="fa fa-arrow-right"></i></a> -->
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-12 mx-auto">
                                                            <div class="form-gorup">
                                                                <label style="margin-left: 5px;" class="label-text"
                                                                    for="">How many products do you
                                                                    have?</label>
                                                                <select class="form-select" name="products"
                                                                    id="">
                                                                    <option value="">Please Select</option>
                                                                    <option
                                                                        value="Brand new, I have not launched it yet">
                                                                        Brand new, I have not launched it yet</option>
                                                                    <option value="1-2">1-2</option>
                                                                    <option value="3-9">3-9</option>
                                                                    <option value="10-50">10-50</option>
                                                                    <option value="50+">50+</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="stepstohide" id="">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-12 mx-auto pl-0">
                                                            <label style="margin-left: 5px;" class="label-text"> Can
                                                                you please share your or your competitor's
                                                                ASIN/URL?</label>
                                                            <div class="ml-0 pl-0">
                                                                <input type="text" placeholder="Your ASIN/URL"
                                                                    autocomplete="off" required class="form-control"
                                                                    name="asin_url" id="asin_url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="error-msg" id="failure8">This question is required</p>
                                                <!-- <a type="button" name="previous" class="previous text-center action-button-previous"><i class="fa fa-arrow-left"></i></a> -->
                                                <!-- <a type="button" name="next" class="next text-center action-button" id="nextEmail"><i class="fa fa-arrow-right"></i></a> -->
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="text-left" id="step7">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="col-md-12 mx-auto">
                                                            <div class="form-group">
                                                                <label style="margin-left: 5px;"
                                                                    class="label-text">What is your phone
                                                                    number?</label>
                                                                <div class="d-flex pl-0" style="color:#080807">

                                                                    <input id="00N8c00000dkW2t" maxlength="80"
                                                                        name="Country_Code__c" size="20"
                                                                        type="hidden"
                                                                        class="form-control theme-input-style country_code invisible" />
                                                                    <input type="number" class="form-control"
                                                                        required placeholder="Your Phone Number"
                                                                        name="phone" id="phone">
                                                                </div>
                                                                <label id="phone-error" class="error ml-4"
                                                                    style="display: none;">Please enter a valid phone
                                                                    number</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="error-msg" id="failure7">This question is required</p>

                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="stepstohide" id="">
                                                <div class="form-card">
                                                    <div class="row">
                                                        <div class="form-group col-md-12 mx-auto">
                                                            <label style="margin-left: 5px;" class="label-text"> What
                                                                is your budget for this project?</label>
                                                            <div class="mt-2" style="padding-left: 28px;">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input"
                                                                        id="flexRadioDefault1" name="budget"
                                                                        value="$1000-$2000">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1"> $1000-$2000</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="flexRadioDefault2"
                                                                        class="form-check-input" name="budget"
                                                                        value="$2000-$4000">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault2"> $2000-$4000</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="flexRadioDefault3"
                                                                        class=" form-check-input" name="budget"
                                                                        value="$4000-$10,000">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault3"> $4000-$10,000</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="flexRadioDefault4"
                                                                        class=" form-check-input" name="budget"
                                                                        value="$10,000+">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault4"> $10,000+</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" id="flexRadioDefault4"
                                                                        class=" form-check-input" name="budget"
                                                                        value="Not sure, I need guidance">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault4"> Not sure, I need
                                                                        guidance</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <a type="button" name="previous" class="previous text-center action-button-previous"><i class="fa fa-arrow-left"></i></a> -->
                                                <!-- <a type="button" name="next" class="next text-center action-button" id="nextEmail"><i class="fa fa-arrow-right"></i></a> -->
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset style="text-align: left;">
                                                <div class="row">
                                                    <div class="col-md-12 mx-auto">
                                                        <label style="margin-left: 5px;" for=""> Additional
                                                            Comments</label>
                                                        <textarea class="form-control" id="additional_comments" name="additional_comments" rows="8"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!-- fieldset1 -->

                                    <!-- fieldset8 -->

                                    <!-- fieldset8 -->
                                    <!-- fieldset2 -->


                                    <button type="submit" id="submitBtn" name="btn_submit"
                                        class="next mt-3 action-button">Submit</button>
                                </form>
                                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq">
            <div class="container">
                <div class="row text-center">
                    <h2><span class="line15">Frequently asked questions</span></h2>
                    <p class="lead">Here are answers to most common questions. Can't find an answer? Call us!</p>
                </div>
                {{-- <div class="row">
                    <div class="col-md-8" style="padding-right:80px;">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        How do I get started with your services?
                                    </button>
                                </p>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>To get started, simply book a call with us to assess if we can help you.
                                            After placing an order, you will be taken to our client portal where all
                                            onboarding steps will be shared.
                                        </p>

                                        <p>You will have to ship us a sample of your product and fill out a form so we
                                            can create a plan tailored to your needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Do you need a sample of my product? Where can we ship it?
                                    </button>
                                </p>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Yes, we require product samples for comprehensive packages to ensure
                                            top-quality creative outputs. Please refer to your client dashboard for
                                            specific shipping instructions to our studios in Canada, Bali, or the
                                            US. </p>

                                        <p>If you only need design and editing work using existing raw assets, please
                                            book a call with us to discuss your requirements. Our global studios are
                                            equipped to showcase your products effectively.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        What is the difference between Model and non-Model packages?
                                    </button>
                                </p>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Our non-model packages utilize high-quality stock images and basic white
                                            background photography, ideal for those on a budget. Model packages, on the
                                            other hand, involve a professional model and are shot in custom-staged
                                            settings, offering a premium, highly personalized visual experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        How long does the entire production process take?
                                    </button>
                                </p>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>The typical turnaround time from receiving your product to first drafts is
                                            approximately 3-4 weeks, depending on the complexity of your project and the
                                            speed of your feedback.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">
                                        Why are your prices higher than a freelancer?
                                    </button>
                                </p>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Our pricing reflects the all-in-one solution we offer - research, production
                                            and design. By working with our agency, you gain access to a team of
                                            industry specialists, comprehensive project management, and consistent
                                            quality across all your creative needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                        aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Can I rush my order? Is there an additional cost for expedited services?
                                    </button>
                                </p>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Yes, expedited services are available for an additional fee after the
                                            checkout, which will reduce the timelines of the first draft to 2 weeks
                                            after sample is received."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                        aria-expanded="false" aria-controls="flush-collapseEight">

                                        What happens if I need more than two revisions?
                                    </button>
                                </p>
                                <div id="flush-collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>While two rounds of revisions are included in your package, there is also an
                                            upgrade available (after checkout) to get unlimited revisions for 30 days
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingNnie">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseNnie"
                                        aria-expanded="false" aria-controls="flush-collapseNnie">
                                        Who owns the copyright to the images and videos produced?
                                    </button>
                                </p>
                                <div id="flush-collapseNnie" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingNnie" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Upon full payment, you will own the copyright to all final images and videos
                                            produced, allowing you unlimited use across your marketing channels.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingTen">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTen"
                                        aria-expanded="false" aria-controls="flush-collapseTen">
                                        How can I contact you if I have issues or questions about the project?
                                    </button>
                                </p>
                                <div id="flush-collapseTen" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>You will be assigned a Customer Success Manager for the project who will
                                            communicate with you via our client portal or emails. Our business hours are
                                            Monday through Friday, 9 am to 5 pm EST. We strive to respond
                                            to all inquiries within 24 hours.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <p class="accordion-header" id="flush-headingEleven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven"
                                        aria-expanded="false" aria-controls="flush-collapseEleven">

                                        Do you provide source files and raw files with your projects?
                                    </button>
                                </p>
                                <div id="flush-collapseEleven" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Yes, we can provide both source files and raw files for an additional fee
                                            (after checkout). Providing these files allows you to have full control over
                                            your assets and the flexibility to make future edits or adjustments
                                            as your brand evolves.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center align-self-center">
                        <img loading="lazy" width="370px" height="330px" class="img-fluid"
                            src="https://www.amzonestep.com/front/images/suport.png"
                            alt="Book a Free Call with AMZ One Step Consultants" class="support-image" />
                        <p class="text-center mt-5"><a href="#leadsform" class="btn-cta">Book A Free Call <img
                                    loading="lazy" src="https://www.amzonestep.com/front/images/cta-icon.png"
                                    alt="Get a Quote from AZM One Step" /></a></p>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-md-8" style="padding-right:80px;">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach ($faqs as $index => $faq)
                                <div class="accordion-item">
                                    <p class="accordion-header" id="flush-heading{{ $index }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false"
                                            aria-controls="flush-collapse{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </p>
                                    <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading{{ $index }}"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-4 text-center align-self-center">
                        <img loading="lazy" width="370px" height="330px" class="img-fluid"
                            src="https://www.amzonestep.com/front/images/suport.png"
                            alt="Book a Free Call with AMZ One Step Consultants" />
                        <p class="text-center mt-5">
                            <a href="#leadsform" class="btn-cta">
                                Book A Free Call
                                <img loading="lazy" src="https://www.amzonestep.com/front/images/cta-icon.png"
                                    alt="Get a Quote" />
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section id="footer" class="green-bg-2">
            <div class="container-fluid">
                <div class="container">
                    <footer class="">
                        <div class="row">
                            <div class="col-md-12 col-lg-3">
                                <img loading="lazy"
                                    src="https://www.amzonestep.com/front/images/amz-one-step-logo.png"
                                    alt="AMZ One Step" class="mb-4 footer-logo" />
                                <h6>We Commit!</h6>
                                <h6 class="orange">We Research!</h6>
                                <h6>We Deliver!</h6>
                            </div>
                            <div class="col-sm-6 col-md-4  col-lg-3 mb-3">
                                <h5>Quick Links</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/partners"
                                            class="nav-link p-0 text-body-secondary">Partners</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/podcast"
                                            class="nav-link p-0 text-body-secondary">Podcast</a>
                                    </li>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/affiliate-program"
                                            class="nav-link p-0 text-body-secondary">Affiliate
                                            program</a></li>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/aboutus"
                                            class="nav-link p-0 text-body-secondary">About</a>
                                    <li class="nav-item mb-2"><a href=""
                                            class="nav-link p-0 text-body-secondary">Blog</a>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/contact"
                                            class="nav-link p-0 text-body-secondary">Contact</a>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/careers"
                                            class="nav-link p-0 text-body-secondary">Career</a>
                                    <li class="nav-item mb-2"><a href="https://www.amzonestep.com/faq"
                                            class="nav-link p-0 text-body-secondary">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-4  col-lg-3 mb-3">
                                <h5>Services</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-product-photography"
                                            class="nav-link p-0 text-body-secondary">Photography</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-product-video-services"
                                            class="nav-link p-0 text-body-secondary">Videography</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-ppc-service"
                                            class="nav-link p-0 text-body-secondary">PPC
                                            Management</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-enhanced-brand-content-service"
                                            class="nav-link p-0 text-body-secondary">Enhanced
                                            Brand Content</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-listing-optimization"
                                            class="nav-link p-0 text-body-secondary">Listing
                                            Optimization</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-product-ranking"
                                            class="nav-link p-0 text-body-secondary">Ranking</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="https://www.amzonestep.com/services/amazon-product-3d-rendering"
                                            class="nav-link p-0 text-body-secondary">3D
                                            Rendering</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-lg-3 mb-3">
                                <h5>Stay in Touch</h5>
                                <p>Our social links for more inspirational content.</p>
                                <div class="social mb-4">
                                    <a href="https://www.facebook.com/AMZonestep/" aria-label="AMZ One Step Facebook"
                                        rel="nofollow"><i class="fa fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/amzonestep/?hl=en"
                                        aria-label="AMZ One Step Instagram" rel="nofollow"><i
                                            class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/AZonestep" class="x-twitter"
                                        aria-label="AMZ One Step Twitter" rel="nofollow">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                                                style="fill: #63ec9f;/* width: 32px; */"></path>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/company/amzonestep"
                                        aria-label="AMZ One Step LinkedIn" rel="nofollow"><i
                                            class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-6">
                                        <img loading="lazy"
                                            src="https://www.amzonestep.com/front/images/pick-fu-certified.png"
                                            class="image-fluid" alt="PickFu Certified"
                                            style="max-width: 100px; width:100%" />
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-6">

                                        <img loading="lazy"
                                            src="https://www.amzonestep.com/front/images/helium10-trusted-partner.png"
                                            alt="Helium 10 Trust Partner" class="image-fluid"
                                            style="max-width: 100px; width:100%" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row justify-content-between my-2"
                            bis_skin_checked="1">
                            <p>© 2024 AMZ One Step All Rights Reserved.</p>
                            <ul class="footer-links">
                                <li><a href="https://www.amzonestep.com/privacy-policy">Privacy</a>|</li>
                                <li><a href="https://www.amzonestep.com/disclaimer">Disclaimer</a>|</li>
                                <li><a href="https://www.amzonestep.com/terms-and-conditions">Terms &amp;
                                        Condition</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-center py-3 my-2 border-top">
                            <p>Powered By <a href="https://outorigin.com/" target="_blank"><img
                                        src="https://www.amzonestep.com/front/images/out-origin-logo.png"
                                        alt="Out Origin" /></a>
                            </p>
                        </div>
                    </footer>
                </div>
            </div>
        </section>
    </main>
    <script src="https://www.amzonestep.com/front/js/vendors/jquery.min.js"></script>
    <script src="https://www.amzonestep.com/front/js/main.js"></script>
    <script src="https://www.amzonestep.com/front/js/owlcarousel/owl.carousel.js"></script>
    <script src="https://www.amzonestep.com/front/js/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/css/inputmask.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" />

    <!-- intlTelInput JS (load after jQuery) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- intlTelInput utils (optional, for validation & formatting) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
    <script>
        $(document).ready(function() {
            $('#msform').on('keydown', function(event) {
                if (event.key === 'Enter' || event.keyCode === 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
        jQuery(document).ready(function($) {
            var current_fs;
            var next_fs;
            var previous_fs;
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            var recaptchaVerified = false;

            setProgressBar(current);

            $("#next1").click(function() {

                if (!$("input[name='first_name']:input").val()) {
                    $("#failure1").show(200);
                    $("#failure1").fadeOut(1500);
                    return false;
                }


                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");


                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);

            });

            $("#nextEmail").click(function() {

                if (!ValidateEmail($("#email").val())) {
                    $("#email-error").show(200);
                    $("#email-error").fadeOut(1500);
                    return false;
                }

                if (!$("input[name='email']:input").val()) {
                    $("#failure8").show(200);
                    $("#failure8").fadeOut(1500);
                    return false;
                }


                var formObject = {
                    name: $("input[name='first_name']:input").val(),
                    email: $("input[name='email']:input").val()
                };

                fetch("https://hooks.zapier.com/hooks/catch/14832697/3il807u/", {
                        method: 'POST',
                        body: JSON.stringify(formObject),
                        redirect: 'follow',
                        mode: 'no-cors',
                    })
                    .then(response => response.text())
                    .then(result => console.log(result))
                    .catch(error => console.log('error', error));


                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);


            });



            $("#next2").click(function() {

                if (!($('select[id="services-fields"]').find(":selected").val())) {
                    $("#failure2").show(200);
                    $("#failure2").fadeOut(1500);
                    return false;
                }

                if ($(".other-input").is(":visible")) {
                    if ($('.other-specify').val() == 0) {
                        $("#failure2").show(200);
                        $("#failure2").fadeOut(1500);
                        return false;
                    }
                }

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);



            });




            $("#next3").click(function() {

                if (!$("input[name='Brand_Name__c']:input").val()) {
                    $("#failure3").show(200);
                    $("#failure3").fadeOut(1500);
                    return false;
                }

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");


                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);

            });

            $("#next4").click(function() {

                if (!($('select[name="Monthly_Revenue__c"]').find(":selected").val())) {
                    $("#failure4").show(200);
                    $("#failure4").fadeOut(1500);
                    return false;
                }

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);



            });

            $("#next5").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);

            });

            $("#next6").click(function() {

                if (!($('select[name="How_would_you_like_us_to_contact_you__c"]').find(":selected")
                        .val())) {
                    $("#failure6").show(200);
                    $("#failure6").fadeOut(1500);
                    return false;
                }

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });

                setProgressBar(++current);

            });

            $("#next7").click(function() {



                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");


                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);

            });

            $("#submitBtn").click(function() {

                if (!ValidatePhone($("#phone").val())) {
                    $("#phone-error").show(200);
                    $("#phone-error").fadeOut(8500);
                    return false;
                }
                if (!ValidateEmail($("#email").val())) {
                    $("#email-error").show(200);
                    $("#email-error").fadeOut(8500);
                    return false;
                }

                if (!$("input[name='phone']:input").val()) {
                    $("#failure7").show(200);
                    $("#failure7").fadeOut(8500);
                    return false;
                }
                if (!$("input[name='email']:input").val()) {
                    $("#failure8").show(200);
                    $("#failure8").fadeOut(8500);
                    return false;
                }


                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                $("#redirectingText").removeClass("d-none");
                $("#redirectingText").addClass("d-block");
                $(".padding-para").addClass("d-none");

                next_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);

            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                previous_fs.show();
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {

                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%");
            }

            $(".submit").click(function() {
                return false;
            });

            $(".other-box").click(function() {
                if ($(".checkboxOther").prop('checked') == true) {
                    $(".other-input").show();
                } else {
                    $(".other-input").hide();
                }
            });

            $("#msform").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                        regex: /^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i,
                        return: false,
                    }
                },
                messages: {
                    email: "Please enter a valid email address",
                },
                submitHandler: function(form) {
                    if ($recaptcha) {
                        if ($(form).valid())
                            form.submit();
                        return false;
                    } else {
                        alert('reCaptcha is required');
                    }
                }
            });


        });


        jQuery(function() {
            jQuery('.multiSelect').each(function(e) {
                var self = jQuery(this);
                var field = self.find('.multiSelect_field');
                var fieldOption = field.find('option');
                var placeholder = field.attr('data-placeholder');

                field.hide().after(`<div class="multiSelect_dropdown"></div>
                        <span class="multiSelect_placeholder">` + placeholder + `</span>
                        <ul class="multiSelect_list"></ul>
                        <span class="multiSelect_arrow"></span>`);

                fieldOption.each(function(e) {
                    jQuery('.multiSelect_list').append(
                        `<li class="multiSelect_option" data-value="` + jQuery(this).val() + `">
                                            <a class="multiSelect_text">` + jQuery(this).text() + `</a>
                                          </li>`);
                });

                var dropdown = self.find('.multiSelect_dropdown');
                var list = self.find('.multiSelect_list');
                var option = self.find('.multiSelect_option');
                var optionText = self.find('.multiSelect_text');

                dropdown.attr('data-multiple', 'true');
                list.css('top', dropdown.height() + 5);

                option.click(function(e) {
                    var self = jQuery(this);
                    e.stopPropagation();
                    self.addClass('-selected');
                    field.find('option:contains(' + self.children().text() + ')').prop('selected',
                        true);
                    dropdown.append(function(e) {
                        return jQuery('<span class="multiSelect_choice">' + self.children()
                            .text() +
                            '<svg class="multiSelect_deselect -iconX"><use href="#iconX"></use></svg></span>'
                        ).click(function(e) {
                            var self = jQuery(this);
                            e.stopPropagation();
                            self.remove();
                            list.find('.multiSelect_option:contains(' + self
                                .text() + ')').removeClass('-selected');
                            list.css('top', dropdown.height() + 5).find(
                                '.multiSelect_noselections').remove();
                            field.find('option:contains(' + self.text() + ')').prop(
                                'selected', false);
                            if (dropdown.children(':visible').length === 0) {
                                dropdown.removeClass('-hasValue');
                            }
                        });
                    }).addClass('-hasValue');
                    list.css('top', dropdown.height() + 5);
                    if (!option.not('.-selected').length) {
                        list.append('<h5 class="multiSelect_noselections">No Selections</h5>');
                    }
                });

                dropdown.click(function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    dropdown.toggleClass('-open');
                    list.toggleClass('-open').scrollTop(0).css('top', dropdown.height() + 5);
                });

                jQuery(document).on('click touch', function(e) {
                    if (dropdown.hasClass('-open')) {
                        dropdown.toggleClass('-open');
                        list.removeClass('-open');
                    }
                });
            });
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            const input = document.querySelector("#phone");
            const iti = window.intlTelInput(input, {
                separateDialCode: true,
                hiddenInput: "full_phone",
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

            $(".country_code").val("+" + iti.getSelectedCountryData().dialCode);

            input.addEventListener("countrychange", function() {
                $(".country_code").val("+" + iti.getSelectedCountryData().dialCode);
            });
        });

        function ValidateEmail(email) {
            var expr =
                /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            return expr.test(email);
        }

        function ValidatePhone(phone) {
            var expression = /([0-9]{4})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
            return expression.test(phone);
        }
    </script>

    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                document.getElementById("header").style.backgroundColor = "black";
            } else {
                document.getElementById("header").style.backgroundColor = "black";
            }
        }
    </script>



</body>

</html>
