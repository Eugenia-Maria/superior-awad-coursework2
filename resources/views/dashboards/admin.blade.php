
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-rose-700">Moomsef administration</p>
                <h2 class="text-xl font-semibold text-slate-900">Administration dashboard</h2>
            </div>
            <span class="w-fit rounded-full border border-rose-200 bg-rose-50 px-3 py-1 text-xs font-medium text-rose-800">Admin workspace</span>
        </div>
    </x-slot>

    <div class="py-12">
        <main class="min-h-[calc(100vh-9rem)] bg-slate-50 px-4 py-8 sm:px-6 lg:px-8 lg:py-12">
            <div class="mx-auto max-w-7xl space-y-8">

                <section class="overflow-hidden rounded-lg bg-gradient-to-r from-rose-950 via-rose-800 to-orange-700 px-6 py-8 text-white shadow-sm sm:px-9 sm:py-10">
                    <p class="text-sm font-medium text-rose-100">System overview</p>
                    <h1 class="mt-2 text-3xl font-semibold">Welcome, {{ auth()->user()->name }}</h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-rose-100">Manage the people, courses and registrations that keep academic records in order.</p>
                </section>

                <section class="grid gap-5 md:grid-cols-3" aria-label="Administration dashboard overview">

                    <!-- Student Records -->
                    <a href="{{ route('students.index') }}"
                       class="flex min-h-64 flex-col rounded-lg border border-teal-200 bg-teal-700 p-6 text-white shadow-sm transition hover:bg-teal-800">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-teal-100">01 / People</span>
                        <h2 class="mt-5 text-xl font-semibold">Student records</h2>
                        <p class="mt-3 text-sm leading-6 text-teal-50">Keep student information and account access organized for the academic community.</p>
                        <span class="mt-auto pt-8 text-sm font-medium text-white">People and access →</span>
                    </a>

                    <!-- Course Catalogue -->
                    <a href="{{ route('courses.index') }}"
                       class="flex min-h-64 flex-col rounded-lg border border-yellow-200 bg-yellow-50 p-6 text-yellow-950 shadow-sm transition hover:bg-yellow-100">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-yellow-700">02 / Academics</span>
                        <h2 class="mt-5 text-xl font-semibold">Course catalogue</h2>
                        <p class="mt-3 text-sm leading-6 text-yellow-900">Maintain a clear view of the courses that make up each academic offering.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-yellow-800">Academic records →</span>
                    </a>

                    <!-- Registrations -->
                    <a href="{{ route('registrations.index') }}"
                       class="flex min-h-64 flex-col rounded-lg border border-sky-200 bg-sky-50 p-6 text-sky-950 shadow-sm transition hover:bg-sky-100">
                        <span class="text-xs font-semibold uppercase tracking-[0.18em] text-sky-700">03 / Enrollment</span>
                        <h2 class="mt-5 text-xl font-semibold">Registrations</h2>
                        <p class="mt-3 text-sm leading-6 text-sky-900">Review course registration activity and help keep enrollment records consistent.</p>
                        <span class="mt-auto pt-8 text-sm font-semibold text-sky-800">Enrollment oversight →</span>
                    </a>

                </section>
            </div>
        </main>
    </div>
</x-app-layout>
