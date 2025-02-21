<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel Interim</title>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
      <!-- Styles / Scripts -->
      @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
          @vite(['resources/css/app.css', 'resources/js/app.js'])
      @else
          <style>
              /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
          </style>
      @endif
</head>
<body>
    
    <nav id="navbar" class="bg-white shadow-md fixed top-0 left-0 md:w-full w-[97vw] z-50 transition-all py-2">
        <div class="container mx-auto flex justify-between items-center p-1">
          <!-- Logo -->
          <a href="/" class="text-gray-800 text-2xl font-bold flex items-center space-x-1">
            <img src="{{ asset('storage/images/image-removebg-preview (9).png') }}" class="md:w-[4vw] w-[7vw]" alt="">
            <span class="text-[#c01c2e] text-lg">Excel Interim</span>
          </a>
  
          <!-- Mobile Menu Button -->
          <button id="mobile-menu-button" class="lg:hidden text-gray-800 hover:text-[#c01c2e] focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
            </svg>
          </button>
  
          <!-- Navigation Links -->
          <ul id="nav-links" class="hidden lg:flex space-x-6 items-center">
            <li class="relative group z-50">
              <a href="/" class="dropdown-btn text-black font-semibold hover:text-[#c01c2e] hover:bg-zinc-300 transition duration-700 px-4 py-2 rounded-3xl">
                Excel Interim
              </a>
              <ul class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                <li><a href="/mdd" class="block px-4 py-2 text-black hover:bg-gray-100">Mot du directeur</a></li>
                <li><a href="/qsn" class="block px-4 py-2 text-black hover:bg-gray-100">Qui sommes-nous</a></li>
                <li><a href="/nosvaleur" class="block px-4 py-2 text-black hover:bg-gray-100">Nos valeurs</a></li>
              </ul>
            </li>
            <li class="relative group">
              <a href="/travailT" class="dropdown-btn text-gray-800 font-semibold hover:text-[#c01c2e] hover:bg-zinc-300 transition duration-700 px-4 py-2 rounded-3xl">
                Nos services
              </a>
              <ul class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                <li><a href="/travailT" class="block px-4 py-2 text-black hover:bg-gray-100">Travail temporaire</a></li>
                <li><a href="/interim" class="block px-4 py-2 text-black hover:bg-gray-100">Recrutement</a></li>
                <li><a href="/conseil" class="block px-4 py-2 text-black hover:bg-gray-100">Conseil RH</a></li>
              </ul>
            </li>
            <li><a href="/nosoffers" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">Offres d'emploi</a></li>
            <li><a href="/candidature-spontane" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">Candidature</a></li>
          </ul>
  
          <!-- Language Toggle -->
          <div class="relative hidden lg:block">
            <button id="lang-toggle" class="dropdown-btn text-xl text-gray-800 font-bold px-4 py-2 flex items-center space-x-1">
              <span><i class="bi bi-translate"></i></span>
              <svg class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <ul id="lang-menu" class="dropdown-menu absolute right-0 mt-2 w-[8vw] bg-white shadow-lg rounded-md py-2 hidden">
              <li><a href="/locale/en" class="block px-4 py-2 hover:bg-gray-100 text-gray-600">English</a></li>
              <li><a href="/locale/fr" class="block px-4 py-2 hover:bg-gray-100 text-gray-600">Français</a></li>
            </ul>
          </div>
        </div>
  
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white">
          <ul class="px-4 py-2">
            <li class="py-2">
              <button class="mobile-dropdown-btn w-full text-left text-black font-semibold px-4 py-2">
                Excel Interim
                <svg class="w-4 h-4 inline-block ml-1 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <ul class="mobile-dropdown-menu hidden pl-4">
                <li><a href="/mdd" class="block py-2">Mot du directeur</a></li>
                <li><a href="/qsn" class="block py-2">Qui sommes-nous</a></li>
                <li><a href="/nosvaleur" class="block py-2">Nos valeurs</a></li>
              </ul>
            </li>
            <li class="py-2">
              <button class="mobile-dropdown-btn w-full text-left text-black font-semibold px-4 py-2">
                Nos services
                <svg class="w-4 h-4 inline-block ml-1 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <ul class="mobile-dropdown-menu hidden pl-4">
                <li><a href="/travailT" class="block py-2">Travail temporaire</a></li>
                <li><a href="/interim" class="block py-2">Recrutement</a></li>
                <li><a href="/conseil" class="block py-2">Conseil RH</a></li>
              </ul>
            </li>
            <li><a href="/nosoffers" class="block py-2 px-4">Offres d'emploi</a></li>
            <li><a href="/candidature-spontane" class="block py-2 px-4">Candidature</a></li>
            <li class="py-2">
              <button class="mobile-dropdown-btn w-full text-left text-black font-semibold px-4 py-2">
                Language
                <svg class="w-4 h-4 inline-block ml-1 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <ul class="mobile-dropdown-menu hidden pl-4">
                <li><a href="/locale/en" class="block py-2">English</a></li>
                <li><a href="/locale/fr" class="block py-2">Français</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
  
      
      
<div class="flex justify-center items-center min-h-screen bg-gray-100 px-4 pt-32 pb-32">
    <div class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-3xl">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">
            @lang("messages.Rejoignez notre CVthèque en quelques minutes !")
        </h2>
        @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('candidature-spontane.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
    
        <input type="text" name="first_name" placeholder="Nom *" required class="border border-gray-300 p-3 rounded-lg w-full">
        <input type="text" name="last_name" placeholder="Prénom *" required class="border border-gray-300 p-3 rounded-lg w-full">
        <input type="email" name="email" placeholder="Email *" required class="border border-gray-300 p-3 rounded-lg w-full">
        <input type="tel" name="phone" placeholder="Téléphone *" required class="border border-gray-300 p-3 rounded-lg w-full">
        <input type="text" name="address" placeholder="Adresse *" required class="border border-gray-300 p-3 rounded-lg w-full md:col-span-2">
    
        <input type="text" name="city" required  placeholder="votre ville" class="border border-gray-300 p-3 rounded-lg w-full">
        
        
    
        <input type="date" name="dob" required class="border border-gray-300 p-3 rounded-lg w-full">
        
        <input type='text' placeholder="Niveau d'études" name="education_level" required class="border border-gray-300 p-3 rounded-lg w-full">
          
    
        <input type="text" name="experience" placeholder="Années d'expérience" class="border border-gray-300 p-3 rounded-lg w-full">
    
        <div class="md:col-span-2">
            <label class="block text-gray-700 font-medium mb-2">Joindre votre CV * (.pdf / .doc / .docx) :</label>
            <input type="file" name="cv" required class="border border-gray-300 p-3 rounded-lg w-full" accept=".pdf,.doc,.docx">
        </div>
    
        <div class="md:col-span-2 flex justify-center mt-6">
            <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-full shadow-md hover:bg-red-600">
                Envoyer
            </button>
        </div>
    </form>
    
    </div>
</div>












<footer class="bg-[#18181b] text-white py-12 ">
    <div class=" w-[90vw] mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
     
      <div class="mb-6 md:mb-0 text-center md:text-left">
        <h2 class="text-2xl font-bold text-[#c01c2e]">EXCEL INTERIM</h2>
        <p class="text-gray-400 mt-2 max-w-md">
            N23 Lotissement Florida Centre
            Park 2 1ère étage Arr. Aïn Chok
            Sidi Maarouf, CASABLANCA
        </p>
      </div>

     
      <div class="flex space-x-8 text-sm text-gray-400">
      <a href="/" class="hover:text-[#c01c2e] transition">Excel Interim </a>
       <a href="/shop" class="hover:text-[#c01c2e] transition">Nos services</a>
       <a href="/faqs" class="hover:text-[#c01c2e] transition">Candidature</a>
      </div>

      <div class="flex space-x-6 pt-5">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="text-zinc-400 hover:text-[#c01c2e] transition">
            <i class="bi bi-facebook"  ></i>
      
        </a>
        <a href="https://www.instagram.com/kaws.maroc?igsh=M2VhNXV2cGt6MXJl" target="_blank" rel="noopener noreferrer" class="text-zinc-400 hover:text-[#c01c2e] transition">
            <i class="bi bi-instagram"  ></i>
          
        </a>
        <button onClick={handleWhatsAppClick} href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="text-zinc-400 hover:text-[#c01c2e] transition">
            <i class="bi bi-linkedin" ></i>
        </button>
      </div>
    </div>

   
    <div class="text-center text-gray-500 text-sm mt-10 border-zinc-600 border-t pt-8 w-[90vw] mx-auto">
      <p>&copy; 2025 EXCEL INTERIM . All rights reserved.</p>
    </div>
  </footer> 
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".dropdown-btn").forEach(button => {
            button.addEventListener("click", function (event) {
                event.stopPropagation(); 
                const dropdown = this.nextElementSibling;

                document.querySelectorAll(".dropdown-menu").forEach(menu => {
                    if (menu !== dropdown) {
                        menu.classList.add("opacity-0", "invisible", "scale-95");
                    }
                });

                dropdown.classList.toggle("opacity-0");
                dropdown.classList.toggle("invisible");
                dropdown.classList.toggle("scale-95");
            });
        });

        document.addEventListener("click", function () {
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
                menu.classList.add("opacity-0", "invisible", "scale-95");
            });
        });
    });
</script>

<style>
    
    /* Scrollbar width */
::-webkit-scrollbar {
width: 8px; /* Adjust width as needed */
}

/* Scrollbar track */
::-webkit-scrollbar-track {
background: #f1f1f1; /* Light gray background */
border-radius: 10px;
}

/* Scrollbar handle */
::-webkit-scrollbar-thumb {
background: #888; /* Dark gray handle */
border-radius: 10px;
}

/* Scrollbar handle on hover */
::-webkit-scrollbar-thumb:hover {
background: #555; /* Slightly darker handle */
}

</style>
<script>
    
// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

// Language toggle
const langToggle = document.getElementById('lang-toggle');
const langMenu = document.getElementById('lang-menu');

langToggle?.addEventListener('click', () => {
  langMenu.classList.toggle('hidden');
  const arrow = langToggle.querySelector('svg');
  arrow.classList.toggle('rotate-180');
});

// Mobile dropdowns
const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');

mobileDropdownBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const menu = btn.nextElementSibling;
    const arrow = btn.querySelector('svg');
    menu.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
  });
});

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
  // Close language menu
  if (!langToggle?.contains(e.target)) {
    langMenu?.classList.add('hidden');
    const arrow = langToggle?.querySelector('svg');
    arrow?.classList.remove('rotate-180');
  }
});

// Handle window resize
window.addEventListener('resize', () => {
  if (window.innerWidth >= 1024) { // lg breakpoint
    mobileMenu.classList.add('hidden');
  }
});
</script>
</body>
</html>