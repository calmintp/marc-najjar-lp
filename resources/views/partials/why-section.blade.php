<section id="about" class="bg-card py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl">
            Why You Need Marc Najjar's<br>
            <span class="text-primary">Mindset Guidance</span>
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground">
            Break free from the patterns holding you back and step into a life of purpose and abundance.
        </p>

        <div class="grid gap-8 md:grid-cols-2 md:gap-12">
            {{-- Struggles --}}
            <div class="rounded-2xl border border-border/50 bg-background p-6 sm:p-8">
                <h3 class="mb-6 flex items-center gap-3 text-lg font-bold text-foreground">
                    <svg class="size-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    You are Struggling With...
                </h3>
                <ul class="flex flex-col gap-4">
                    @foreach(['Life stuck in past pain and sadness', 'Repetitions and obstacles blocking your path', 'Hard work with no clear purpose', 'Real abundance feels out of reach', 'Survival mode causing burnout and lost passions'] as $item)
                        <li class="flex items-start gap-3">
                            <span class="mt-1 block size-2 shrink-0 rounded-full bg-red-400/60"></span>
                            <span class="leading-relaxed text-muted-foreground">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Solutions --}}
            <div class="rounded-2xl border border-primary/30 bg-background p-6 sm:p-8">
                <h3 class="mb-6 flex items-center gap-3 text-lg font-bold text-foreground">
                    <svg class="size-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>
                    <span>You Need<span class="text-primary">...</span></span>
                </h3>
                <ul class="flex flex-col gap-4">
                    @foreach(["Turn life's fires into your greatest fortunes", 'See rejection as divine protection', 'Build unbreakable resilience and find your calling', 'Create wealth through authentic connections', 'Turn daily stress into fuel for growth'] as $item)
                        <li class="flex items-start gap-3">
                            <span class="mt-1 block size-2 shrink-0 rounded-full bg-primary"></span>
                            <span class="leading-relaxed text-muted-foreground">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
