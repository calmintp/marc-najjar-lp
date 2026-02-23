<section class="py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl">
            What You'll Get From His <span class="text-primary">Experience</span>
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground">
            Decades of real-world wisdom distilled into actionable tools for your transformation.
        </p>

        @php
            $features = [
                ['icon' => '<circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>', 'title' => 'Success Blueprint', 'desc' => 'Detailed, tested lessons on how to make YOUR life easy, building stress into actionable, manageable steps.'],
                ['icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>', 'title' => 'Time Mastery', 'desc' => 'Techniques to maximize productivity and efficiency, allowing you to achieve more in just 24 hours a week.'],
                ['icon' => '<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>', 'title' => 'Growth Strategies', 'desc' => 'Clear, specific strategies tailored to rapidly grow your business, focusing on practical steps you can implement immediately.'],
                ['icon' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M12 4v16M2 10h20"/>', 'title' => 'Financial Planning', 'desc' => 'Learn how to set and achieve financial goals, ensuring steady and scalable income growth.'],
                ['icon' => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>', 'title' => 'Stress Reduction', 'desc' => 'Methods to maintain a healthy work-life balance, manage stress, and avoid burnout while still being productive.'],
                ['icon' => '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>', 'title' => 'Consistent Results', 'desc' => 'Proven techniques to produce reliable and repeatable outcomes, eliminating uncertainty and boosting confidence.'],
            ];
        @endphp

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($features as $feature)
                <div class="group rounded-2xl border border-border/50 bg-card p-6 transition-all duration-300 hover:border-primary/40 hover:shadow-lg hover:shadow-primary/5">
                    <div class="mb-4 flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary transition-colors group-hover:bg-primary/20">
                        <svg class="size-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">{!! $feature['icon'] !!}</svg>
                    </div>
                    <h3 class="mb-2 text-lg font-bold text-foreground">{{ $feature['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-muted-foreground">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
