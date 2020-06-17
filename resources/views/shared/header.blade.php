<header class="MainHeader navbar p-3 bg-primary text-white">
    <div class="MainHeader-logo">
        <h3>StudentsDB</h3>
    </div>
    <div class="MainHeader-navbar">
        <a class="text-white" href="{{ route('students.index') }}">
            Students
        </a>
        <a class="text-white  ml-3" href="{{ route('students.create') }}">
            Create
        </a>
    </div>
</header>