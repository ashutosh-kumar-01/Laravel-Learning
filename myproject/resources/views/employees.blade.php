<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>

<h2>Employee Salary Status</h2>

@foreach($employees as $emp)

    {{ $emp['name'] }} - {{ $emp['salary'] }} -

    @if($emp['salary'] >= 30000)
        High
    @else
        Low
    @endif

    <br>

@endforeach

</body>
</html>