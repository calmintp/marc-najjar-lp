@extends('layouts.app')

@section('title', 'Video Insights | Marc Najjar')
@section('description', 'Watch Marc Najjar deliver the principles that have transformed thousands of lives around the world.')

@section('content')
<main x-data="{ activeVideo: null }">
    @include('partials.navbar')

    <section class="pb-24 pt-32 lg:pb-32 lg:pt-40">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <h1 class="mb-4 text-center font-serif text-4xl font-bold text-foreground sm:text-5xl lg:text-6xl text-balance">
                Video <span class="text-primary">Insights</span>
            </h1>
            <p class="mx-auto mb-16 max-w-2xl text-center leading-relaxed text-muted-foreground">
                Watch Marc Najjar deliver the principles that have transformed thousands of lives around the world.
            </p>

            @php
                $videos = [
                    ['id' => 'dQw4w9WgXcQ', 'image' => 'story-1.jpg', 'title' => 'Change Your Mindset, Change Your Life', 'desc' => 'Marc shares the mindset strategies that took him from the war-torn streets of Lebanon to building a multimillion-dollar empire in Beverly Hills.'],
                    ['id' => 'dQw4w9WgXcQ', 'image' => 'story-2.jpg', 'title' => 'The Power of Resilience', 'desc' => 'Discover how to develop unshakeable resilience and turn life\'s biggest challenges into your greatest opportunities.'],
                    ['id' => 'dQw4w9WgXcQ', 'image' => 'story-3.jpg', 'title' => 'Building Wealth from Nothing', 'desc' => 'Marc reveals the financial strategies and mindset shifts that transformed him from a poor immigrant to a successful entrepreneur.'],
                    ['id' => 'dQw4w9WgXcQ', 'image' => 'story-4.jpg', 'title' => 'Empowering the Next Generation', 'desc' => 'Learn how Marc is empowering thousands of people worldwide to break free from limiting beliefs and create extraordinary lives.'],
                ];
            @endphp

            <div class="grid gap-10 md:grid-cols-2">
                @foreach($videos as $video)
                    <div class="group">
                        <button @click="activeVideo = '{{ $video['id'] }}'" class="relative block w-full overflow-hidden rounded-2xl border border-border/50 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary" aria-label="Play: {{ $video['title'] }}">
                            <img src="{{ asset('images/' . $video['image']) }}" alt="{{ $video['title'] }}" class="aspect-video w-full object-cover brightness-75 transition-all duration-500 group-hover:brightness-50 group-hover:scale-105">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="flex size-16 items-center justify-center rounded-full border-2 border-primary bg-primary/20 text-primary backdrop-blur-sm transition-all duration-300 group-hover:scale-110 group-hover:bg-primary/40">
                                    <svg class="size-6 fill-primary" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                </div>
                            </div>
                        </button>
                        <h3 class="mt-4 font-serif text-xl font-bold text-foreground">{{ $video['title'] }}</h3>
                        <p class="mt-2 leading-relaxed text-sm text-muted-foreground">{{ $video['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-20 rounded-2xl border border-border/50 bg-card p-10 text-center lg:p-16">
                <h2 class="mb-3 font-serif text-2xl font-bold text-foreground lg:text-3xl text-balance">
                    More Content <span class="text-primary">Coming Soon</span>
                </h2>
                <p class="mx-auto max-w-xl leading-relaxed text-muted-foreground">
                    Marc is constantly creating new content to help you on your transformation journey. Subscribe to be the first to know when new videos are released.
                </p>
                <a href="#" class="mt-6 inline-flex items-center gap-2 rounded-sm bg-primary px-8 py-3 text-sm font-semibold uppercase tracking-wider text-primary-foreground transition-all hover:bg-gold-light">
                    Subscribe for Updates
                </a>
            </div>
        </div>
    </section>

    {{-- Video Lightbox --}}
    <template x-teleport="body">
        <div x-show="activeVideo" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm" @click="activeVideo = null" @keydown.escape.window="activeVideo = null" style="display: none;">
            <button @click="activeVideo = null" class="absolute right-4 top-4 z-50 flex size-10 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-white/20" aria-label="Close video">
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <div class="w-full max-w-4xl px-4" @click.stop>
                <div class="relative aspect-video w-full overflow-hidden rounded-xl">
                    <template x-if="activeVideo">
                        <iframe :src="'https://www.youtube.com/embed/' + activeVideo + '?autoplay=1'" title="Video Player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="absolute inset-0 h-full w-full"></iframe>
                    </template>
                </div>
            </div>
        </div>
    </template>

    @include('partials.footer')
</main>
@endsection
