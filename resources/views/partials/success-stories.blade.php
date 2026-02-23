<section id="videos" class="py-24 lg:py-32" x-data="{ lightboxOpen: false }">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl text-balance">
            Powerful Ideas <span class="text-primary">in Action</span>
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground leading-relaxed">
            Watch Marc deliver the principles that transform lives.
        </p>

        <div class="flex flex-col items-center gap-10 lg:flex-row lg:items-start lg:gap-16">
            {{-- Video Thumbnail --}}
            <div class="w-full lg:w-3/5">
                <button @click="lightboxOpen = true" class="group relative block w-full overflow-hidden rounded-2xl border border-border/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary" aria-label="Play featured video">
                    <img src="{{ asset('images/story-1.jpg') }}" alt="Marc Najjar speaking on mindset transformation" class="aspect-video w-full object-cover brightness-75 transition-all duration-500 group-hover:brightness-50 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="flex size-16 items-center justify-center rounded-full border-2 border-primary bg-primary/20 text-primary backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-primary/40 sm:size-20">
                            <svg class="size-6 fill-primary sm:size-8" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        </div>
                    </div>
                </button>
            </div>

            {{-- Description --}}
            <div class="flex w-full flex-col justify-center lg:w-2/5 lg:py-4">
                <span class="mb-3 text-xs font-bold uppercase tracking-[0.2em] text-primary">Featured Video</span>
                <h3 class="mb-4 font-serif text-2xl font-bold text-foreground lg:text-3xl text-balance">
                    Change Your Mindset, Change Your Life
                </h3>
                <p class="mb-3 leading-relaxed text-muted-foreground">
                    In this powerful talk, Marc Najjar shares the mindset strategies that took him from the war-torn streets of Lebanon to building a multimillion-dollar empire in Beverly Hills.
                </p>
                <p class="leading-relaxed text-muted-foreground">
                    Discover how to break through mental barriers, develop unshakeable resilience, and create the life you were meant to live.
                </p>
            </div>
        </div>

        {{-- Watch More Button --}}
        <div class="mt-16 flex justify-center">
            <a href="{{ route('videos') }}" class="inline-flex items-center gap-2 rounded-sm border border-primary/40 px-8 py-3 text-sm font-semibold uppercase tracking-wider text-primary transition-all hover:bg-primary hover:text-primary-foreground">
                Watch More Insights
            </a>
        </div>
    </div>

    {{-- Video Lightbox --}}
    <template x-teleport="body">
        <div x-show="lightboxOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm" @click="lightboxOpen = false" @keydown.escape.window="lightboxOpen = false" style="display: none;">
            <button @click="lightboxOpen = false" class="absolute right-4 top-4 z-50 flex size-10 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-white/20" aria-label="Close video">
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="w-full max-w-4xl px-4" @click.stop>
                <div class="relative aspect-video w-full overflow-hidden rounded-xl">
                    <template x-if="lightboxOpen">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" title="Marc Najjar - Change Your Mindset" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="absolute inset-0 h-full w-full"></iframe>
                    </template>
                </div>
            </div>
        </div>
    </template>
</section>
