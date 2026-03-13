<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:shrink-0">
            <div class="flex flex-col w-64 bg-gray-800 text-white">
                <div class="flex items-center justify-center h-16 bg-gray-900 border-b border-gray-700">
                    <span class="text-xl font-bold tracking-wider">STUDENT PORTAL</span>
                </div>
                <div class="flex flex-col grow overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-2">
                        <a href="#" class="flex items-center px-4 py-2 rounded-md hover:bg-gray-700 hover:text-white group bg-gray-900 text-white">
                            <i class="fas fa-home mr-3 text-lg"></i>
                            Dashboard
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i class="fas fa-book mr-3 text-lg"></i>
                            My Courses
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i class="fas fa-calendar-alt mr-3 text-lg"></i>
                            Timetable
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i class="fas fa-graduation-cap mr-3 text-lg"></i>
                            Grades
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i class="fas fa-file-invoice mr-3 text-lg"></i>
                            Fee Payment
                        </a>
                         <a href="#" class="flex items-center px-4 py-2 text-gray-300 rounded-md hover:bg-gray-700 hover:text-white group">
                            <i class="fas fa-user mr-3 text-lg"></i>
                            Profile
                        </a>
                    </nav>
                </div>
                <!-- User Profile Bottom -->
                <div class="flex items-center p-4 bg-gray-900 border-t border-gray-700">
                    <img class="h-8 w-8 rounded-full object-cover border-2 border-gray-500" src="https://ui-avatars.com/api/?name=Student+Name&background=random" alt="User avatar">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">John Doe</p>
                        <p class="text-xs text-gray-400">Reg: 12345678</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <!-- Top Header -->
            <div class="relative z-10 shrink-0 flex h-16 bg-white shadow">
                <button class="px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex items-center">
                        <div class="w-full max-w-lg lg:max-w-xs">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative text-gray-400 focus-within:text-gray-600">
                                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <i class="fas fa-search"></i>
                                </div>
                                <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-gray-300 rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Search courses, assignments..." type="search" name="search">
                            </div>
                        </div>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        <button class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                         <div class="relative group">
                            <button class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Student+Name&background=random" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Scroll Area -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 mt-6">
                        
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                            <!-- Card 1 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="shrink-0 bg-blue-500 rounded-md p-3">
                                            <i class="fas fa-book text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Enrolled Courses</dt>
                                                <dd><div class="text-lg font-medium text-gray-900">6</div></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">View all</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="shrink-0 bg-green-500 rounded-md p-3">
                                            <i class="fas fa-check-circle text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Attendance</dt>
                                                <dd><div class="text-lg font-medium text-gray-900">85%</div></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-green-600 hover:text-green-500">View details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="shrink-0 bg-yellow-500 rounded-md p-3">
                                            <i class="fas fa-clock text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Pending Tasks</dt>
                                                <dd><div class="text-lg font-medium text-gray-900">3</div></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-yellow-600 hover:text-yellow-500">View tasks</a>
                                    </div>
                                </div>
                            </div>
                             <!-- Card 4 -->
                             <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="shrink-0 bg-purple-500 rounded-md p-3">
                                            <i class="fas fa-bullhorn text-white text-xl"></i>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">Announcements</dt>
                                                <dd><div class="text-lg font-medium text-gray-900">2 New</div></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-5 py-3">
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-purple-600 hover:text-purple-500">Read all</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Activity / Timetable Section -->
                        <div class="flex flex-col lg:flex-row gap-6">
                            <!-- Left Column: Upcoming Classes -->
                            <div class="flex-1 bg-white shadow rounded-lg p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Today's Schedule</h3>
                                <div class="flow-root">
                                    <ul class="-my-5 divide-y divide-gray-200">
                                        <li class="py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-blue-100">
                                                        <span class="text-sm font-medium leading-none text-blue-700">09:00</span>
                                                    </span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Advanced Web Development</p>
                                                    <p class="text-sm text-gray-500 truncate">Room 401 &bull; Dr. Smith</p>
                                                </div>
                                                <div>
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-gray-100">
                                                        <span class="text-sm font-medium leading-none text-gray-700">11:00</span>
                                                    </span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Database Management</p>
                                                    <p class="text-sm text-gray-500 truncate">Lab 3 &bull; Prof. Johnson</p>
                                                </div>
                                                <div>
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                        Upcoming
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="shrink-0">
                                                    <span class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-gray-100">
                                                        <span class="text-sm font-medium leading-none text-gray-700">14:00</span>
                                                    </span>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Software Engineering</p>
                                                    <p class="text-sm text-gray-500 truncate">Hall B &bull; Dr. Williams</p>
                                                </div>
                                                 <div>
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                        Upcoming
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Right Column: Assignments -->
                            <div class="flex-1 bg-white shadow rounded-lg p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">Pending Assignments</h3>
                                 <div class="flow-root">
                                    <ul role="list" class="divide-y divide-gray-200">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Project Phase 1</p>
                                                    <p class="text-sm text-gray-500 truncate">Web Development</p>
                                                </div>
                                                <div class="inline-flex items-center text-sm font-semibold text-red-600">
                                                    Due Tomorrow
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Lab Report 5</p>
                                                    <p class="text-sm text-gray-500 truncate">Database Systems</p>
                                                </div>
                                                <div class="inline-flex items-center text-sm font-semibold text-yellow-600">
                                                    Due in 3 days
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate">Essay on AI Ethics</p>
                                                    <p class="text-sm text-gray-500 truncate">Professional Ethics</p>
                                                </div>
                                                <div class="inline-flex items-center text-sm font-semibold text-green-600">
                                                    Due next week
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-6">
                                    <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        View all assignments
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
