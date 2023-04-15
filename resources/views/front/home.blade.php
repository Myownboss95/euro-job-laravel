<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script>
        const site_ajax = "https://01node.com/wp-admin/admin-ajax.php";
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <link rel="preload" as="style" href="{{ asset('node/wp-content/themes/01node/public/css/app.css') }}">
    <link rel="preload" as="script" href="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js">
    <link rel="preload" as="script" href="{{ asset('node/wp-content/themes/01node/public/js/app.js') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('node/wp-content/themes/01node/public/css/app.css') }}">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <!-- This site is optimized with the Yoast SEO plugin v19.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>{{ config('app.name') }}</title>
    <link rel="canonical" href="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - {{config('app.name')}}" />
    <meta property="og:url" content="{{config('app.aliases.URL')}}" />
    <meta property="og:site_name" content="{{config('app.name')}}" />
    <meta property="article:modified_time" content="2022-09-26T10:28:59+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json"
		class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"{{config('app.url')}}","url":"{{config('app.url')}}","name":"Home - 01node","isPartOf":{"@id":"{{config('app.url')}}#website"},"about":{"@id":"{{config('app.url')}}#organization"},"datePublished":"2021-10-01T09:33:07+00:00","dateModified":"2022-09-26T10:28:59+00:00","breadcrumb":{"@id":"{{config('app.url')}}#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["{{config('app.url')}}"]}]},{"@type":"BreadcrumbList","@id":"{{config('app.url')}}#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Prima pagină"}]},{"@type":"WebSite","@id":"{{config('app.url')}}#website","url":"{{config('app.url')}}","name":"01node","description":"Doar un alt site web WordPress","publisher":{"@id":"{{config('app.url')}}#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"{{config('app.url')}}?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"{{config('app.url')}}#organization","name":"01node","url":"{{config('app.url')}}","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"{{config('app.url')}}#/schema/logo/image/","url":"{{config('app.url')}}wp-content/uploads/2021/10/logo-white.svg","contentUrl":"{{config('app.url')}}wp-content/uploads/2021/10/logo-white.svg","width":93,"height":32,"caption":"01node"},"image":{"@id":"{{config('app.url')}}#/schema/logo/image/"}}]}</script>
    <!-- / Yoast SEO plugin. -->
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/01node.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
        .goog-logo-link {
        display:none !important;
        }

        .goog-te-gadget {
        color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {
        color: blue !important;
        }
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='prismatic-blocks-css'
        href="{{ asset('node/wp-content/plugins/prismatic/css/styles-blocks.css') }}" media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.min.css?ver=1'
        media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('index.html');
            --wp--preset--duotone--grayscale: url('index.html');
            --wp--preset--duotone--purple-yellow: url('index.html');
            --wp--preset--duotone--blue-red: url('index.html');
            --wp--preset--duotone--midnight: url('index.html');
            --wp--preset--duotone--magenta-yellow: url('index.html');
            --wp--preset--duotone--purple-green: url('index.html');
            --wp--preset--duotone--blue-orange: url('index.html');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='prismatic-highlight-css'
        href="{{ asset('node/wp-content/plugins/prismatic/lib/highlight/css/monokai-sublime.css') }}" media='all' />
    {{-- <link rel="icon" href="{{ asset('node/wp-content/uploads/2021/10/cropped-favicon-32x32.png') }}"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('node/wp-content/uploads/2021/10/cropped-favicon-192x192.png') }}" --}}
        sizes="192x192" />
        <link rel="icon" href="{{asset('favicon.png')}}">
    {{-- <link rel="apple-touch-icon" href="{{ asset('node/wp-content/uploads/2021/10/cropped-favicon-180x180.png') }}" /> --}}
    <meta name="msapplication-TileImage"
        content="https://01node.com/wp-content/uploads/2021/10/cropped-favicon-270x270.png" />
</head>

<body id="modal"
class="font-base text-base break-words home page-template page-template-template-home page-template-template-home-php page page-id-10 wp-custom-logo wp-embed-responsive modal container-fluid">
<x-popup />
    <picture class="site-bg">
        <source srcset="https://01node.com/wp-content/uploads/2021/10/main-bg.webp" type="image/webp">
        <source srcset="https://01node.com/wp-content/uploads/2021/10/main-bg.png" type="image/png"><img
            src="{{ asset('node/wp-content/uploads/2021/10/main-bg.png') }}" width="2230" height="1492">
    </picture>
    <header class="site-header" x-data="siteHeader" @click.outside="close">
        <div class="bg-black px-5 sm:px-[37px] py-[1.47134375rem] order-1" data-component="logo">
            <a href="/">
                <div>
                    <img width="160" src="{{ asset('mainlogo1.png')}}" class="logo">
                     
                </div>
            </a>
        </div>
        
        <div class="bg-primary py-[2.1859375rem] px-5 md:px-md lg:px-[37px] order-3 md:order-3 ml-5 sm:ml-lg md:ml-0"
            data-component="socials-nav">
            <ul class="list-unstyled flex flex-wrap items-center -m-xs md:mx-[-0.84375rem]">
                
                <li class="p-xs md:px-[0.84375rem]"><a href="https://twitter.com/coinstaking_app" target="_blank"
                        class="text-black hover:text-primary-900 transition-colors duration-200 ease-in-out"><svg
                            xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12.38 10.05"
                            class="fill-current w-[0.77375rem] h-[0.62875rem]" data-icon="twitter">
                            <path
                                d="M12.38,1.18a5.18,5.18,0,0,1-1.46.4A2.58,2.58,0,0,0,12,.18a5.21,5.21,0,0,1-1.62.61A2.54,2.54,0,0,0,6.1,3.11,7.25,7.25,0,0,1,.86.45a2.56,2.56,0,0,0,.79,3.4A2.59,2.59,0,0,1,.5,3.52v0a2.55,2.55,0,0,0,2,2.5,2.57,2.57,0,0,1-.67.09,2.61,2.61,0,0,1-.48,0A2.54,2.54,0,0,0,3.76,7.85,5.14,5.14,0,0,1,.61,8.94,6,6,0,0,1,0,8.9a7.16,7.16,0,0,0,3.89,1.15,7.19,7.19,0,0,0,7.23-7.13V2.49A5.1,5.1,0,0,0,12.38,1.18Z" />
                        </svg></a></li>
                </ul>
        </div>
        
        <button
            class="flex flex-col items-center justify-center order-2 w-10 h-10 ml-auto text-2xl leading-3 outline-none md:hidden focus:outline-none text-primary"
            @click="toggle">
            <div class="block" :class="{ 'block': !open, 'hidden': open }"><svg version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewbox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"
                    class="w-full fill-current">
                    <path
                        d="M8.667,15h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,15,8.667,15z" />
                    <path
                        d="M8.667,37h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,37,8.667,37z" />
                    <path
                        d="M8.667,26h30c0.552,0,1-0.447,1-1s-0.448-1-1-1h-30c-0.552,0-1,0.447-1,1S8.114,26,8.667,26z" />
                </svg></div>
            <div class="hidden" :class="{ 'block': open, 'hidden': !open }"><svg xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="w-full fill-current">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></div>
        </button>
                        
        <div class="order-4 hidden w-full md:ml-auto md:flex md:order-2 md:w-auto p-5 sm:p-[37px] md:p-0"
            :class="{ 'block': open, 'hidden': !open }">
            <ul class="primary-menu list-unstyled " data-component="primary-menu">
                <li id="google_translate_element" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"></li>
                <li class="mega-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-392 menu-item-has-children has-dropdown">
                    
                    <div class="dropdown-toggle">
                        
                        <a target="" href="#"><span>Coins</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 6.34 4.76"
                                class="fill-current w-[0.39625rem] h-[0.2975rem] align-middle ml-sm hidden md:block"
                                data-icon="triangle-down">
                                <path
                                    d="M3.76,4.41,6.17.89A.89.89,0,0,0,6.34.43C6.34.16,6.13,0,5.78,0H.56C.21,0,0,.16,0,.42A.9.9,0,0,0,.17.89L2.58,4.41a.73.73,0,0,0,.59.35A.73.73,0,0,0,3.76,4.41Z" />
                            </svg></a>
                        <button class="dropdown-toggle-button"><svg xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 6.34 4.76" class="fill-current w-[0.39625rem] h-[0.2975rem]"
                                data-icon="triangle-down">
                                <path
                                    d="M3.76,4.41,6.17.89A.89.89,0,0,0,6.34.43C6.34.16,6.13,0,5.78,0H.56C.21,0,0,.16,0,.42A.9.9,0,0,0,.17.89L2.58,4.41a.73.73,0,0,0,.59.35A.73.73,0,0,0,3.76,4.41Z" />
                            </svg></button>
                    </div>
                    
                    
                </li>
                
                @if (!Auth::check())
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a
                            target="" href="/register">Register</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a
                            target="" href="/login">Login</a></li>
                @else
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a
                            target=""
                            href="
					@if (Auth::user()->is_admin) {{ url('/admin') }}
					@else
                    {{ url('/user') }} @endif
					">Dashboard</a>
                    </li>
                @endif

        </div>
    </header>
    <section class="relative text-white bg-black" data-component="hero-home">
        <picture class="absolute top-0 bottom-0 left-0 right-0 pointer-events-none select-none">
            <source srcset="https://01node.com/wp-content/uploads/2021/10/hero-about-bg.webp" type="image/webp">
            <source srcset="https://01node.com/wp-content/uploads/2021/10/hero-about-bg.jpg" type="image/jpeg"><img
                src="{{ asset('node/wp-content/uploads/2021/10/hero-about-bg.jpg" width="1920" height="1678') }}"
                alt="High Quality Staking And Validation Services" class="object-cover w-full h-full">
        </picture>
        <div class="py-3xl md:pt-[212px] md:pb-[216px]"><a href="http://planteazainromania.ro/" target="_blank"
                class="-mt-[66px] mb-[66px] md:my-0 relative block md:fixed md:left-auto z-[999] md:top-28 md:right-lg">
                <picture class="max-w-[60px] md:max-w-[100px] lg:max-w-[150px] hidden md:block"
                    data-component="image">
                    <source srcset="https://01node.com/wp-content/uploads/2022/04/we-breathe-we-give-we-plant.webp"
                        type="image/webp">
                    <source srcset="https://01node.com/wp-content/uploads/2022/04/we-breathe-we-give-we-plant.png"
                        type=""><img
                        src="{{ asset('node/wp-content/uploads/2022/04/we-breathe-we-give-we-plant.png') }}"
                        width="" height="" alt="High Quality Staking And Validation Services">
                </picture>
                <picture class="md:hidden" data-component="image">
                    <source
                        srcset="https://01node.com/wp-content/uploads/2022/04/we-breathe-we-give-we-plant-mobile.webp"
                        type="image/webp">
                    <source
                        srcset="https://01node.com/wp-content/uploads/2022/04/we-breathe-we-give-we-plant-mobile.png"
                        type=""><img
                        src="{{ asset('node/wp-content/uploads/2022/04/we-breathe-we-give-we-plant-mobile.png') }}"
                        width="" height="" alt="High Quality Staking And Validation Services">
                </picture>
            </a>
            <div class="container relative z-10  space-y-xl md:space-y-[190px]">
                <div>
                    <div class="mb-5 lg:pr-[32.16216216216216%]">
                        <h1 class="mb-0 text-primary">High quality staking and validation services</h1>
                        <h3 class="mb-0 font-light h1 text-primary">Safe. Secure. Easy</h3>
                    </div>
                    <div class="lg:pr-[51.35135135135135%]">
                        <p>Earn interest on your cryptoassets by delegating them, enjoy their compounding effect the
                            easy way!</p>
                    </div>
                    <div class="mt-lg md:mt-[70px]">
                        <div>Assets staked with us</div>
                        <div class="h2 text-primary">over $550M</div>
                    </div><a href="{{ route('login') }}" class="btn primary dark mt-lg md:mt-10">Invest with us</a>
                    <div class="mt-lg md:mt-[70px]">
                        Special offer only for this month:<br>

Deposit above 500$ (USD) Worth of any listed coin and receive free 1500TRX(Tron)<br>

Deposit above 2000$ (USD) Worth of any listed coin and receive free 3700TRX(Tron)<br>

Deposit above 10000$ (USD) Worth of any listed coin and receive free 7000TRX(Tron)<br>

Deposit above 20000$ (USD) Worth of any listed coin and receive free 15000TRX(Tron)
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                    <div>
                        <h2 class="mb-0 h1 text-primary md:pr-[29.62962962962963%]">The advantage of staking your
                            assets
                            today</h2>
                    </div>
                    <div class="space-y-lg md:space-y-[60px]">
                        <div class="flex flex-row flex-nowrap space-x-lg" data-component="advantage-box">
                            <div class="w-[50px]">
                                <lord-icon src="https://cdn.lordicon.com/ngcezuqf.json" trigger="loop" delay="1000"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:47px;height:47px">
                                </lord-icon>
                            </div>
                            <div class="space-y-md">
                                <h3 class="mb-0 text-primary h2">Earn interest</h3>
                                <div>
                                    <p>We provide access to the projects we believe are the best in the ecosystem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row flex-nowrap space-x-lg" data-component="advantage-box">
                            <div class="w-[50px]">
                                <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="loop" delay="1000"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:47px;height:47px">
                                </lord-icon>
                            </div>
                            <div class="space-y-md">
                                <h3 class="mb-0 text-primary h2">Expertise</h3>
                                <div>
                                    <p>We followed the evolution of the projects, before they were even launched.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row flex-nowrap space-x-lg" data-component="advantage-box">
                            <div class="w-[50px]">
                                <lord-icon src="https://cdn.lordicon.com/jvucoldz.json" trigger="loop" delay="1000"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:47px;height:47px">
                                </lord-icon>
                            </div>
                            <div class="space-y-md">
                                <h3 class="mb-0 text-primary h2">Alignment</h3>
                                <div>
                                    <p>We provide access to the projects we believe are the best in the ecosystem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row flex-nowrap space-x-lg" data-component="advantage-box">
                            <div class="w-[50px]">
                                <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop" delay="1000"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:47px;height:47px">
                                </lord-icon>
                            </div>
                            <div class="space-y-md">
                                <h3 class="mb-0 text-primary h2">Reward</h3>
                                <div>
                                    <p>We offer high rewards, we only take our commission, no other costs involved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="bg-top bg-no-repeat bg-cover"
        style="background-image: url({{ asset('node/wp-content/uploads/2021/10/home-networks-bg.png') }})">
        
    </main>
    <div class="container space-y-lg mt-2xl">
        <div class="relative overflow-hidden text-center text-white bg-black rounded-2xl p-lg lg:py-[5.59375rem] bg-no-repeat bg-center bg-cover before:absolute before:inset-0 before:bg-black/70"
            style="background-image: url('{{ asset('node/wp-content/uploads/2022/05/home-banner-bg.webp') }}'">
            <div class="relative space-y-10">
                <div>
                    <p>Realtime metrics and statistics such as staked assets,<br />
                        user count or APRs on each network we validate on:</p>
                </div><a href="{{ route('register') }}" target="_blank"
                    class="inline-flex flex-col items-center space-y-1 sm:space-y-0 sm:space-x-5 sm:flex-row text-primary hover:text-primary"><span>Register
                        Here:</span>
                    <div>
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg width="150.52" height="24.72" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 150.52 24.72">
                            <path
                                d="M13.91,2.91c.35-.1.63.16.86.37L20.1,8.81a7.06,7.06,0,0,1,.69.76,1.28,1.28,0,0,1,0,.7c-.76,2.84-1.53,5.69-2.29,8.52a1.16,1.16,0,0,1-.25.43,1.68,1.68,0,0,1-.76.31L9.85,21.74a.92.92,0,0,1-1-.2L2.87,15.39a.79.79,0,0,1-.25-.8C3.4,11.7,4.16,8.82,4.94,5.93a.87.87,0,0,1,.32-.52,2.87,2.87,0,0,1,.62-.22ZM7.19,6.49c.53.52,1,1.07,1.56,1.6.88-1,1.82-1.84,2.7-2.82L7.19,6.49Zm3.05,2.32c1.54.41,3.08.84,4.63,1.23-.41-1.6-.8-3.2-1.21-4.8C12.52,6.43,11.37,7.6,10.24,8.81Zm5.31-2.42c.29,1.27.65,2.54,1,3.79.7-.22,1.43-.41,2.15-.61C17.6,8.5,16.61,7.42,15.55,6.39ZM6.1,7.66c-.41,1.46-.79,2.93-1.18,4.4.9-.94,1.82-1.86,2.7-2.82-.48-.56-1-1.07-1.52-1.58Zm3.71,2.68c.39,1.6.8,3.19,1.21,4.8,1.13-1.21,2.28-2.38,3.42-3.57C12.89,11.16,11.35,10.73,9.81,10.34Zm-4.93,4c1.55.41,3.09.84,4.63,1.23-.39-1.6-.78-3.2-1.19-4.8L4.88,14.34Zm12-2.64c.32,1.27.63,2.52.94,3.79L19,11.09c-.7.2-1.41.42-2.11.61Zm-4.8,4.57c1.54.41,3.08.84,4.65,1.24-.39-1.6-.8-3.2-1.19-4.81-1.18,1.19-2.31,2.38-3.47,3.58ZM6,16.27c.47.55,1,1,1.49,1.55s1,1.11,1.6,1.64l.58-2.23L6,16.28Zm5.18,1.39-.58,2.23c1.42-.41,2.87-.82,4.3-1.21-1.24-.37-2.49-.69-3.72-1Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M50.53,5.84h2v6.62c1-1.15,2-2.32,3.06-3.47h2.54c-1,1.11-2,2.24-3,3.36,1.08,1.66,2.17,3.28,3.25,4.94H56.21a9,9,0,0,1-.63-.86c-.66-1-1.3-2-2-2.95-.37.39-.7.8-1.07,1.19v2.62h-2C50.53,13.48,50.53,9.65,50.53,5.84Z"
                                fill="#c5e3a3"></path>
                            <path d="M59.53,5.84h2V7.78h-2Z" fill="#c5e3a3"></path>
                            <path
                                d="M137.16,5.84h2V17.31h-1.9v-.82a2.67,2.67,0,0,1-1.33.9,3.49,3.49,0,0,1-2.44-.18,3.36,3.36,0,0,1-1.5-1.48,5.6,5.6,0,0,1-.57-2.76,5,5,0,0,1,.59-2.42,3.51,3.51,0,0,1,2.79-1.82,2.56,2.56,0,0,1,2.31,1.06C137.18,8.48,137.14,7.15,137.16,5.84Zm-2.37,4.81A1.73,1.73,0,0,0,133.62,12a5.17,5.17,0,0,0,0,2.18,2,2,0,0,0,1.1,1.43,1.8,1.8,0,0,0,2.48-1.76V12.29a1.76,1.76,0,0,0-1-1.56,2.08,2.08,0,0,0-1.39-.08Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M29.46,6.13a5,5,0,0,1,3.6.77,3.37,3.37,0,0,1,1.31,2.17l-2,.52a2,2,0,0,0-1.39-1.46,2.37,2.37,0,0,0-1.86.23,1,1,0,0,0-.23,1.32.87.87,0,0,0,.27.27c1.31.66,2.8.91,4.07,1.66a2.6,2.6,0,0,1,1.34,1.66,3.4,3.4,0,0,1-.29,2.48,3.76,3.76,0,0,1-2.52,1.72,6.46,6.46,0,0,1-2.36,0,3.93,3.93,0,0,1-2.29-1.39,5,5,0,0,1-.88-2.38c.74-.18,1.49-.32,2.21-.49a4.38,4.38,0,0,0,.7,1.91,1.88,1.88,0,0,0,1.39.53,2.65,2.65,0,0,0,1.64-.41,1.19,1.19,0,0,0,.14-1.67,1.16,1.16,0,0,0-.26-.23c-1.35-.8-3-.9-4.3-1.82a2.58,2.58,0,0,1-1.13-1.91,2.91,2.91,0,0,1,.66-2.23A3.62,3.62,0,0,1,29.46,6.13Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M86.59,6.29h3.83a7.12,7.12,0,0,1,2,.2,3.29,3.29,0,0,1,2,1.6,3.83,3.83,0,0,1,.36,2.21A3,3,0,0,1,94,12.1a3.21,3.21,0,0,1-1.47.9c.76,1.42,1.56,2.85,2.33,4.28H92.55c-.74-1.35-1.47-2.74-2.23-4.08-.54,0-1.07,0-1.62,0v4.08H86.59ZM88.7,8.21v3.16h1.56a4.41,4.41,0,0,0,1.45-.12,1.21,1.21,0,0,0,.9-.91,1.91,1.91,0,0,0-.29-1.67A1.85,1.85,0,0,0,91,8.21Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M36.61,6.94h1.92V9h2.11v1.72H38.57v3.5a1.19,1.19,0,0,0,.37,1,3.42,3.42,0,0,0,1.42.13v2a5.67,5.67,0,0,1-2.79-.41,2.58,2.58,0,0,1-1-2.07c0-1.37,0-2.74,0-4.1H35.31V9h1.32C36.59,8.3,36.61,7.62,36.61,6.94Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M43.36,9.05a4.59,4.59,0,0,1,2.46-.26A3.25,3.25,0,0,1,48,10a3.62,3.62,0,0,1,.53,2.05v5.24h-1.7v-.8a2.87,2.87,0,0,1-.94.76,4.05,4.05,0,0,1-2.31.18,2.5,2.5,0,0,1-1.58-1,2.62,2.62,0,0,1-.33-2.29,2.17,2.17,0,0,1,1.27-1.25c1-.48,2.17-.54,3.2-1a.65.65,0,0,0,.31-.87h0s0,0,0-.08a1.3,1.3,0,0,0-1.07-.51,2.2,2.2,0,0,0-1.31.26,2.37,2.37,0,0,0-.69,1.09l-1.68-.7A3.25,3.25,0,0,1,43.36,9.05Zm3,4.28a17.16,17.16,0,0,1-2.29.78.89.89,0,0,0-.57,1.07.86.86,0,0,0,.82.57,3,3,0,0,0,1.63-.23,1.1,1.1,0,0,0,.6-.92V13.11a1.29,1.29,0,0,1-.19.21Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M65.72,9.79a3.09,3.09,0,0,1,4.2-.41,3,3,0,0,1,1,2.36v5.55h-2v-5a1.81,1.81,0,0,0-.45-1.37,1.78,1.78,0,0,0-1.29-.27,1.4,1.4,0,0,0-1.15.8,2.29,2.29,0,0,0-.16,1v4.84h-2V9h2C65.72,9.24,65.72,9.51,65.72,9.79Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M73,10.71a3.71,3.71,0,0,1,2.44-1.88,2.75,2.75,0,0,1,3,1V9h1.94v7.91A5,5,0,0,1,80,19.11a3.34,3.34,0,0,1-2,1.77,4.93,4.93,0,0,1-2.72,0A3.38,3.38,0,0,1,73.05,19L74.57,18a2.3,2.3,0,0,0,1.31,1.25,2,2,0,0,0,2.17-.57,4.47,4.47,0,0,0,.3-2.17,2.52,2.52,0,0,1-1.6,1,3.57,3.57,0,0,1-2.9-.84A4.16,4.16,0,0,1,72.52,14,5.63,5.63,0,0,1,73,10.71Zm3.07-.08a1.87,1.87,0,0,0-1.37,1.23A4.24,4.24,0,0,0,74.59,14a2.16,2.16,0,0,0,1.16,1.54,2,2,0,0,0,1.85-.12A1.67,1.67,0,0,0,78.36,14V12.25a1.65,1.65,0,0,0-.79-1.41,1.94,1.94,0,0,0-1.47-.21Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M98.47,8.93a3.81,3.81,0,0,1,3.58.62,4,4,0,0,1,1.23,1.9,7.82,7.82,0,0,1,.23,2.31c-1.85,0-3.73,0-5.59,0a2.24,2.24,0,0,0,.57,1.5,2,2,0,0,0,1.88.41,2.9,2.9,0,0,0,1.44-1.21c.49.41,1,.82,1.43,1.25a4.22,4.22,0,0,1-1.5,1.38,4.34,4.34,0,0,1-2.81.38,3.73,3.73,0,0,1-2.62-2.15,5.75,5.75,0,0,1-.33-3.2A3.82,3.82,0,0,1,98.47,8.93Zm.12,2a2.09,2.09,0,0,0-.69,1.33h3.62a1.73,1.73,0,0,0-1.08-1.56,1.92,1.92,0,0,0-1.85.23Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M118.83,9.16a4.29,4.29,0,0,1,2.44-.39,3.38,3.38,0,0,1,2.19,1,3.15,3.15,0,0,1,.7,2.19V17.3h-1.7v-.83a2.41,2.41,0,0,1-1.27.9,4.23,4.23,0,0,1-2.34,0,2.33,2.33,0,0,1-1.67-2,2.37,2.37,0,0,1,.3-1.54,2.77,2.77,0,0,1,1.37-1c.9-.35,1.87-.47,2.79-.82a.7.7,0,0,0,.49-.57.86.86,0,0,0-.74-.88,3.41,3.41,0,0,0-1.35,0A1.8,1.8,0,0,0,119,11.84l-1.7-.7A3.3,3.3,0,0,1,118.83,9.16ZM122,13.33c-.73.41-1.59.47-2.33.8a.85.85,0,0,0-.51,1c.06.37.47.55.8.59a2.79,2.79,0,0,0,1.68-.26,1,1,0,0,0,.57-.91v-1.5a1.13,1.13,0,0,1-.22.27Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M142.94,8.93a5.18,5.18,0,0,1,2.25-.1A3,3,0,0,1,147,9.88a3.88,3.88,0,0,1,.67,1.31c-.57.18-1.12.36-1.68.51a1.94,1.94,0,0,0-1-1.15,2.26,2.26,0,0,0-1.62,0c-.27.13-.57.43-.43.76s.35.35.57.45c.84.31,1.7.51,2.55.8a2.77,2.77,0,0,1,1.45.94,2.37,2.37,0,0,1,.37,1.77,2.47,2.47,0,0,1-1,1.55,3.48,3.48,0,0,1-1.82.64,5,5,0,0,1-2.54-.37,3.5,3.5,0,0,1-1.8-2.58l1.84-.47a1.89,1.89,0,0,0,.78,1.47,2.57,2.57,0,0,0,1.7.23,1.35,1.35,0,0,0,1-.54.62.62,0,0,0-.23-.85h0s0,0-.06,0c-1.08-.47-2.27-.61-3.3-1.14a2.46,2.46,0,0,1-1.18-1.05,2.23,2.23,0,0,1,.2-2.11A2.6,2.6,0,0,1,142.94,8.93Z"
                                fill="#c5e3a3"></path>
                            <path
                                d="M129.24,8.93a2.07,2.07,0,0,1,1.41,0c-.1.64-.2,1.29-.31,1.93a3.44,3.44,0,0,0-1,0,1.21,1.21,0,0,0-.92.69,2.68,2.68,0,0,0-.21,1.19v4.55h-2V9h1.91v.9A2.49,2.49,0,0,1,129.24,8.93Z"
                                fill="#c5e3a3"></path>
                            <path d="M59.53,9h2v8.32h-2Z" fill="#c5e3a3"></path>
                            <path
                                d="M104.53,9h2c.37,1.85.72,3.73,1.11,5.59.59-1.63,1.1-3.29,1.67-4.93a4.28,4.28,0,0,1,.25-.68c.51,0,1,0,1.52,0,.1,0,.28,0,.3.1.58,1.81,1.11,3.65,1.7,5.47.43-1.86.84-3.71,1.27-5.57h2c-.62,2.66-1.27,5.3-1.9,8a1.15,1.15,0,0,1-.12.37h-2c-.62-2-1.25-4-1.91-6-.73,2-1.39,4-2.07,6h-2C105.76,14.52,105.15,11.74,104.53,9Z"
                                fill="#c5e3a3"></path>
                            <rect width="150.52" height="24.72" fill="none"></rect>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="relative overflow-hidden text-center bg-black rounded-2xl p-lg lg:py-[5.59375rem] bg-no-repeat bg-center bg-cover before:absolute before:inset-0 before:bg-black/0"
            style="background-image: url('{{ asset('node/wp-content/uploads/2022/09/home-banner-two-background.webp') }}');">
            <div class="relative space-y-lg">
                <div>
                    <h2 class="mb-0 h4">Are you looking to delegate more than $100k assets?</h2>
                    <div>
                        <p>Kindly Register an Account with us today.</p>
                    </div>
                </div><a href="/register" class="btn black rounded-2xl">Register Now</a>
            </div>
        </div>
    </div>

    
    <footer class="site-footer relative z-[2]">
        <div class="container">
            <div class="md:mx-auto md:w-span-8">
                <form class="newsletter-form" x-data="newsletterForm" @submit.prevent="submitData"
                    data-form="newsletter">
                    <h1 class="text-center mb-[7px]">Newsletter</h1>
                    <div class="text-center">Stay up to date with our latest developments/projects and analysis.</div>
                    <template x-if="successMsg">
                        <div class="my-5 text-sm font-bold text-center text-green-300" x-text="successMsg"></div>
                    </template>
                    <div class="inputs"><input type="email" name="email" placeholder="e-mail" id="email"
                            x-model="formData.email" x-ref="email" class="form-input"><button type="submit"
                            class="btn">Subscribe</button></div><template x-if="formErrors.email">
                        <div class="form-error mt-[10px]" x-text="formErrors.email"></div>
                    </template>
                </form>
            </div>
            <div
                class="flex flex-col flex-wrap items-center justify-between space-y-lg lg:flex-row lg:space-y-0 mt-lg lg:mt-2xl">
                <ul class="list-unstyled menu horizontal mb-0 font-bold" data-component="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"
                        data-component="menu-item"><a target="" href="/">Register</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"
                        data-component="menu-item"><a target="" href="/login">Login</a></li>
                </ul>
                <div class="" data-component="socials-nav">
                    <ul class="list-unstyled flex flex-wrap items-center -m-xs md:mx-[-0.84375rem]">
                        <li class="p-xs md:px-[0.84375rem]"><a href="https://twitter.com/coinstaking_app" target="_blank"
                                class=""><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12.38 10.05"
                                    class="fill-current w-[0.77375rem] h-[0.62875rem]" data-icon="twitter">
                                    <path
                                        d="M12.38,1.18a5.18,5.18,0,0,1-1.46.4A2.58,2.58,0,0,0,12,.18a5.21,5.21,0,0,1-1.62.61A2.54,2.54,0,0,0,6.1,3.11,7.25,7.25,0,0,1,.86.45a2.56,2.56,0,0,0,.79,3.4A2.59,2.59,0,0,1,.5,3.52v0a2.55,2.55,0,0,0,2,2.5,2.57,2.57,0,0,1-.67.09,2.61,2.61,0,0,1-.48,0A2.54,2.54,0,0,0,3.76,7.85,5.14,5.14,0,0,1,.61,8.94,6,6,0,0,1,0,8.9a7.16,7.16,0,0,0,3.89,1.15,7.19,7.19,0,0,0,7.23-7.13V2.49A5.1,5.1,0,0,0,12.38,1.18Z" />
                                </svg></a></li>
                       </ul>
                </div><a href="mailto:hello@coinstaking.aoo">hello@coinstaking.app</a>
            </div>
            
            <div class="text-center mt-lg lg:mt-[55px]">Copyright 2023 - CoinStaking.App</div>
        </div>
    </footer>

    <div x-data x-show="$store.share.open" x-cloak
        class="fixed top-0 bottom-0 left-0 right-0 w-full h-full bg-black bg-opacity-75 backdrop-blur-sm z-[1500] flex flex-col justify-center items-center py-xl"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100 " x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" data-component="share-panel"
        @keyup.escape.window="$store.share.open = false;">
        <div class="container relative w-full">
            <div class="absolute px-2 py-1 mb-2 text-xs transform rounded-sm left-span-6 bg-primary text-primary-700 whitespace-nowrap bottom-full -translate-x-span-6"
                x-show="$store.share.copySuccess" x-transition:enter="ease-out duration-150"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">Copied to clipboard!</div>
            <div class="bg-white rounded-3xl" @click.outside="$store.share.open = false;">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-lg p-lg md:p-xl"><a
                        class="flex flex-row items-center flex-nowrap space-x-lg" :href="/"
                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 320 512"
                            class="fill-current w-[30px] h-[30px]" data-icon="facebook">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                            </path>
                        </svg><span>Share on Facebook</span></a><a
                        class="flex flex-row items-center flex-nowrap space-x-lg" :href="/"
                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12.38 10.05"
                            class="fill-current w-[30px] h-[30px]" data-icon="twitter">
                            <path
                                d="M12.38,1.18a5.18,5.18,0,0,1-1.46.4A2.58,2.58,0,0,0,12,.18a5.21,5.21,0,0,1-1.62.61A2.54,2.54,0,0,0,6.1,3.11,7.25,7.25,0,0,1,.86.45a2.56,2.56,0,0,0,.79,3.4A2.59,2.59,0,0,1,.5,3.52v0a2.55,2.55,0,0,0,2,2.5,2.57,2.57,0,0,1-.67.09,2.61,2.61,0,0,1-.48,0A2.54,2.54,0,0,0,3.76,7.85,5.14,5.14,0,0,1,.61,8.94,6,6,0,0,1,0,8.9a7.16,7.16,0,0,0,3.89,1.15,7.19,7.19,0,0,0,7.23-7.13V2.49A5.1,5.1,0,0,0,12.38,1.18Z" />
                        </svg><span>Share on Twitter</span></a><a
                        class="flex flex-row items-center flex-nowrap space-x-lg" :href="/"
                        target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512"
                            class="fill-current w-[30px] h-[30px]" data-icon="linkedin">
                            <path
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                            </path>
                        </svg><span>Share on Linkedin</span></a><a
                        class="flex flex-row items-center flex-nowrap space-x-lg" href="javascript:;" target="_blank"
                        @click.prevent="$store.share.copy($store.share.link)"><svg xmlns="http://www.w3.org/2000/svg"
                            viewbox="0 0 448 512" class="fill-current w-[30px] h-[30px]" data-icon="copy">
                            <path
                                d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z">
                            </path>
                        </svg><span>Copy link</span></a></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js" defer></script>
    <script src="{{ asset('node/wp-content/themes/01node/public/js/app.js') }} " defer></script>
    <script src="{{ asset('node/wp-content/plugins/prismatic/lib/highlight/js/highlight-core.js') }}"
        id='prismatic-highlight-js'></script>
    <script id='prismatic-highlight-js-after'>
        hljs.initHighlightingOnLoad();
    </script>

    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;">Someone from <b></b> just traded with
            <a href="javascript:void(0);" onclick="javascript:void(0);"></a>
        </div>
    </div>

    {{-- @if (config('app.show_popup')) --}}
    <style>
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            /* right: 50px; */
            left: 50px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #c40f0f;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #c40f0f;
        }
    </style>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var listNames = ['Thomas', 'Alexander', 'Paul', 'John', 'Elizabeth', 'Theresa', 'Benjamin', 'Lisa', 'Angela', 'Zoe',
            'Hulk', 'Mariam', 'Christopher', 'Fredrick', 'Philip', 'Maddison', 'McDonald'
        ];
        var listCountries = ['South Africa', 'USA', 'Uganda', 'Kenya', 'Germany', 'France', 'Italy', 'South Africa',
            'Australia', 'South Africa', 'Canada', 'South Africa',
            'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy',
            'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal',
            'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland',
            'Belgium', 'Israel', 'Cyprus'
        ];
        var listPlans = ['$100 worth of BTC', '2BTC', '$9000', '200USDT', '$15,000', '300SOL', '$10,000 worth of USDT',
            '$2,000 worth of ETH', '3,000USDT', '$45,000', '$60,000', '$79,000', '$25,000'
        ];
        interval = Math.floor(Math.random() * (10000 - 4000 + 1) + 4000);

        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (10000 - 4000 + 1) + 4000);
            var name = listNames[Math.floor(Math.random() * listNames.length)];
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = name + ' from <b>' + country +
                '</b> just invested with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';

            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function() {
                $(".mgm").stop(true).fadeOut(300);
            }, 3000);
            run = setInterval(request, interval);
        }
    </script>
    {{-- @endif --}}
	

  </body>

</html>
