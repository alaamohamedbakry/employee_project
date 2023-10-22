<x-app>
    <x-slot name='title'>employees</x-slot>
    <x-slot name='header'>employees</x-slot>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">FIRST_NAME</th>
                    <th scope="col">LAST_NAME</th>
                    <th scope="col">EMAIL </th>
                    <th scope="col">PHONE_NUMBER</th>
                    <th scope="col">HIRE_DATE</th>
                    <th scope="col">JOB_ID</th>
                    <th scope="col">SALARY</th>
                    <th scope="col">COMMISSION_PCT</th>
                    <th scope="col">MANAGER_NAME </th>
                    <th scope="col">DEPARTMENT_NAME </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employees as $employee)

                    <tr class="">
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$employee->FIRST_NAME}}</td>
                        <td>{{$employee->LAST_NAME}}</td>
                        <td>{{$employee->EMAIL}}</td>
                        <td>{{$employee->PHONE_NUMBER}}</td>
                        <td>{{$employee->HIRE_DATE}}</td>
                        <td>{{$employee->JOB_ID}}</td>
                        <td>{{$employee->SALARY}}</td>
                        <td>{{$employee->COMMISSION_PCT ? $employee->COMMISSION_PCT*100 . '%':'0'}}</td>
                        <td>{{$employee->MANAGER_NAME}}</td>
                        <td>{{$employee->DEPARTMENT_NAME}}</td>
                    </tr>
                @empty
                    <tr class="">
                        <td scope="row">NO DATA FOUND</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app>
