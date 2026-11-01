
<x-app-layout>
    <x-slot name="header">
        {{-- Student heading uses the blue and cyan identity carried through this dashboard. --}}
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-700">Moomsef student portal</p>
                <h2 class="text-xl font-semibold text-slate-900">Student dashboard</h2>
            </div>
            <span class="w-fit rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-xs font-medium text-blue-800">Student workspace</span>
        </div>
    </x-slot>

    <div class="py-12">
        <main class="min-h-[calc(100vh-9rem)] bg-slate-50 px-4 py-8 sm:px-6 lg:px-8 lg:py-12">
            <div class="mx-auto max-w-7xl space-y-8">

                {{-- Student welcome banner --}}
                <section class="overflow-hidden rounded-lg bg-gradient-to-r from-blue-950 via-blue-800 to-cyan-700 px-6 py-8 text-white shadow-sm sm:px-9 sm:py-10">
                    <p class="text-sm font-medium text-cyan-100">Your academic home</p>
                    <h1 class="mt-2 text-3xl font-semibold">Welcome, {{ auth()->user()->name }}</h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-blue-100">Keep your course choices and registrations together in one clear view.</p>
                </section>

                <section class="grid gap-5 md:grid-cols-3" aria-label="Student dashboard overview">

                    {{-- Explore courses --}}
                    <article class="flex min-h-64 flex-col rounded-lg border border-blue-200 bg-blue-700 p-6 text-white shadow-sm">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-100">01 / Discover</span>
                        <h2 class="mt-5 text-xl font-semibold">Explore courses</h2>
                        <p class="mt-3 text-sm leading-6 text-blue-50">Review the courses available to students and find the ones that fit your semester.</p>
                        <span class="mt-auto pt-8 text-sm font-medium text-white">Course catalogue</span>
                    </article>

                    {{-- Your registrations --}}
                    <a href="{{ route('students.courses') }}"
                       class="flex min-h-64 flex-col rounded-lg border border-amber-200 bg-amber-50 p-6 text-amber-950 shadow-sm transition hover:bg-amber-100">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-amber-700">02 / Organize</span>
                        <h2 class="mt-5 text-xl font-semibold">Your registrations</h2>
                        <p class="mt-3 text-sm leading-6 text-amber-900">Keep track of the courses you have selected and return to your registration list when you need it.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-amber-800">Your course record →</span>
                    </a>

                    {{-- Plan your semester --}}
                    <article class="flex min-h-64 flex-col rounded-lg border border-emerald-200 bg-emerald-50 p-6 text-emerald-950 shadow-sm">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-emerald-700">03 / Stay on track</span>
                        <h2 class="mt-5 text-xl font-semibold">Plan your semester</h2>
                        <p class="mt-3 text-sm leading-6 text-emerald-900">Use your course selections as a simple reference point as you move through the semester.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-emerald-800">One step at a time</span>
                    </article>

                </section>
            </div>
        </main>
    </div>
</x-app-layout>
