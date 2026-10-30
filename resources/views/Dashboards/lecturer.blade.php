
<x-app-layout>
    <x-slot name="header">
        {{-- Lecturer heading uses a separate green and indigo identity. --}}
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-emerald-700">Moomsef teaching portal</p>
                <h2 class="text-xl font-semibold text-slate-900">Lecturer dashboard</h2>
            </div>
            <span class="w-fit rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-medium text-emerald-800">Lecturer workspace</span>
        </div>
    </x-slot>

    <div class="py-12">
        <main class="min-h-[calc(100vh-9rem)] bg-slate-50 px-4 py-8 sm:px-6 lg:px-8 lg:py-12">
            <div class="mx-auto max-w-7xl space-y-8">

                {{-- Lecturer welcome banner --}}
                <section class="overflow-hidden rounded-lg bg-gradient-to-r from-emerald-950 via-emerald-800 to-indigo-700 px-6 py-8 text-white shadow-sm sm:px-9 sm:py-10">
                    <p class="text-sm font-medium text-emerald-100">Teaching overview</p>
                    <h1 class="mt-2 text-3xl font-semibold">Welcome, {{ auth()->user()->name }}</h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-emerald-100">Start with your assigned courses and keep the class information you need close at hand.</p>
                </section>

                <section class="grid gap-5 md:grid-cols-3" aria-label="Lecturer dashboard overview">

                    {{-- Assigned courses --}}
                    <a href="{{ route('lecturer.courses') }}"
                       class="flex min-h-64 flex-col rounded-lg border border-emerald-200 bg-emerald-700 p-6 text-white shadow-sm transition hover:bg-emerald-800">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-emerald-100">01 / Teaching</span>
                        <h2 class="mt-5 text-xl font-semibold">Assigned courses</h2>
                        <p class="mt-3 text-sm leading-6 text-emerald-50">Keep the courses assigned to you at the center of your teaching workspace.</p>
                        <span class="mt-auto pt-8 text-sm font-medium text-white">Your course portfolio →</span>
                    </a>

                    {{-- Registered students --}}
                    <article class="flex min-h-64 flex-col rounded-lg border border-indigo-200 bg-indigo-50 p-6 text-indigo-950 shadow-sm">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-indigo-700">02 / Class lists</span>
                        <h2 class="mt-5 text-xl font-semibold">Registered students</h2>
                        <p class="mt-3 text-sm leading-6 text-indigo-900">See which students are registered for the courses you teach.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-indigo-800">Course rosters</span>
                    </article>

                    {{-- Teaching overview --}}
                    <article class="flex min-h-64 flex-col rounded-lg border border-orange-200 bg-orange-50 p-6 text-orange-950 shadow-sm">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-orange-700">03 / Semester</span>
                        <h2 class="mt-5 text-xl font-semibold">Teaching at a glance</h2>
                        <p class="mt-3 text-sm leading-6 text-orange-900">Use your course and roster information to plan the work ahead.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-orange-800">A clearer class view</span>
                    </article>

                </section>
            </div>
        </main>
    </div>
</x-app-layout>
