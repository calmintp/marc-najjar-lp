<header class="fixed top-0 left-0 right-0 z-50 border-b border-border/20 bg-background/90 backdrop-blur-md" x-data="{ mobileOpen: false }">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-3 lg:px-8">
        {{-- Logo --}}
        <a href="#" class="flex items-center gap-3">
            <img src="{{ asset('images/logo-marc.png') }}" alt="Marc Najjar MN monogram logo" class="h-10 w-auto">
            MARC NAJJAR
        </a>

        {{-- Desktop nav --}}
        <ul class="hidden items-center gap-8 md:flex">
            <li><a href="#books" class="text-xs font-semibold uppercase tracking-[0.15em] text-foreground/70 transition-colors hover:text-primary">Books</a></li>
            <li><a href="#videos" class="text-xs font-semibold uppercase tracking-[0.15em] text-foreground/70 transition-colors hover:text-primary">Videos</a></li>
            <li><a href="#about-marc" class="text-xs font-semibold uppercase tracking-[0.15em] text-foreground/70 transition-colors hover:text-primary">About Marc</a></li>
            <li><a href="#testimonials" class="text-xs font-semibold uppercase tracking-[0.15em] text-foreground/70 transition-colors hover:text-primary">Testimonials</a></li>
        </ul>

        <div class="hidden md:block">
            <a href="#subscribe" class="inline-flex items-center justify-center bg-primary px-6 py-2.5 text-xs font-bold uppercase tracking-[0.15em] text-primary-foreground transition-colors hover:bg-gold-light">Subscribe</a>
        </div>

        {{-- Mobile toggle --}}
        <button @click="mobileOpen = !mobileOpen" class="text-foreground md:hidden" aria-label="Toggle navigation menu">
            <svg x-show="!mobileOpen" class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            <svg x-show="mobileOpen" x-cloak class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div x-show="mobileOpen" x-cloak x-transition class="border-t border-border/20 bg-background px-6 pb-6 md:hidden">
        <ul class="flex flex-col gap-4 pt-4">
            <li><a href="#books" @click="mobileOpen = false" class="text-sm font-semibold uppercase tracking-wider text-foreground/70 transition-colors hover:text-primary">Books</a></li>
            <li><a href="#videos" @click="mobileOpen = false" class="text-sm font-semibold uppercase tracking-wider text-foreground/70 transition-colors hover:text-primary">Videos</a></li>
            <li><a href="#about-marc" @click="mobileOpen = false" class="text-sm font-semibold uppercase tracking-wider text-foreground/70 transition-colors hover:text-primary">About Marc</a></li>
            <li><a href="#testimonials" @click="mobileOpen = false" class="text-sm font-semibold uppercase tracking-wider text-foreground/70 transition-colors hover:text-primary">Testimonials</a></li>
            <li><a href="#subscribe" @click="mobileOpen = false" class="inline-flex w-full items-center justify-center bg-primary py-2.5 text-xs font-bold uppercase tracking-[0.15em] text-primary-foreground hover:bg-gold-light">Subscribe</a></li>
        </ul>
    </div>
</header>
