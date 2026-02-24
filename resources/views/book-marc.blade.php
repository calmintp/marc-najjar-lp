@extends('layouts.app')

@section('title', 'Book Marc to Speak')
@section('description', 'Request Marc Najjar for speaking engagements, workshops or coaching sessions by filling out the form below.')

@section('content')
<main>
    @include('partials.navbar')

    <section class="pt-24 pb-16">
        <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
            <h1 class="mb-4 font-serif text-4xl font-bold text-foreground sm:text-5xl lg:text-6xl">
                Book Marc Najjar to Speak
            </h1>
            <p class="mx-auto mb-12 max-w-xl text-muted-foreground">
                Whether you're planning a conference, corporate event or private seminar, Marc's story and mindset teachings inspire action. Fill out the form below with the details of your request and we'll be in touch.
            </p>

            @if(session('status'))
                <div class="mb-6 rounded-lg bg-green-100 px-6 py-4 text-sm text-green-800">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('book.submit') }}" method="POST" class="mx-auto max-w-xl space-y-6">
                @csrf
                <div>
                    <label for="fullname" class="block text-sm font-medium text-foreground">Full Name</label>
                    <input type="text" name="fullname" id="fullname" required
                        class="mt-1 block w-full rounded-md border border-border bg-card px-4 py-2 text-sm text-foreground focus:border-primary focus:ring-primary" value="{{ old('fullname') }}">
                    @error('fullname')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-foreground">Email Address</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full rounded-md border border-border bg-card px-4 py-2 text-sm text-foreground focus:border-primary focus:ring-primary" value="{{ old('email') }}">
                    @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium text-foreground">Subject</label>
                    <input type="text" name="subject" id="subject" required
                        class="mt-1 block w-full rounded-md border border-border bg-card px-4 py-2 text-sm text-foreground focus:border-primary focus:ring-primary" value="{{ old('subject') }}">
                    @error('subject')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-foreground">Message / Request Details</label>
                    <textarea name="message" id="message" rows="5" required
                        class="mt-1 block w-full rounded-md border border-border bg-card px-4 py-2 text-sm text-foreground focus:border-primary focus:ring-primary">{{ old('message') }}</textarea>
                    @error('message')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-primary px-6 py-3 font-semibold text-primary-foreground transition-colors hover:bg-gold-light">
                    Send Request
                </button>
            </form>
        </div>
    </section>

    @include('partials.footer')
</main>
@endsection
