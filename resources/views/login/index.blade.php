@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <form id="loginForm" class="space-y-4">
            @csrf
            <div>
                <label>Email</label>
                <input type="text" name="email" class="border rounded w-full p-2">
                <span class="text-red-500 text-sm" id="email_error"></span>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" class="border rounded w-full p-2">
                <span class="text-red-500 text-sm" id="password_error"></span>
            </div>
            <button type="submit" id="loginBtn" class="bg-blue-500 text-white px-4 py-2 rounded">
                Login
            </button>
        </form>

        <div id="responseMessage" class="mt-4 text-center text-sm text-red-500"></div>
    </div>
</div>
@endsection

@push('scripts')
<meta name="csrf-token" content="{{ csrf_token() }}"> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('submit', '#loginForm', function(e) {
    e.preventDefault();

    $("#email_error").text("");
    $("#password_error").text("");
    $("#responseMessage").text("");

    let formData = $(this).serialize();

   
    $("#loginBtn").prop("disabled", true).text("Logging in...");

    $.ajax({
        url: "{{ url('admin/login') }}",
        method: "POST",
        data: formData,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(response) {
            if (response.status === "success") {
                window.location.href = response.redirect_url; 
            }
        },
        error: function(xhr) {
            if (xhr.status === 422 || xhr.status === 401) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    $("#" + key + "_error").text(value[0]);
                });
            } else {
                $("#responseMessage").text("Something went wrong. Please try again.");
            }
        },
        complete: function() {
            
            $("#loginBtn").prop("disabled", false).text("Login");
        }
    });
});
</script>
@endpush
