@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="arrival_time" class="block text-gray-700">Arrival Time</label>
            <input type="datetime-local" name="arrival_time" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="appointment_time" class="block text-gray-700">Appointment Time</label>
            <input type="datetime-local" name="appointment_time" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="reason_for_visit" class="block text-gray-700">Reason for Visit</label>
            <input type="text" name="reason_for_visit" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="priority" class="block text-gray-700">Priority</label>
            <input type="text" name="priority" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700">Status</label>
            <input type="text" name="status" class="w-full px-4 py-2 border rounded">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Patient</button>
    </form>
@endsection
