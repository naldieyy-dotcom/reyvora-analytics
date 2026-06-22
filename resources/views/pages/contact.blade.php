@extends('layouts.app')

@section('content')

<div class="text-center py-5">
    <h1 class="fw-bold text-primary">
        Contact Reyvora Analytics
    </h1>

    <p class="lead mt-3">
        Let’s discuss how data-driven solutions can
        accelerate your business growth.
    </p>
</div>

<hr class="my-5">

<div class="row">

    <div class="col-md-5 mb-5">
        <div class="p-4 shadow-sm border rounded h-100">

            <h3 class="fw-bold text-primary mb-4">
                Get In Touch
            </h3>

            <p class="mb-4">
                We are ready to help your business unlock
                strategic opportunities through analytics,
                innovation, and technology solutions.
            </p>

            <div class="mb-4">
                <h5 class="fw-bold">📍 Office Address</h5>
                <p>
                    Jl. Business Innovation No. 25<br>
                    Jakarta, Indonesia
                </p>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold">📞 Phone</h5>
                <p>
                    +62 812-3456-7890
                </p>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold">📧 Email</h5>
                <p>
                    contact@reyvoraanalytics.com
                </p>
            </div>

            <div>
                <h5 class="fw-bold">🌐 Business Hours</h5>
                <p>
                    Monday - Friday<br>
                    08:00 AM - 05:00 PM
                </p>
            </div>

        </div>
    </div>

    <div class="col-md-7">
        <div class="p-4 shadow-sm border rounded">

            <h3 class="fw-bold text-primary mb-4">
                Send Us a Message
            </h3>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Full Name
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter your full name"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter your email"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Subject
                    </label>

                    <input type="text"
                           name="subject"
                           class="form-control"
                           placeholder="Enter subject"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Message
                    </label>

                    <textarea name="message"
                              rows="5"
                              class="form-control"
                              placeholder="Write your message..."
                              required></textarea>
                </div>

                <button type="submit"
                        class="btn btn-primary w-100 py-2 fw-bold">
                    Send Message
                </button>

            </form>

        </div>
    </div>

</div>

@endsection