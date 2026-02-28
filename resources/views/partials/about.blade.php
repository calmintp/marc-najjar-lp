<section id="about-marc" class="bg-card py-24 lg:py-32">
    <div class="mx-auto max-w-6xl px-6 lg:px-8">
        <h2 class="mb-4 text-center font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl">
            About <span class="text-primary">Marc Najjar</span>
        </h2>
        <p class="mx-auto mb-16 max-w-2xl text-center text-muted-foreground">
            A story of resilience, reinvention, and relentless pursuit of excellence.
        </p>

        <div class="flex flex-col items-center gap-10 lg:flex-row lg:gap-16">
            {{-- Photo --}}
            <div class="w-full shrink-0 lg:w-2/5">
                <div class="relative overflow-hidden rounded-2xl border border-border/50">
                    <img src="{{ asset('images/marc-portrait.png') }}" alt="Marc Najjar, business strategist and life coach" class="aspect-[3/4] w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-background/60 via-transparent to-transparent"></div>
                </div>
            </div>

            {{-- Bio --}}
            <div class="flex flex-col gap-6">
                <p class="leading-relaxed text-muted-foreground">
                    Marc Najjar is a renowned <strong class="text-foreground">business strategist</strong>, life coach,
                    entrepreneur, and critically acclaimed bestselling author with decades of real-world experience
                    forged in adversity.
                </p>
                <p class="leading-relaxed text-muted-foreground">
                    As a <strong class="text-foreground">Lebanese immigrant</strong> who escaped the war-torn streets of
                    his homeland, he arrived in the United States with nothing but determination, quickly building
                    a successful career &mdash; including becoming a licensed clinical technician, playing professional
                    soccer at age 17, and founding thriving businesses like
                    <strong class="text-foreground">Ambassador Parking &amp; Transportation Services</strong> &mdash; ultimately
                    achieving financial independence and a life in the hills of Beverly.
                </p>
                <p class="leading-relaxed text-muted-foreground">
                    Marc teaches that <strong class="text-foreground">true fortune is forged in life's toughest fires</strong>.
                    Through his critically acclaimed books and powerful coaching programs, he shares proven strategies
                    to shift mindset, build unbreakable resilience, discover purpose, and turn adversity into advantage.
                </p>

                {{-- Stats --}}
                <div class="mt-4 flex flex-wrap gap-8">
                    <div>
                        <p class="font-serif text-3xl font-bold text-primary">10,000+</p>
                        <p class="text-sm text-muted-foreground">Lives Transformed</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl font-bold text-primary">20+</p>
                        <p class="text-sm text-muted-foreground">Years Experience</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl font-bold text-primary">2</p>
                        <p class="text-sm text-muted-foreground">Bestselling Books</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
