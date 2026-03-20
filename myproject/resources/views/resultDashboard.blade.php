<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-800">

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-200 via-purple-100 to-indigo-100 py-10">
        <div class="w-full max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl p-10 border border-indigo-100">
            <h2 class="text-4xl font-extrabold text-center text-indigo-800 mb-10 tracking-tight drop-shadow">Student Result Dashboard 2025</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-center border-separate border-spacing-0 rounded-2xl shadow-lg">
                    <thead class="bg-gradient-to-r from-indigo-200 to-purple-200">
                        <tr>
                            <th class="px-8 py-4 text-sm font-bold text-indigo-900 uppercase tracking-wider rounded-tl-2xl">Name</th>
                            <th class="px-8 py-4 text-sm font-bold text-indigo-900 uppercase tracking-wider">Roll No</th>
                            <th class="px-8 py-4 text-sm font-bold text-indigo-900 uppercase tracking-wider">Course</th>
                            <th class="px-8 py-4 text-sm font-bold text-indigo-900 uppercase tracking-wider">Result</th>
                            <th class="px-8 py-4 text-sm font-bold text-indigo-900 uppercase tracking-wider rounded-tr-2xl">CGPA</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-indigo-100">
                        @foreach($Student as $student)
                        <tr class="hover:bg-indigo-50 transition-colors">
                            <td class="px-8 py-4 text-base font-semibold text-gray-900">{{ $student['name'] }}</td>
                            <td class="px-8 py-4 text-base text-gray-700">{{ $student['rollno'] }}</td>
                            <td class="px-8 py-4 text-base text-gray-700">{{ $student['course'] }}</td>
                            <td class="px-8 py-4">
                                <span class="px-3 py-1 text-base font-bold rounded-full shadow-sm border border-white
                                    @if($student['result']==='A+' || $student['result']==='A') bg-gradient-to-r from-green-400 to-green-600 text-white
                                    @elseif($student['result']==='B+' || $student['result']==='A-') bg-gradient-to-r from-blue-400 to-blue-600 text-white
                                    @else bg-gradient-to-r from-yellow-400 to-yellow-600 text-white @endif">
                                    {{ $student['result'] }}
                                </span>
                            </td>
                            <td class="px-8 py-4 text-base text-purple-700 font-bold">{{ $student['cgpa'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
