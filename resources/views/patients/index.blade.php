@extends('layout')

@section('content')

<a href="{{ route('dashboard') }}" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-black dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">GO BACK</a>
<br>    

<h1 class="text-2xl font-bold mb-4">Patients</h1>
    <a href="{{ route('patients.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Patient</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Arrival Time</th>
                <th>Appointment Time</th>
                <th>Reason for Visit</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->arrival_time }}</td>
                    <td>{{ $patient->appointment_time }}</td>
                    <td>{{ $patient->reason_for_visit }}</td>
                    <td>{{ $patient->priority }}</td>
                    <td>{{ $patient->status }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}" class="bg-green-500 text-white px-4 py-2 rounded inline-block">View</a>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded inline-block">Edit</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
