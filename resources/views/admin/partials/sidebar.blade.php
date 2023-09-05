<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ url('/admin') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{ asset('img/icon.jpg') }}" alt=""
                    style="width: 3rem; aspect-ratio: 1/1; border-radius: 50%;"></i>&nbsp;Serenity</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src={{ asset('img/user.jpg') }} alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/admin') }}" class="nav-item nav-link active"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-table me-2"></i>Appointments</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('/admin/appointments/requests') }}" class="dropdown-item">New Requests</a>
                    <a href="{{ url('/admin/appointments/accepted') }}" class="dropdown-item">Accepted Appointments</a>
                    {{-- <a href="{{ url('/admin/appointments/completed') }}" class="dropdown-item">Completed
                        Appointments</a> --}}
                </div>
            </div>
        </div>
    </nav>
</div>