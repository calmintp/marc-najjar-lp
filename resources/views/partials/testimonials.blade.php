<section id="testimonials" class="bg-card py-24 lg:py-32">
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

            <div class="relative overflow-hidden">

                {{-- Edge Fade Left --}}
                <div class="pointer-events-none absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-card to-transparent z-10"></div>

                {{-- Edge Fade Right --}}
                <div class="pointer-events-none absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-card to-transparent z-10"></div>

                <div class="flex gap-6 animate-marquee hover:[animation-play-state:paused]">
                    @foreach(array_merge($testimonials, $testimonials) as $testimonial)
                        <div class="w-[300px] flex-shrink-0">
                            <div class="flex h-full flex-col gap-5 rounded-2xl border border-border/50 bg-background p-6 shadow-lg">
                                <svg class="size-8 shrink-0 text-primary/40" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/>
                                    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                                </svg>

                                <p class="flex-1 text-sm leading-relaxed text-muted-foreground">
                                    "{{ $testimonial['quote'] }}"
                                </p>

                                <div class="flex items-center gap-3 border-t border-border/50 pt-4">
                                    <img src="{{ asset('images/' . $testimonial['avatar']) }}" class="size-10 rounded-full object-cover">
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

        </div>
    </div>
</section>