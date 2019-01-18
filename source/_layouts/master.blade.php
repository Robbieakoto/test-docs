<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
            <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
                    <div class="container flex items-center max-w-4xl mx-auto px-4 lg:px-8">
                        <div class="flex items-center">
                            <a href="/" title="Docs Starter Template home" class="inline-flex items-center">
                                <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="Docs Starter Template logo" />
        
                                <h1 class="text-lg md:text-2xl text-blue-darkest font-semibold hover:text-blue-dark my-0 pr-4">Epay guide</h1>
                            </a>
                        </div>
        
                         <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                         <div id="vue-search" class="flex flex-1 justify-end items-center">
                            <search></search>
        
                            <nav class="hidden lg:flex items-center justify-end text-lg">
                                <a title="Epay home" href="/index"
                                    class="ml-6 text-grey-darker hover:text-blue-dark active text-blue-dark">
                                    Home
                                </a>
        
                                <a title="For Developers" href="docs/developers"
                                    class="ml-6 text-grey-darker hover:text-blue-dark ">
                                    Developers
                                </a>
        
                                <a title="Epay Website" href="https://epaygh.com/"
                                    class="ml-6 text-grey-darker hover:text-blue-dark ">
                                    Visit Epay
                                </a>
        
                                <a title="Contribute on GitHub" href="https://github.com/AppGharage/Epay-support"
                                    class="ml-6 text-grey-darker hover:text-blue-dark ">
                                    Contribute
                                </a>
                            </nav>
                                            
                        </div>
                    </div>
                    </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; <a href="https://epaygh.com" title="Tighten website">Epay</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>
    </body>
</html>
