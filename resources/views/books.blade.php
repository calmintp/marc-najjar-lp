@extends('layouts.app')

@section('title', 'Books | Marc Najjar')
@section('description', 'Explore the complete collection of books by Marc Najjar. From bestselling memoirs to mindset guides, each book is a tool for transformation.')

@section('content')
<main>
    @include('partials.navbar')

    {{-- Hero banner --}}
    <section class="relative flex min-h-[40vh] items-center justify-center pt-20">
        <div class="absolute inset-0 bg-gradient-to-b from-charcoal to-background"></div>
        <div class="relative z-10 px-6 text-center">
            <h1 class="mb-4 font-serif text-4xl font-bold text-foreground sm:text-5xl lg:text-6xl">
                Book Collection
            </h1>
            <p class="mx-auto max-w-2xl text-lg leading-relaxed text-muted-foreground">
                Every book by Marc Najjar is crafted to ignite transformation. Explore the full collection below.
            </p>
            <div class="mx-auto mt-6 h-px w-24 bg-primary"></div>
        </div>
    </section>

    {{-- Books list --}}
    <section class="py-20 lg:py-28">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="flex flex-col gap-16 lg:gap-20">
                @foreach($books as $index => $book)

                <div class="flex flex-col items-center gap-8 
                    {{ $index % 2 === 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }} 
                    lg:gap-14">

                    <div class="flex shrink-0 justify-center">
                        <div class="relative">

                            @if($book->is_best_seller)
                                <span class="absolute -top-3 -right-3 z-10 rounded-full bg-primary px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-primary-foreground shadow-lg">
                                    Best Seller
                                </span>
                            @endif

                            <img src="{{ asset('storage/'.$book->image) }}"
                                alt="{{ $book->title }}"
                                class="h-auto w-56 rounded-lg shadow-2xl shadow-primary/15 transition-transform duration-300 hover:scale-105 sm:w-64 lg:w-72">
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 text-center lg:text-left flex-1">
                        <h2 class="font-serif text-2xl font-bold text-foreground sm:text-3xl lg:text-4xl">
                            {{ $book->title }}
                        </h2>

                        <p class="text-sm font-semibold uppercase tracking-wider text-primary">
                            {{ $book->subtitle }}
                        </p>

                        <div class="mx-auto h-px w-16 bg-border lg:mx-0"></div>

                        <p class="max-w-xl leading-relaxed text-muted-foreground flex-1">
                            {{ $book->description }}
                        </p>

                        <div class="mt-4">
                            <a href="{{ $book->amazon_link }}"
                            target="_blank"
                            class="inline-flex items-center justify-center rounded-full bg-primary px-10 py-4 text-base font-bold text-primary-foreground transition-colors hover:bg-gold-light">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach

            {{-- free guide callout instead of coming soon --}}
            <div class="mt-24 flex flex-col items-center gap-4 rounded-2xl border border-dashed border-border/60 bg-card/50 p-12 text-center">
                <div class="flex size-16 items-center justify-center rounded-full border border-primary/30 bg-charcoal">
                    <svg class="size-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl font-bold text-foreground">Want the Free Mindset Guide?</h3>
                <p class="max-w-md text-sm text-muted-foreground">Fill out the form on the homepage and we'll send you a powerful resource to jumpstart your transformation.</p>
                <a href="{{ route('home') }}#free-guide" class="mt-2 inline-flex items-center justify-center rounded-full border border-primary/40 px-8 py-3 text-sm font-bold text-primary transition-all hover:border-primary hover:bg-primary hover:text-primary-foreground">Get the Guide</a>
            </div>
        </div>
    </section>

    @include('partials.footer')
</main>
@endsection
