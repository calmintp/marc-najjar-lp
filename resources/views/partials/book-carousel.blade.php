<section id="books" class="py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-primary sm:text-4xl lg:text-5xl">
            Transform Your Life Through These Pages
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground">
            Each book is a stepping stone on your journey to a more empowered, purposeful life.
        </p>

        {{-- Two books side by side --}}
        <div class="mx-auto grid max-w-6xl grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">
            {{-- Book 1 --}}
            <div class="flex flex-col items-center gap-6 rounded-2xl border border-border/50 bg-card p-6 transition-all duration-300 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 sm:p-8">
                <div class="flex shrink-0 justify-center">
                    <img src="{{ asset('images/book1-fortunes-in-the-fire.png') }}" alt="Fortunes in the Fire book cover" class="h-auto w-44 rounded-lg shadow-2xl shadow-primary/10 transition-transform duration-300 hover:scale-105 sm:w-52">
                </div>
                <div class="flex flex-col gap-3 text-center flex-1">
                    <h3 class="font-serif text-xl font-bold text-foreground sm:text-2xl">Fortunes in the Fire</h3>
                    <p class="text-xs font-semibold uppercase tracking-wider text-primary">From War-Torn Country to the Hills of Beverly</p>
                    <p class="text-sm leading-relaxed text-muted-foreground flex-1">Through twelve masterfully crafted chapters, Marc Najjar shares his powerful story of transformation, from the ravaged streets of Lebanon to the promise of Beverly Hills, with a perspective that will both captivate and embolden you. Yet, this book is about more than one man's journey. Each chapter is intentionally crafted with reflections, exercises, and mindset-shifting practices that invite you to experience your own breakthroughs.</p>
                    <div class="mt-3">
                        <a href="#" class="inline-flex items-center justify-center rounded-full bg-primary px-8 py-3 text-sm font-bold text-primary-foreground transition-colors hover:bg-gold-light">Buy Now</a>
                    </div>
                </div>
            </div>

            {{-- Book 2 --}}
            <div class="flex flex-col items-center gap-6 rounded-2xl border border-border/50 bg-card p-6 transition-all duration-300 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5 sm:p-8">
                <div class="flex shrink-0 justify-center">
                    <img src="{{ asset('images/book2-from-poor-immigrant-to-rich-american.png') }}" alt="From Poor Immigrant to Rich American book cover" class="h-auto w-44 rounded-lg shadow-2xl shadow-primary/10 transition-transform duration-300 hover:scale-105 sm:w-52">
                </div>
                <div class="flex flex-col gap-3 text-center flex-1">
                    <h3 class="font-serif text-xl font-bold text-foreground sm:text-2xl">From Poor Immigrant to Rich American</h3>
                    <p class="text-xs font-semibold uppercase tracking-wider text-primary">The Immigrant Mindset</p>
                    <p class="text-sm leading-relaxed text-muted-foreground flex-1">This book is about the real-life journey of a Lebanese immigrant who just escaped the rubble and severe bombings to rewrite his fate. Marc Najjar was a teenager when he first stepped onto the western lands of freedom, the States. He was driven by that opportunity to be in the USA to positively transform his life and the lives of others, beginning with his family.</p>
                    <div class="mt-3">
                        <a href="#" class="inline-flex items-center justify-center rounded-full bg-primary px-8 py-3 text-sm font-bold text-primary-foreground transition-colors hover:bg-gold-light">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- View Complete Collection --}}
        <div class="mt-14 flex justify-center">
            <a href="{{ route('books') }}" class="inline-flex items-center justify-center rounded-full border border-primary/40 px-10 py-4 text-sm font-bold uppercase tracking-wider text-primary transition-all hover:border-primary hover:bg-primary hover:text-primary-foreground">
                View Complete Collection
            </a>
        </div>
    </div>
</section>
