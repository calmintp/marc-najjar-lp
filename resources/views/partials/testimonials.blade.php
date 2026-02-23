<section id="testimonials" class="bg-card py-24 lg:py-32" x-data="testimonialCarousel()">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl">
            What People <span class="text-primary">Are Saying</span>
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground">
            Thousands have transformed their lives with Marc's guidance. Here's what some of them have to say.
        </p>

        @php
            $testimonials = [
                ['quote' => "Marc's coaching transformed my entire outlook on life and business. I went from barely surviving to building a seven-figure company in under two years.", 'name' => 'David Richardson', 'title' => 'CEO, Richardson Enterprises', 'avatar' => 'avatar-1.jpg'],
                ['quote' => 'Reading Fortunes in the Fire was a turning point. The exercises in each chapter helped me uncover strengths I never knew I had. I\'m forever grateful.', 'name' => 'Sarah Mitchell', 'title' => 'Entrepreneur & Coach', 'avatar' => 'avatar-2.jpg'],
                ['quote' => "Marc doesn't just teach you strategies — he transforms the way you think. His mindset framework helped me overcome years of self-doubt and take bold action.", 'name' => 'James Kowalski', 'title' => 'Financial Advisor', 'avatar' => 'avatar-3.jpg'],
                ['quote' => 'After working with Marc, I finally found my purpose. His guidance was the catalyst I needed to leave my comfort zone and pursue my dreams fearlessly.', 'name' => 'Maria Lopez', 'title' => 'Author & Speaker', 'avatar' => 'avatar-4.jpg'],
                ['quote' => "The 24-hour framework Marc teaches is revolutionary. I've tripled my productivity and finally feel in control of my time and my life.", 'name' => 'Alex Turner', 'title' => 'Tech Founder', 'avatar' => 'avatar-5.jpg'],
            ];
        @endphp

        <div class="relative mx-auto max-w-5xl">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + (current * slideWidth) + '%)'">
                    @foreach($testimonials as $testimonial)
                        <div class="w-full flex-shrink-0 px-2 md:w-1/2 lg:w-1/3">
                            <div class="flex h-full flex-col gap-5 rounded-2xl border border-border/50 bg-background p-6">
                                <svg class="size-8 shrink-0 text-primary/40" fill="currentColor" viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                                <p class="flex-1 text-sm leading-relaxed text-muted-foreground">"{{ $testimonial['quote'] }}"</p>
                                <div class="flex items-center gap-3 border-t border-border/50 pt-4">
                                    <img src="{{ asset('images/' . $testimonial['avatar']) }}" alt="{{ $testimonial['name'] }}" class="size-10 rounded-full object-cover">
                                    <div>
                                        <p class="text-sm font-bold text-foreground">{{ $testimonial['name'] }}</p>
                                        <p class="text-xs text-primary">{{ $testimonial['title'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <button @click="prev()" class="absolute top-1/2 -left-4 hidden -translate-y-1/2 rounded-full border border-primary/30 bg-card p-2 text-primary transition-colors hover:bg-primary hover:text-primary-foreground md:flex">
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button @click="next()" class="absolute top-1/2 -right-4 hidden -translate-y-1/2 rounded-full border border-primary/30 bg-card p-2 text-primary transition-colors hover:bg-primary hover:text-primary-foreground md:flex">
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            <p class="mt-6 text-center text-xs text-muted-foreground md:hidden">Swipe to see more testimonials</p>
        </div>
    </div>
</section>

<script>
function testimonialCarousel() {
    return {
        current: 0,
        total: 5,
        get slideWidth() {
            if (window.innerWidth >= 1024) return 33.333;
            if (window.innerWidth >= 768) return 50;
            return 100;
        },
        get maxSlide() {
            if (window.innerWidth >= 1024) return this.total - 3;
            if (window.innerWidth >= 768) return this.total - 2;
            return this.total - 1;
        },
        next() { this.current = Math.min(this.current + 1, this.maxSlide) },
        prev() { this.current = Math.max(this.current - 1, 0) },
    }
}
</script>
