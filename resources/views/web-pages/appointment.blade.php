@extends('web-pages.partials.main-section')
@section('content')
    <div id="appointment">
        <div class="main_container">
            <div class="wrapper">
                <form method="POST" action="{{ url('appointment') }}">
                    @csrf
                    {{-- <div>
                        <x-label for="patient_name" value="{{ __('Name') }}" />
                        <x-input id="patient_name" class="block mt-1 w-full" type="text" name="patient_name" :value="old('name')"
                            required autocomplete="name" />
                    </div>
                    <div class="mt-4">
                        <x-label for="patient_email" value="{{ __('Email') }}" />
                        <x-input id="patient_email" class="block mt-1 w-full" type="email" name="patient_email" :value="old('email')"
                            required autocomplete="username" />
                    </div>
                    <div class="mt-4">
                        <x-label for="patient_phone" value="{{ __('Phone Number') }}" />
                        <x-input id="patient_phone" class="block mt-1 w-full" type="number" name="patient_phone" :value="old('email')"
                            required autocomplete="username" />
                    </div> --}}
                    <div class="mt-4">
                        <x-label for="appointment_date" value="{{ __('Appointment Date') }}" />
                        <x-input id="appointment_date" class="block mt-1 w-full" type="date" name="appointment_date" required
                            autocomplete="new-password" />
                    </div>
                    <div class="mt-4">
                        <x-label for="reason_for_appointment" value="{{ __('Reason of Appointment') }}" />
                        <x-input id="reason_for_appointment" class="block mt-1 w-full" type="text"
                            name="reason_for_appointment" required autocomplete="new-password" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Book Appointment') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
