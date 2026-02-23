<section x-data="{ videoOpen: false }" class="relative flex min-h-screen items-center overflow-hidden pt-20">
    {{-- Background image - B&W, low opacity --}}
    <div class="absolute inset-0">
    <img 
        src="{{ asset('images/hero-background.webp') }}" 
        class="absolute inset-0 h-full w-full object-cover grayscale">
    <div class="absolute inset-0 bg-black/90"></div>
    </div>
    {{-- Subtle gold radial glow --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_50%_50%,_rgba(201,168,76,0.05)_0%,_transparent_70%)]"></div>

    <div class="relative z-10 mx-auto flex w-full max-w-7xl flex-col items-center gap-10 px-6 lg:flex-row lg:gap-16 lg:px-8">
        {{-- Left content --}}
        <div class="flex flex-1 flex-col items-center text-center lg:items-start lg:text-left">
            <h1 class="font-serif text-6xl font-bold uppercase leading-[0.95] tracking-wide text-primary sm:text-7xl md:text-8xl lg:text-9xl">
                MARC<br>NAJJAR
            </h1>

            <div class="my-6 h-px w-64 bg-gradient-to-r from-primary/80 via-primary/40 to-transparent lg:w-80"></div>

            <p class="text-sm font-medium uppercase tracking-[0.25em] text-foreground/60 sm:text-base">
                Motivational Speaker | Author | Mindset Strategist
            </p>

            <h2 class="mt-10 font-serif text-3xl font-bold leading-tight text-foreground sm:text-4xl lg:text-5xl">
                Unlock the Power<br>Within You.
            </h2>

            <p class="mt-5 max-w-lg text-lg italic leading-relaxed text-primary/70">
                Transform your mindset. Elevate your standards.<br class="hidden sm:block">
                Create lasting success.
            </p>

            <div class="my-6 h-px w-full max-w-lg bg-gradient-to-r from-primary/30 via-primary/15 to-transparent"></div>

            <p class="max-w-lg leading-relaxed text-foreground/50">
                Marc Najjar empowers individuals and organizations to break mental barriers, build resilience, and perform at their highest level.
            </p>

            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="#subscribe" class="inline-flex items-center justify-center bg-primary px-10 py-4 text-base font-bold uppercase tracking-wider text-primary-foreground transition-colors hover:bg-gold-light">
                    Book Marc to Speak
                </a>
                <button @click="videoOpen = true" class="inline-flex items-center justify-center border-2 border-foreground/30 bg-transparent px-10 py-4 text-base font-bold uppercase tracking-wider text-foreground transition-colors hover:border-primary hover:bg-primary/10 hover:text-primary">
                    Watch the Message
                </button>
            </div>
        </div>

        {{-- Right - Circle portrait --}}
        <div class="relative flex flex-1 items-center justify-center lg:justify-end">
            {{-- Subtle glow --}}
            <div class="absolute h-56 w-56 rounded-full bg-primary/[0.08] blur-3xl sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96"></div>

            {{-- Gold gradient ring --}}
            <div class="relative h-48 w-48 rounded-full p-[3px] sm:h-64 sm:w-64 md:h-72 md:w-72 lg:h-96 lg:w-96"
                style="background: linear-gradient(135deg, rgba(201,168,76,0.6) 0%, rgba(201,168,76,0.15) 40%, rgba(201,168,76,0.05) 60%, rgba(201,168,76,0.4) 100%);">
                <div class="h-full w-full overflow-hidden rounded-full bg-charcoal">
                    <img src="{{ asset('images/hero-marc2.png') }}" alt="Marc Najjar" class="h-full w-full object-cover object-top grayscale">
                </div>
            </div>
        </div>
    </div>

    {{-- Video Lightbox --}}
    <div x-show="videoOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="videoOpen = false"
         @keydown.escape.window="videoOpen = false"
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4 backdrop-blur-sm"
         style="display: none;">

        {{-- Close button --}}
        <button @click="videoOpen = false"
                class="absolute right-4 top-4 z-[60] flex h-12 w-12 items-center justify-center rounded-full border border-foreground/20 bg-charcoal/80 text-foreground transition-colors hover:border-primary hover:text-primary"
                aria-label="Close video">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>

        {{-- Video container --}}
        <div @click.stop class="relative w-full max-w-4xl overflow-hidden rounded-lg shadow-2xl" style="aspect-ratio: 16/9;">
            <template x-if="videoOpen">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1"
                        title="Marc Najjar - The Message"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="h-full w-full">
                </iframe>
            </template>
        </div>
    </div>
</section>
