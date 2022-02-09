<body style="font-family: 'Nunito', sans-serif">
    <table class="table table-borderless grades-student-personal" >
        <thead class="border border-warning border border-2 ">
            <th scope="col" colspan="2" class="text-center grades-header "><span>Dela Cruz, Juan</span> </th>
        </thead>
        <tbody>
            <tr>
                <td>Student Number: <span>2021-124512-00-XX</span> </td>
                <td>Class: <span>{{Auth::guard('web')->user()->classAssigned->class_name}}</span> </td>
            </tr>
            <tr>
                <td>Adviser: <span> {{Auth::guard('web')->user()->classAssigned->getInstructor->faculty_name}}</span></td>
                <td>GWA: <span>A++</span> </td>
            </tr>
            <tr>
                <td>Session : <span>Afternoon</span> </td>
                <td>Current Period: <span> 4th Grading</span></td>
            </tr>
        </tbody>
    </table>
</body>