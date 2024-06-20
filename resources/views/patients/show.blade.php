@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Patient Details</h1>
    <div class="mb-4">
        <strong>Name:</strong> {{ $patient->name }}
    </div>
    <div class="mb-4">
        <strong>Arrival Time:</strong> {{ $patient->arrival_time }}
    </div>
    <div class="mb-4">
        <strong>Appointment Time:</strong> {{ $patient->appointment_time }}
    </div>
    <div class="mb-4">
        <strong>Reason for Visit:</strong> {{ $patient->reason_for_visit }}
    </div>
    <div class="mb-4">
        <strong>Priority:</strong> {{ $patient->priority }}
    </div>
    <div class="mb-4">
        <strong>Status:</strong> {{ $patient->status }}
    </div>
    <a href="{{ route('patients.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
@endsection
