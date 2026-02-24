<section id="free-guide" class="py-24 lg:py-32">
    <div class="mx-auto max-w-3xl px-6 text-center lg:px-8">
        <h2 class="mb-4 font-serif text-3xl font-bold text-foreground sm:text-4xl lg:text-5xl">
            Get Your <span class="text-primary">Free Mindset Guide</span>
        </h2>
        <p class="mx-auto mb-10 max-w-xl text-muted-foreground">
            Sign up with your email below and we'll send you Marc's exclusive mindset guide — it could be a PDF, video, or whatever format fits best. The resource will help you start shifting your thinking today.
        </p>

        @if(session('status'))
            <div class="mb-6 rounded-lg bg-green-100 px-6 py-4 text-sm text-green-800">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('free-guide.submit') }}" method="POST" class="mx-auto flex max-w-md flex-col gap-3 sm:flex-row">
            @csrf
            <input type="email" name="email" placeholder="Enter your email" required
                class="flex-1 rounded-full border border-border bg-card px-5 py-3 text-sm text-foreground placeholder:text-muted-foreground focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20" value="{{ old('email') }}">
            <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-6 py-3 font-semibold text-primary-foreground transition-colors hover:bg-gold-light">
                Send Me the Guide
                <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
        </form>
    </div>
</section>
