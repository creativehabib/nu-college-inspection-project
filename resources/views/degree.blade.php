<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <header class="px-4 text-black/50 bg-gray-50 dark:bg-slate-900 dark:text-white fixed z-50 top-0 w-full">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="font-semibold text-xl">
                    Laravel
                </a>
                <nav>
                    <ul class="">
                        <li class="inline-block">
                            <a href="{{ url('/') }}" class="dark:hover:text-white/80">Home</a>
                        </li>
                        <li class="relative inline-block group">
                            <a href="#" class="flex items-center dark:hover:text-white/70 p-4">
                                Apply Now
                                <!-- Dropdown Icon -->
                                <svg
                                    class="w-4 h-4 ml-1 transform transition-transform duration-200 group-hover:rotate-180"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                            <ul class="absolute hidden group-hover:block bg-white dark:bg-gray-800 py-2 shadow-lg rounded-lg">
                                <li class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <a href="/degree" class="dark:hover:text-white/80 p-4">Degree</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <a href="#" class="dark:hover:text-white/80 p-4">Honours</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">
                                    <a href="#" class="dark:hover:text-white/80 p-4">Professional</a>
                                </li>
                            </ul>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="inline-block">
                                    <a href="{{ url('/dashboard') }}" class="dark:hover:text-white/70 p-4">Dashboard</a>
                                </li>
                                @if(Route::has('logout'))
                                    <li class="inline-block">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dark:hover:text-white/70 p-4">Logout</button>
                                        </form>
                                    </li>
                                @endif
                            @else
                                <li class="inline-block">
                                    <a href="{{ route('login') }}" class="dark:hover:text-white/70 p-4">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="inline-block">
                                        <a href="{{ route('register') }}" class="dark:hover:text-white/70 p-4">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </nav>

            </div>
        </div>
    </header>
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

            <main class="mt-20">
                <form class="">
                    <div class="grid gap-6 lg:grid-cols-3 lg:gap-8 bg-white p-6 rounded-lg shadow-md">
                        <div class="space-y-4">
                                <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">College Information Form</h1>
                                    <!-- College Code -->
                                    <div class="flex flex-col">
                                        <label for="collegeCode" class="text-gray-700 font-medium">College Code</label>
                                        <input
                                            type="text"
                                            id="collegeCode"
                                            name="college_code"
                                            placeholder="College code will appear here"
                                            disabled
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        />
                                    </div>

                                    <!-- College Type -->
                                    <div class="flex flex-col">
                                        <label for="college-type" class="text-gray-700 font-medium">College Type</label>
                                        <input
                                            type="text"
                                            id="college-type"
                                            placeholder="Ex. Government"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        />
                                    </div>

                                    <!-- College Name -->
                                    <div class="flex flex-col">
                                        {{-- nuCollege dropdown list--}}
                                        <label for="nuCollege" class="text-gray-700 font-medium">College Name</label>
                                        <select
                                            id="nuCollege"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                            <option value="">Select College</option>
                                            @foreach($nuColleges as $college)
                                                <option value="{{$college->id}}">{{$college->college_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- College Address -->
                                    <div class="flex flex-col">
                                        <label for="college-address" class="text-gray-700 font-medium">College Address</label>
                                        <textarea
                                            id="college-address"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                            placeholder="Enter college address"
                                        ></textarea>
                                    </div>

                                    <!-- Division and District -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="flex flex-col">
                                            {{-- division dropdown list--}}
                                            <label for="division" class="text-gray-700 font-medium">Division</label>
                                            <select
                                                id="division"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                                <option value="">Select Division</option>
                                                @foreach($divisions as $division)
                                                    <option value="{{$division->id}}">{{$division->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex flex-col">
                                            {{-- district dropdown list--}}
                                            <label for="district" class="text-gray-700 font-medium">District</label>
                                            <select
                                                id="district"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Upazilla -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="flex-col flex">
                                            {{-- upazilla dropdown list--}}
                                            <label for="upazilla" class="text-gray-700 font-medium">Upazilla</label>
                                            <select
                                                id="upazilla"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                            </select>
                                        </div>
                                        <div class="flex flex-col">
                                            {{-- union dropdown list --}}
                                            <label for="union" class="text-gray-700 font-medium">Union</label>
                                            <select
                                                id="union"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="flex flex-col">
                                        <label for="college_email" class="text-gray-700 font-medium">College Email</label>
                                        <input
                                            type="email"
                                            name="college_email"
                                            id="college_email"
                                            placeholder="Enter college mail"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        />
                                    </div>
                                    {{-- website --}}
                                    <div class="flex flex-col">
                                        <label for="college_website" class="text-gray-700 font-medium">College Website</label>
                                        <input
                                            type="text"
                                            id="college_website"
                                            placeholder="Enter web address"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        />
                                    </div>

                                    <!-- Mobile Number and Year of Establishment -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="flex flex-col">
                                            <label for="college_mobile" class="text-gray-700 font-medium">College Mobile Number</label>
                                            <input
                                                type="text"
                                                id="college_mobile"
                                                placeholder="Ex. 01712345678"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                            />
                                        </div>
                                        <div class="flex flex-col">
                                            <label for="establish_year" class="text-gray-700 font-medium">Year of Establishment</label>
                                            <input
                                                type="text"
                                                id="establish_year"
                                                placeholder="Ex. 1992"
                                                class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                            />
                                        </div>
                                    </div>

                                    <!-- Total Land -->
                                    <div class="flex flex-col">
                                        <label for="total-land" class="text-gray-700 font-medium">Total Land</label>
                                        <input
                                            type="text"
                                            id="total-land"
                                            placeholder="Enter total land"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        />
                                    </div>

                                    <!-- Brief Background -->
                                    <div class="flex flex-col">
                                        <label for="about_college" class="text-gray-700 font-medium">Brief Background of the College</label>
                                        <textarea
                                            id="about_college"
                                            placeholder="Enter brief background of the college"
                                            class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                        ></textarea>
                                    </div>

                            </div>
                        <div class="space-y-4">
                            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">College Information Form</h1>
                            <!-- Affiliation Type -->
                            <div class="flex flex-col">
                                <label for="affiliation_type" class="text-gray-700 font-medium">Affiliation Type</label>
                                <select
                                    id="affiliation_type"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                    <option value="">Select Program</option>
                                    @foreach($programs as $program)
                                        <option value="{{$program->id}}">{{$program->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Course Type -->
                            <div class="flex flex-col">
                                <label for="course_type" class="text-gray-700 font-medium">Course/Subject</label>
                                <select
                                    id="course_type"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700">
                                    <option>Course</option>
                                    <option>Subject</option>
                                </select>
                            </div>

                            <!-- Course Name -->
                            <div class="flex items-center space-x-2 justify-between">
                                @foreach($courses as $course)
                                <div>
                                    <input
                                        id="co-{{$course->id}}"
                                        type="checkbox"
                                        name="course_name[]"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded cursor-pointer border-gray-300"
                                    >
                                    <label for="co-{{$course->id}}" class="ml-2 text-sm cursor-pointer font-medium text-gray-900">{{ $course->name }}</label>
                                </div>
                                @endforeach
                            </div>

                            <!-- Subject -->
                            <div class="flex flex-col">
                                <label for="college-address" class="text-gray-700 font-medium">Subject List</label>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach($subjects as $subject)
                                    <div>
                                        <input
                                            id="sub-{{$subject->id}}"
                                            type="checkbox"
                                            name="subject_name[]"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded cursor-pointer border-gray-300"
                                        >
                                        <label for="sub-{{$subject->id}}" class="ml-2 text-sm cursor-pointer font-medium text-gray-900">{{ $subject->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Division and District -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="general_fund" class="text-gray-700 font-medium">General Fund</label>
                                    <input
                                        type="text"
                                        id="general_fund"
                                        placeholder="Ex. 12445689"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <label for="fixed_deposit" class="text-gray-700 font-medium">Fixed Deposit</label>
                                    <input
                                        type="text"
                                        id="fixed_deposit"
                                        placeholder="Ex. 12436789"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                            </div>

                            <!-- Brief Background -->
                            <div class="flex flex-col">
                                <label for="about_college" class="text-gray-700 font-medium">Brief Background of the College</label>
                                <textarea
                                    id="about_college"
                                    placeholder="Enter brief background of the college"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                ></textarea>
                            </div>

                        </div>
                        <div class="space-y-4">
                            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">College Information Form</h1>
                            <!-- College Code -->
                            <div class="flex flex-col">
                                <label for="college-code" class="text-gray-700 font-medium">College Code</label>
                                <input
                                    type="text"
                                    id="college-code"
                                    readonly
                                    placeholder="0101"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                />
                            </div>

                            <!-- College Type -->
                            <div class="flex flex-col">
                                <label for="college-type" class="text-gray-700 font-medium">College Type</label>
                                <input
                                    type="text"
                                    id="college-type"
                                    placeholder="Ex. Government"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                />
                            </div>

                            <!-- College Name -->
                            <div class="flex flex-col">
                                <label for="college-name" class="text-gray-700 font-medium">College Name</label>
                                <input
                                    type="text"
                                    id="college-name"
                                    placeholder="Ex. GOVT. P. C. COLLEGE"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                />
                            </div>

                            <!-- College Address -->
                            <div class="flex flex-col">
                                <label for="college-address" class="text-gray-700 font-medium">College Address</label>
                                <textarea
                                    id="college-address"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    placeholder="Enter college address"
                                ></textarea>
                            </div>

                            <!-- Division and District -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="division" class="text-gray-700 font-medium">Division</label>
                                    <input
                                        type="text"
                                        id="division"
                                        placeholder="Ex. Dhaka"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <label for="district" class="text-gray-700 font-medium">District</label>
                                    <input
                                        type="text"
                                        id="district"
                                        placeholder="Ex. Jashore"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                            </div>

                            <!-- Upazilla and Post Code -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex-col flex">
                                    <label for="upazilla" class="text-gray-700 font-medium">Upazilla/Thana</label>
                                    <input
                                        type="text"
                                        id="upazilla"
                                        placeholder="Ex. Upazilla/Thana"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <label for="post-code" class="text-gray-700 font-medium">Post Code</label>
                                    <input
                                        type="text"
                                        id="post-code"
                                        placeholder="Ex. 9300"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                            </div>

                            <!-- Website and Email -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="college_website" class="text-gray-700 font-medium">College Website</label>
                                    <input
                                        type="text"
                                        id="college_website"
                                        placeholder="Enter web address"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <label for="college_email" class="text-gray-700 font-medium">College Email</label>
                                    <input
                                        type="email"
                                        id="college_email"
                                        placeholder="Enter college mail"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                            </div>

                            <!-- Mobile Number and Year of Establishment -->
                            <div class="grid grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                    <label for="college_mobile" class="text-gray-700 font-medium">College Mobile Number</label>
                                    <input
                                        type="text"
                                        id="college_mobile"
                                        placeholder="Ex. 01712345678"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                                <div class="flex flex-col">
                                    <label for="establish_year" class="text-gray-700 font-medium">Year of Establishment</label>
                                    <input
                                        type="text"
                                        id="establish_year"
                                        placeholder="Ex. 1992"
                                        class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                    />
                                </div>
                            </div>

                            <!-- Total Land -->
                            <div class="flex flex-col">
                                <label for="total-land" class="text-gray-700 font-medium">Total Land</label>
                                <input
                                    type="text"
                                    id="total-land"
                                    placeholder="Enter total land"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                />
                            </div>

                            <!-- Brief Background -->
                            <div class="flex flex-col">
                                <label for="about_college" class="text-gray-700 font-medium">Brief Background of the College</label>
                                <textarea
                                    id="about_college"
                                    placeholder="Enter brief background of the college"
                                    class="mt-1 px-3 py-2 border rounded-md bg-gray-100 text-gray-700"
                                ></textarea>
                            </div>

                        </div>
                    </div>
                </form>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function () {

        $('#nuCollege').on('change', function () {
            const collegeId = this.value; // Get the selected college ID
            const inputCollegeCode = $('#collegeCode'); // Use jQuery to reference the input field
            const inputCollegeEmail = $('#college_email'); // Use jQuery to reference the input field

            // Perform AJAX request to fetch the college code
            $.ajax({
                url: "{{ url('fetch-college-code') }}", // Endpoint for fetching college code
                type: "POST",
                data: {
                    id: collegeId,
                    _token: '{{ csrf_token() }}' // Include CSRF token for security
                },
                dataType: 'json',
                success: function (response) {
                    if (response.college_codes && response.college_codes.length > 0) {
                        // Iterate over the result (in case of multiple results)
                        $.each(response.college_codes, function (key, value) {
                            // Update input field value and placeholder
                            inputCollegeCode.val(value.college_code);
                            inputCollegeCode.attr('placeholder', `You selected: ${value.college_code}`);
                            inputCollegeEmail.val(value.college_email);
                            inputCollegeEmail.attr('placeholder', `You selected: ${value.college_email}`);
                        });
                    } else {
                        // Handle empty response
                        inputCollegeCode.val('');
                        inputCollegeCode.attr('placeholder', 'No college code found');
                        inputCollegeEmail.val('');
                        inputCollegeEmail.attr('placeholder', 'No college email found');

                    }
                    console.log(response); // Log the response for debugging
                },
                error: function (xhr, status, error) {
                    console.error("Error fetching college code:", error);
                    inputField.val('');
                    inputField.attr('placeholder', 'An error occurred');
                }
            });
        });

        /*------------------------------------------
         District Dropdown Change Event
        --------------------------------------------*/

        $('#division').on('change', function () {
            var idDivision = this.value;
            $("#district").html('');

            $.ajax({
                url: "{{url('fetch-districts')}}",
                type: "POST",
                data: {
                    division_id: idDivision,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#district').html('<option value="">Select District</option>');
                    $.each(result.districts, function (key, value) {
                        $("#district").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#upazilla').html('<option value="">Select Upazila</option>');
                    $('#union').html('<option value="">Select Union</option>');
                }

            });

        });


        /*------------------------------------------
        --------------------------------------------
        Upazilla Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#district').on('change', function () {
            var idDistrict = this.value;
            $("#upazilla").html('');
            $.ajax({
                url: "{{url('fetch-upazilas')}}",
                type: "POST",
                data: {
                    district_id: idDistrict,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#upazilla').html('<option value="">Select Upazilla</option>');
                    $.each(res.upazilas, function (key, value) {
                        $("#upazilla").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#union').html('<option value="">Select Union</option>');
                }
            });
        });

        /*------------------------------------------
        --------------------------------------------
        Upazilla Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#upazilla').on('change', function () {
            var idUpazilla = this.value;
            $("#union").html('');
            $.ajax({
                url: "{{url('fetch-postcodes')}}",
                type: "POST",
                data: {
                    id: idUpazilla,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#union').html('<option value="">Select Union</option>');
                    $.each(res.post_codes, function (key, value) {
                        $("#union").append('<option value="' + value
                            .id + '">' + value.postCode + '</option>');
                    });
                }
            });
        });

    });

</script>
</body>
</html>
