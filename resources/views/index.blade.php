<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — Student Management System</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] } } } };
    </script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-white text-slate-900 font-sans antialiased">
    <!-- Start: Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="index.html" class="flex items-center gap-3">
                    <img src="assets/img/logo.png" alt="Student Management System" class="h-11 w-11">
                    <div class="hidden sm:block">
                        <p class="text-sm font-semibold text-slate-900 leading-tight">Student Management System</p>
                        <p class="text-[11px] text-slate-500">Makerere University Business School</p>
                    </div>
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('index') }}" class="text-slate-900 text-sm font-medium">Home</a>
                    <a href="#how-it-works" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">How it works</a>
                    <a href="#who" class="text-slate-500 hover:text-slate-900 transition-colors text-sm font-medium">Who can use it</a>
                    <a href="{{ route('login') }}" class="px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm hover:bg-white hover:border-[#2563eb]/40">Sign in</a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 bg-[#2563eb] text-white rounded-lg font-medium text-sm hover:bg-[#1d4ed8] glow-blue">Create account</a>
                </div>
                <label for="mobile-nav-toggle" class="md:hidden p-2 text-slate-900 cursor-pointer">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </label>
            </div>
            <input type="checkbox" id="mobile-nav-toggle" class="peer hidden">
            <div class="hidden peer-checked:block md:!hidden py-4 border-t border-slate-200">
                <div class="flex flex-col gap-4">
                    <a href="index.html" class="text-slate-900 text-sm font-medium">Home</a>
                    <a href="#how-it-works" class="text-slate-500 hover:text-slate-900 text-sm font-medium">How it works</a>
                    <a href="#who" class="text-slate-500 hover:text-slate-900 text-sm font-medium">Who can use it</a>
                    <a href="login.html" class="px-5 py-2.5 border border-slate-200 text-slate-900 rounded-lg font-medium text-sm text-center">Sign in</a>
                    <a href="register.html" class="px-5 py-2.5 bg-[#2563eb] text-white rounded-lg font-medium text-sm text-center">Create account</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header -->

    <!-- Start: Hero -->
    <section class="relative pt-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center py-16 lg:py-20">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-slate-200 bg-white mb-6">
                        <i data-lucide="calendar-clock" class="w-4 h-4 text-[#d97706]"></i>
                        <span class="text-sm text-slate-500">Semester I 2026/2027 · Registration closes 2 November</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-5 leading-tight">
                        Students, courses and registrations<br>
                        <span class="text-gradient">in one place.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-slate-500 max-w-xl mx-auto lg:mx-0 mb-6 leading-relaxed">
                        Administrators manage records, lecturers see who is registered for their courses, and students register for courses and check their own registrations.
                    </p>
                    <div class="grid gap-2 text-left max-w-xl mx-auto lg:mx-0 mb-8">
                        <div class="flex items-start gap-2 text-sm text-slate-600"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i><span>Register for a course in a few clicks.</span></div>
                        <div class="flex items-start gap-2 text-sm text-slate-600"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i><span>No duplicate registrations, the system stops them.</span></div>
                        <div class="flex items-start gap-2 text-sm text-slate-600"><i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i><span>Each role only sees what it needs.</span></div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="register.html" class="group flex items-center gap-2 px-8 py-4 bg-[#2563eb] text-white rounded-xl font-semibold text-sm hover:bg-[#1d4ed8] glow-blue w-full sm:w-auto justify-center">
                            Create account
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="login.html" class="flex items-center justify-center gap-2 px-8 py-4 border border-slate-200 bg-white rounded-xl font-semibold text-sm text-slate-900 hover:border-[#2563eb]/40 w-full sm:w-auto">
                            I already have an account
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xl">
                        <div class="flex items-center justify-between mb-5">
                            <div>
                                <p class="text-xs uppercase tracking-wider text-[#d97706] font-semibold">This semester</p>
                                <p class="text-lg font-semibold mt-1">Courses open for registration</p>
                            </div>
                            <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-[#2563eb] border border-blue-100">4 courses</span>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="book-open" class="w-4 h-4 text-[#2563eb]"></i></div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">Advanced Web Application Development</p>
                                    <p class="text-xs text-slate-500 mt-0.5">BUC 3131 · Dr. Peter Mugisha</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-blue-50 text-[#2563eb] shrink-0">4 CU</span>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="book-open" class="w-4 h-4 text-[#d97706]"></i></div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">Database Management Systems</p>
                                    <p class="text-xs text-slate-500 mt-0.5">BUC 3102 · Dr. Peter Mugisha</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-amber-50 text-[#d97706] shrink-0">4 CU</span>
                            </div>
                            <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                <div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="book-open" class="w-4 h-4 text-[#2563eb]"></i></div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate">Business Research Methods</p>
                                    <p class="text-xs text-slate-500 mt-0.5">BAM 3105 · Dr. Isaac Ssemanda</p>
                                </div>
                                <span class="text-[11px] px-2 py-1 rounded-full bg-blue-50 text-[#2563eb] shrink-0">3 CU</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start: Hero stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 pb-16 border-t border-slate-200 pt-8">
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="graduation-cap" class="w-6 h-6 text-[#2563eb]"></i></div><div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Students</div><div class="text-sm text-slate-500">Own records only</div></div></div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="book-open" class="w-6 h-6 text-[#d97706]"></i></div><div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Courses</div><div class="text-sm text-slate-500">With assigned lecturers</div></div></div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="clipboard-check" class="w-6 h-6 text-[#2563eb]"></i></div><div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Registrations</div><div class="text-sm text-slate-500">No duplicates</div></div></div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200"><div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="smartphone" class="w-6 h-6 text-[#d97706]"></i></div><div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Works on phone</div><div class="text-sm text-slate-500">No app to install</div></div></div>
            </div>
            <!-- End: Hero stats -->
        </div>
    </section>
    <!-- End: Hero -->

    <!-- Start: How it works -->
    <section id="how-it-works" class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">How it works</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">Four steps, then you are registered</h2>
                <p class="text-sm text-slate-500">No queues at the registry.</p>
            </div>
            <ol class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#2563eb]">Step 01</span>
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center my-4"><i data-lucide="log-in" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <h3 class="font-bold mb-2">Sign in</h3>
                    <p class="text-sm text-slate-500">Use the account created for you or create a student account.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#d97706]">Step 02</span>
                    <div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center my-4"><i data-lucide="book-open" class="w-6 h-6 text-[#d97706]"></i></div>
                    <h3 class="font-bold mb-2">Browse courses</h3>
                    <p class="text-sm text-slate-500">See every course open this semester and who teaches it.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#2563eb]">Step 03</span>
                    <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center my-4"><i data-lucide="clipboard-check" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <h3 class="font-bold mb-2">Register</h3>
                    <p class="text-sm text-slate-500">Pick a course. The system blocks duplicate registrations.</p>
                </li>
                <li class="p-6 rounded-xl bg-white border border-slate-200">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#d97706]">Step 04</span>
                    <div class="w-12 h-12 rounded-lg bg-amber-50 flex items-center justify-center my-4"><i data-lucide="list-checks" class="w-6 h-6 text-[#d97706]"></i></div>
                    <h3 class="font-bold mb-2">Check your list</h3>
                    <p class="text-sm text-slate-500">Open My registrations any time to see what you signed up for.</p>
                </li>
            </ol>
        </div>
    </section>
    <!-- End: How it works -->

    <!-- Start: Who can use it -->
    <section id="who" class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#d97706] mb-3">Roles</p>
                <h2 class="text-2xl sm:text-3xl font-bold mb-3">Three roles, three workspaces</h2>
                <p class="text-sm text-slate-500">Students sign up themselves. Lecturers and administrators are added by an administrator.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="graduation-cap" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <h3 class="font-bold">Students</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">See what is on offer and what you signed up for.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>View available courses</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Register for a course</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>See only your own registrations</li>
                    </ul>
                    <a href="dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#2563eb]">Open student home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center"><i data-lucide="briefcase" class="w-5 h-5 text-[#d97706]"></i></div>
                        <h3 class="font-bold">Lecturers</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">See the courses you teach and who is in them.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>View your assigned courses</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>See registered students</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#d97706] mt-0.5"></i>Read-only access</li>
                    </ul>
                    <a href="lecturer/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#d97706]">Open lecturer home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
                <div class="p-6 rounded-xl bg-white border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-11 h-11 rounded-lg bg-blue-50 flex items-center justify-center"><i data-lucide="shield" class="w-5 h-5 text-[#2563eb]"></i></div>
                        <h3 class="font-bold">Administrators</h3>
                    </div>
                    <p class="text-sm text-slate-500 mb-4">Keep the records and access up to date.</p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Manage students and courses</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Manage registrations</li>
                        <li class="flex gap-2"><i data-lucide="check" class="w-4 h-4 text-[#2563eb] mt-0.5"></i>Manage users and roles</li>
                    </ul>
                    <a href="admin/dashboard.html" class="inline-flex items-center gap-2 mt-6 text-sm text-[#2563eb]">Open admin home <i data-lucide="arrow-right" class="w-4 h-4"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Who can use it -->

    <!-- Start: Call to action -->
    <section class="py-24 bg-white border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="rounded-2xl border border-slate-200 bg-white p-10 sm:p-14">
                <h2 class="text-2xl sm:text-3xl font-bold mb-4">Ready to register?</h2>
                <p class="text-slate-500 mb-8 max-w-xl mx-auto">Create an account with your student email. If you already have one, just sign in.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="register.html" class="px-8 py-4 bg-[#2563eb] text-white rounded-xl font-semibold text-sm hover:bg-[#1d4ed8] glow-blue">Create account</a>
                    <a href="login.html" class="px-8 py-4 border border-slate-200 bg-white rounded-xl font-semibold text-sm hover:border-[#2563eb]/40">Sign in</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Call to action -->

    <!-- Start: Footer -->
    <footer class="bg-[#1e3a8a] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-6"><img src="assets/img/logo.png" alt="" class="h-12 w-12"><span class="font-semibold">Student Management System</span></div>
                    <p class="text-blue-100 text-sm leading-relaxed max-w-sm">Manage students, courses, lecturers and course registrations for Makerere University Business School.</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Quick links</h4>
                    <ul class="space-y-3 text-sm text-blue-100">
                        <li><a href="login.html" class="hover:text-white">Sign in</a></li>
                        <li><a href="register.html" class="hover:text-white">Create account</a></li>
                        <li><a href="courses/index.html" class="hover:text-white">Available courses</a></li>
                        <li><a href="lecturer/dashboard.html" class="hover:text-white">Lecturer home</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Contact</h4>
                    <ul class="space-y-2 text-sm text-blue-100">
                        <li>registry@mubs.ac.ug</li>
                        <li>Academic Registrar's office</li>
                        <li class="text-[#fbbf24] pt-2">Mon–Fri, 8:00am – 5:00pm</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-blue-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-blue-200">
                <p>© 2026 Student Management System. All rights reserved.</p>
                <p>Privacy · Acceptable use · Registration policy</p>
            </div>
        </div>
    </footer>
    <!-- End: Footer -->

    <script>lucide.createIcons();</script>
</body>
</html>
