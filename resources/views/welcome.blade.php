<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *,
            :before,
            :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            *,
            :before,
            :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before,
            :after {
                --tw-content: ""
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            button,
            input:where([type=button]),
            input:where([type=reset]),
            input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button,
            [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
</head>

<body>

    <nav id="navbar"
        class="bg-white shadow-md fixed top-0 left-0 w-full z-50 animate-fade-in-down transition-all py-2">
        <div class="container mx-auto flex justify-between items-center p-1">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-gray-800 text-2xl font-bold flex items-center space-x-1">
                <img src="{{ asset('storage/images/image-removebg-preview (9).png') }}" class="w-[4vw]" alt="">
                <span class="text-[#c01c2e] text-lg">Excel Interim</span>
            </a>

            <!-- Navigation Links -->
            <ul class="flex space-x-6 items-center">
                <li class="relative group z-50">
                    <a href="{{ url('/') }}"
                        class="dropdown-btn text-black font-semibold hover:text-[#c01c2e] hover:bg-zinc-300  transition duration-700 px-4 py-2 rounded-3xl">
                        RHS EMPLOI
                    </a>
                    <ul
                        class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white  shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                        <li><a href="{{ url('/mdd') }}" class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Mot du directeur")</a></li>
                        <li><a href="{{ url('/qsn') }}" class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Qui sommes-nous")</a></li>
                        <li><a href="{{ url('/nosvaleur') }}" class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Nos valeurs")</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <a href="{{ url('/travailT') }}"
                        class="dropdown-btn text-gray-800 font-semibold hover:text-[#c01c2e] hover:bg-zinc-300 transition duration-700 px-4 py-2 rounded-3xl">
                        @lang("messages.Nos services")
                    </a>
                    <ul
                        class="dropdown-menu absolute left-0 mt-4 w-[20vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95 group-hover:opacity-100 group-hover:visible group-hover:scale-100">
                        <li><a href="{{ url('/travailT') }}"
                                class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Travail temporaire")</a></li>
                        <li><a href="{{ url('/interim') }}"
                                class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Recrutement")</a></li>
                        <li><a href="{{ url('/conseil') }}"
                                class="block px-4 py-2 text-black hover:bg-gray-100">@lang("messages.Conseil RH")</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/nosoffers') }}"
                        class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">@lang("messages.Offres d'emploi")</a></li>
                <li><a href="{{ url('/candidature') }}"
                        class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">@lang("messages.Candidature")</a>
                </li>
                {{-- <li><a href="{{ url('/contact') }}" class="text-gray-800 font-semibold hover:bg-zinc-300 hover:text-[#c01c2e] transition duration-700 px-4 py-2 rounded-3xl">@lang("messages.Contact")</a></li> --}}
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4  rounded-md text-gray-800 font-semibold bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{ route('login') }}" class=" bg-[#c01c2e] text-white px-5 py-2 rounded-xl"> Log in </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=' text-[#c01c2e] font-semibold'> Register </a>
                    @endif
                @endauth
            </ul>

            <!-- Language Toggle with Dropdown -->
            <div class="relative">
                <button class="dropdown-btn text-xl text-gray-800  font-bold px-4 py-2 flex items-center space-x-1">
                    <span id="selected-lang"><i class="bi bi-translate"></i></span>
                    <svg class="w-4 h-4 transition-transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul
                    class="dropdown-menu absolute right-0 mt-2 w-[8vw] bg-white shadow-lg rounded-md py-2 opacity-0 invisible transition-all ease-in-out duration-300 transform scale-95">
                    <li><a href="{{ url('locale/en') }}"
                            class="block px-4 py-2 hover:bg-gray-100 text-gray-600">@lang('messages.Anglais')</a></li>
                    <li><a href="{{ url('locale/fr') }}"
                            class="block px-4 py-2 hover:bg-gray-100  text-gray-600">@lang("messages.Français")</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="relative bg-black">
        <!-- Splide Carousel -->
        <div class="splide relative" id="carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide relative">
                        <div class="relative w-full h-[100vh]">
                            <img src="{{ asset('storage/images/pixelcut-export.jpeg') }}"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/50"></div>
                            <div class="absolute top-1/3 w-full text-center text-white animate-fadeInUp">
                                <h1 class="text-4xl font-bold  ">@lang("messages.RECRUTEMENT") <span class="text-[#c01c2e] text-5xl">.</span></h1>
                                <p class="mt-3 text-2xl text-gray-200">@lang("messages.Nous facilitons votre embauche et trouvons le meilleur candidat")</p>
                                <button
                                    class=" rounded-lg px-4 py-2 text-lg mt-8 transition duration-700 bg-[#c01c2e] text-5xl">@lang("messages.Lire Plus")</button>
                                {{-- <button class="cta flex items-center">
                                                    <span class="pt-3">Hover me</span>
                                                    <svg width="15px" height="10px"  viewBox="0 0 13 10">
                                                      <path d="M1,5 L11,5"></path>
                                                      <polyline points="8 1 12 5 8 9"></polyline>
                                                    </svg>
                                                  </button> --}}
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide relative">
                         
                        <div class="relative w-full h-[100vh]">
                            <img src="{{ asset('storage/images/pixelcut-export (2).jpeg') }}"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/50"></div>
                            <div class="absolute top-1/3 w-full text-center text-white animate-fadeInUp">
                                <h1 class="text-4xl font-bold ">@lang("messages.Conseil en Organisation RH")<span class="text-[#c01c2e] text-5xl">.</span></h1>
                                <p class="mt-3 text-xl text-gray-200">@lang("messages.Votre partenaire Ressources Humaines. Nous disposons d'une grande expérience dans le conseil et l'organisation des ressources humaines.")</p>
                                <button
                                    class=" rounded-lg px-4 py-2 text-lg mt-8 transition duration-700 bg-[#c01c2e]">@lang("messages.Lire Plus")</button>
                                {{-- <button class="cta flex items-center">
                                                    <span class="pt-3">Hover me</span>
                                                    <svg width="15px" height="10px"  viewBox="0 0 13 10">
                                                      <path d="M1,5 L11,5"></path>
                                                      <polyline points="8 1 12 5 8 9"></polyline>
                                                    </svg>
                                                  </button> --}}
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide relative">
                        <div class="relative w-full h-[100vh]">
                            <img src="{{ asset('storage/images/pixelcut-export (5).jpeg') }}"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="absolute top-1/3 w-full text-center text-white animate-fadeInUp">
                                <h1 class="text-4xl font-bold ">@lang("messages.Travail temporaire") <span class="text-[#c01c2e] text-5xl">.</span></h1>
                                <p class="mt-3 text-xl text-gray-200">Contrats Flexibles,
                                    Nous avons développé au fil des années un savoir-faire <br> et des solutions
                                    adaptées aux besoins de nos clients en Travail Temporaire</p>
                                <button
                                    class=" rounded-lg px-4 py-2 text-lg mt-8 transition duration-700 bg-[#c01c2e]">@lang('messages.Lire Plus')</button>
                                {{-- <button class="cta flex items-center">
                                                    <span class="pt-3">Hover me</span>
                                                    <svg width="15px" height="10px"  viewBox="0 0 13 10">
                                                      <path d="M1,5 L11,5"></path>
                                                      <polyline points="8 1 12 5 8 9"></polyline>
                                                    </svg>
                                                  </button> --}}
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- section explore --}}
    <section>
        <div class="flex center-items justify-center space-x-20 mt-20 ">
            <div class="pt-40 ">
                <h1 class="text-4xl font-bold text-[#c01c2e] ">@lang("messages.Travail temporaire")</h1>
                <p class="text-xl text-gray-800 pt-5 w-[40vw] ">@lang("messages.Nous avons développé au fil des années un savoir-faire et des solutions adaptées aux besoins de nos clients en Travail Temporaire.")</p>
                <button
                    class="text-blue-950 text-lg font-semibold mt-7 px-6 py-2 border-blue-950 transform transition-transform hover:scale-110 border rounded-full">@lang("messages.Lire Plus")</button>
            </div>
            <div>
                <img src="{{ asset('storage/images/Your paragraph text (1).png') }}"
                    class="w-[40vw] rounded-3xl h-[80vh] object-cover">
            </div>
        </div>

        <div class="flex center-items justify-center space-x-20 mt-12">
            <div>
                <img src="{{ asset('storage/images/Your paragraph text (2).png') }}"
                    class="w-[40vw] rounded-3xl h-[80vh] object-cover">
            </div>
            <div class="pt-36 ">
                <h1 class="text-4xl font-bold text-[#c01c2e]">@lang("messages.RECRUTEMENT")</h1>
                <p class="text-xl text-gray-800 pt-4 w-[40vw]">@lang("messages.Nous sommes conscients des enjeux forts du recrutement, et nous engageons notre expérience et nos outils éprouvés pour garantir la meilleure adéquation poste/profil dans les meilleurs délais.")</p>
                <button
                    class="text-blue-950 text-lg font-semibold mt-7 px-6 py-2 border-blue-950 transform transition-transform hover:scale-110 border rounded-full">@lang("messages.Lire Plus")</button>
            </div>
        </div>

        <div class="flex center-items justify-center space-x-20 mt-10">
            <div class="pt-48 ">
                <h1 class="text-4xl font-bold text-[#c01c2e]">@lang("messages.Conseil RH")</h1>
                <p class="text-xl text-gray-800 pt-5 w-[40vw]">@lang("messages.Nous disposons d'une grande expérience dans le conseil et l’organisation des ressources humaines. Nos missions de conseil et d’accompagnement procurent une valeur ajoutée distincte à toutes nos entreprises partenaires.")</p>
                <button
                    class="text-blue-950 text-lg font-semibold mt-7 px-6 py-2 border-blue-950 transform transition-transform hover:scale-110 border rounded-full">@lang("messages.Lire Plus")</button>
            </div>
            <div>
                <img src="{{ asset('storage/images/Your paragraph text.png') }}"
                    class="w-[40vw] rounded-3xl h-[80vh] object-cover">
            </div>
        </div>
    </section>






    {{-- section services --}}
    <section class="splide ms-5 mt-32 " id="secteurs-carousel">
        <h1 class="text-gray-800 border-l-4 border-[#c01c2e] ps-4 text-4xl font-bold ">@lang("messages.Nos Secteurs D'activité")</h1>
        <div class="splide__track mt-10">
            <ul class="splide__list">
                @php
                    $secteurs = [
                        ['name' => 'Industrie', 'image' => 'storage/images/industrie 4.jpg.webp'],
                        ['name' => 'Transport', 'image' => 'storage/images/quels-differents-types-logistique-1.jpg'],
                        ['name' => 'Aeronautique', 'image' => 'storage/images/aeronautique-Maroc-1.jpg'],
                        [
                            'name' => 'Automobile',
                            'image' => 'storage/images/6960e14ab36e3c6adbef4ace0e291b0b20240913153347.jpeg',
                        ],
                        ['name' => 'Textile', 'image' => 'storage/images/647f8a6a1dc37_text.jpeg'],
                        ['name' => 'Pharmaceutique', 'image' => 'storage/images/pharmaSmall.jpg'],
                        ['name' => 'Agricole', 'image' => 'storage/images/istockphoto-1451085775-612x612.jpg'],
                    ];
                @endphp

                @foreach ($secteurs as $secteur)
                    <li class="splide__slide ">
                        <img src="{{ asset($secteur['image']) }}" alt="{{ $secteur['name'] }}"
                            class="w-[23vw] h-[45vh] object-cover rounded-xl">
                        <h3 class="   border-blue-900 text-center font-medium ">{{ $secteur['name'] }}</h3>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="bg-zinc-500/10 py-20 mt-14">
        <h2 class="text-gray-800 border-l-4 border-[#c01c2e] ps-4 text-4xl font-bold ms-5 "> @lang("messages.Excel Interim en chiffres")
        </h2>

        <div class="container mx-auto text-center">
            <p class="pt-4 text-zinc-600 text-xl "> " @lang("messages.Notre philosophie, en se matérialisant à travers des services et des avantages concrets pour nos clients et nos ressources, est devenue une véritable force") "</p>
            <div class="flex justify-center space-x-36 mt-10">
                <div>
                    <div class="flex items-center space-x-3">
                        <i class="bi bi-people text-4xl text-zinc-800 bg-zinc-500/10 px-3 py-2 rounded-full"></i>
                        <h3 class="text-4xl font-semibold text-zinc-800"><span class="counter"
                                data-target="40">0</span>+</h3>
                    </div>
                    <p class="text-lg text-gray-700 font-semibold pt-1 ">@lang("messages.Clients")</p>
                </div>
                <div>
                    <div class="flex items-center space-x-3">
                        <i class="bi bi-briefcase text-4xl text-zinc-800 bg-zinc-500/10 px-3 py-2 rounded-full"></i>
                        <h3 class="text-4xl font-semibold text-zinc-800"><span class="counter"
                                data-target="1440">0</span>+</h3>
                    </div>
                    <p class="text-lg text-gray-700 font-semibold  pt-1 ">@lang("messages.Recrutement")</p>
                </div>
                <div>
                    <div class="flex items-center space-x-3">
                        <i class="bi bi-person-add text-4xl text-zinc-800 bg-zinc-500/10 px-3 py-2 rounded-full"></i>
                        <h3 class="text-4xl font-semibold text-zinc-800"><span class="counter"
                                data-target="60">0</span>+</h3>
                    </div>
                    <p class="text-lg text-gray-700 font-semibold  pt-1 ">@lang("messages.Collaborateurs")</p>
                </div>
                <div>
                    <div class="flex items-center space-x-3">
                        <i class="bi bi-award text-4xl text-zinc-800 bg-zinc-500/10 px-3 py-2 rounded-full"></i>
                        <h3 class="text-4xl font-semibold text-zinc-800"><span class="counter"
                                data-target="1600">0</span>+</h3>
                    </div>
                    <p class="text-lg text-gray-700 font-semibold  pt-1 ">@lang("messages.Eumbauchés")</p>
                </div>
            </div>
        </div>
    </section>

    {{-- video section --}}
    <div class="relative w-full h-[39vh] bg-fixed bg-cover bg-center"
        style="background-image: url('{{ asset('storage/images/nv.jpg') }}');">
        <div class="absolute inset-0 bg-black/50 flex justify-center items-center">
            <button id="openModal"
                class="mt-10 w-16 h-16 flex justify-center items-center bg-[#c01c2e] rounded-full shadow-lg transition transform hover:scale-110 duration-500">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 5v14l11-7z"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div id="videoModal" class="fixed inset-0 hidden bg-black/80 flex justify-center items-center">
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-[80vw] max-w-2xl">
            <button id="closeModal" class="absolute top-2 right-2 text-xl font-bold text-gray-700">&times;</button>
            <video controls class="w-full h-auto rounded-lg">
                <source src="{{ asset('storage/videos/sample-video.mp4') }}" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
    </div>


    <section class="py-12">
        <h1 class="text-center text-4xl text-[#c01c2e] font-bold ">@lang("messages.Conseil RH")</h1>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-[#18181b] text-white rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z" />
                        </svg>
                    </div>
                    <img src="{{ asset('storage/images/AsouoSznYmZHtDK88ABlzeUU.webp') }}" alt="Recruitment Image"
                        class="w-full h-[40vh] object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">@lang("messages.Innovations RH") </h3>
                        <p class="text-gray-600">@lang("messages.Innovations RH et managériales de Barabel, Loeuilleux et Meier dévoile des horizons audacieux pour les DRH, combinant technologies, agilité et intelligence collective. Une invitation inspirante à repenser la gestion des ressources humaines et du management.")</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-[#18181b] text-white rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z" />
                        </svg>
                    </div>
                    <img src="{{ asset('storage/images/1705579121745.jpg ') }}" alt="AI Image"
                        class="w-full h-[40vh] object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">@lang("messages.IA : Fini le chaos des absences ?")</h3>
                        <p class="text-gray-600">@lang("messages.Qu'elles soient imprévues ou même planifiées, les absences représentent, au sein de toute entreprise, de grands obstacles qui compliquent la gestion quotidienne des plannings de travail, ce qui peut engendrer une baisse de la productivité. De nos jours, plusieurs solutions digitales ont fait leur apparence pour aider à mieux gérer les absences des collaborateurs.")</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden relative">
                    <div class="absolute top-4 left-4 bg-[#18181b] text-white rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z" />
                        </svg>
                    </div>
                    <img src="{{ asset('storage/images/1673356776302.jpg') }}" alt="HR Strategy Image"
                        class="w-full h-[40vh] object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">@lang("messages.Stratégie RH : Êtes-vous un RH du futur ?")</h3>
                        <p class="text-gray-600">@lang("messages.Au cours de ces dernières années, la fonction RH a profondément évolué. Passant de la simple gestion administrative à une fonction centrale des entreprises.")</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-zinc-900 text-white py-8 mt-32 ">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 pt-10">
            <!-- Social Media Links -->
            <div>
                <h4 class="text-lg  border-zinc-100 font-semibold pb-6 "><span>SOC</span>IAL LINKS </h4>
                <ul>
                    <li class="mb-2 flex items-center space-x-2">
                        <i class="bi bi-linkedin text-[#c01c2e]"></i> <a href="#"
                            class="hover:underline">LinkedIn</a>
                    </li>
                    <li class="mb-2 flex items-center space-x-2">
                        <i class="bi bi-twitter text-[#c01c2e]"></i> <a href="#"
                            class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-2 flex items-center space-x-2">
                        <i class="bi bi-instagram text-[#c01c2e]"></i> <a href="#"
                            class="hover:underline">Instagram</a>
                    </li>
                </ul>
            </div>

            <!-- Address Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">ADRESSE</h4>
                <p class="mb-2">
                    <span class="block">N23 Lotissement Florida Centre</span>
                    <span class="block">Park 2 1ère étage Arr. Aïn Chok</span>
                    <span class="block">Sidi Maarouf, CASABLANCA</span>
                </p>
                <p class="mb-2 flex items-center space-x-2">
                    <span class="font-semibold">&#9742;</span> <span>0522672077</span>
                </p>
                <p class="flex items-center space-x-2">
                    <span class="font-semibold">&#9993;</span> <span><a href="mailto:marketing@excelinterim.com"
                            class="hover:underline">marketing@excelinterim.com</a></span>
                </p>
            </div>

            <!-- Links Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">EXCEL INTERIM</h4>
                <ul>
                    <li class="mb-2 flex items-center space-x-2">
                        <span class="text-[#c01c2e]">&#8226;</span> <a href="#" class="hover:underline">Mot du
                            Directeur</a>
                    </li>
                    <li class="mb-2 flex items-center space-x-2">
                        <span class="text-[#c01c2e]">&#8226;</span> <a href="#" class="hover:underline">Qui
                            Sommes-Nous ?</a>
                    </li>
                    <li class="mb-2 flex items-center space-x-2">
                        <span class="text-[#c01c2e]">&#8226;</span> <a href="#" class="hover:underline">Nos
                            Valeurs</a>
                    </li>
                    <li class="mb-2 flex items-center space-x-2">
                        <span class="text-[#c01c2e]">&#8226;</span> <a href="#" class="hover:underline">Guide
                            de l'intérim</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto text-center mt-8 border-t border-gray-700 pt-4">
            <p class="text-sm">&copy; EXCEL INTERIM 2024</p>
        </div>

        <!-- Back to Top Button -->
        <div class="fixed bottom-6 right-4">
            <a href="#"
                class="bg-blue-950 text-white px-5 py-4 rounded-full shadow-lg  transition duration-300"> <i
                    class="bi bi-arrow-up"></i> </a>
        </div>
    </footer>
























    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Splide('#carousel', {
                type: 'loop',
                autoplay: true,
                interval: 3000,
                arrows: true,
                pagination: true
            }).mount();
        });
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll(".counter");

            counters.forEach(counter => {
                let target = +counter.getAttribute("data-target");
                let count = 0;
                let increment = target / 100;

                function updateCounter() {
                    if (count < target) {
                        count += increment;
                        counter.textContent = Math.ceil(count);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target;
                    }
                }

                updateCounter();
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const openModal = document.getElementById("openModal");
            const closeModal = document.getElementById("closeModal");
            const videoModal = document.getElementById("videoModal");

            openModal.addEventListener("click", function() {
                videoModal.classList.remove("hidden");
            });

            closeModal.addEventListener("click", function() {
                videoModal.classList.add("hidden");
            });

            window.addEventListener("click", function(e) {
                if (e.target === videoModal) {
                    videoModal.classList.add("hidden");
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#secteurs-carousel', {
                type: 'loop',
                perPage: 4,
                autoplay: true,
                interval: 3000,
                pauseOnHover: false,
                arrows: false,
                pagination: false,
                breakpoints: {
                    1024: {
                        perPage: 2
                    },
                    768: {
                        perPage: 1
                    },
                }
            }).mount();
        });
    </script>
    {{-- <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            let counters = document.querySelectorAll(".timer");
                            
                            counters.forEach(counter => {
                                let target = parseInt(counter.getAttribute("data-to"));
                                let speed = parseInt(counter.getAttribute("data-speed")) / target;
                                let count = 0;
                        
                                function updateCounter() {
                                    if (count < target) {
                                        count += Math.ceil(target / 100); // Increase count gradually
                                        counter.textContent = count;
                                        setTimeout(updateCounter, speed);
                                    } else {
                                        counter.textContent = target; // Ensure final value is accurate
                                    }
                                }
                        
                                updateCounter();
                            });
                        });
                        </script> --}}

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-in-out;
        }

        .splide__slide {
            text-align: center;
            background: #ffffff;
            overflow: hidden;
        }

        .splide__slide h3 {
            font-size: 20px;
            color: #0b001b;
        }

        /* Scrollbar width */
        ::-webkit-scrollbar {
            width: 8px;
            /* Adjust width as needed */
        }

        /* Scrollbar track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Light gray background */
            border-radius: 10px;
        }

        /* Scrollbar handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            /* Dark gray handle */
            border-radius: 10px;
        }

        /* Scrollbar handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Slightly darker handle */
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".dropdown-btn").forEach(button => {
                button.addEventListener("click", function(event) {
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

            document.addEventListener("click", function() {
                document.querySelectorAll(".dropdown-menu").forEach(menu => {
                    menu.classList.add("opacity-0", "invisible", "scale-95");
                });
            });
        });
    </script>


    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fadeInDown 0.8s ease-out;
        }
    </style>


</body>

</html>
