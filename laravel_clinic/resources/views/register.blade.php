@extends('layouts.app')

@section('title', 'Register')

@section('contact')
    <div class="page-wrapper">

        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('page.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </nav>
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form action="{{ route('register.store') }}" method="POST" class="form">
                    @csrf
                    <div class="form-items">
                        @error('name')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name ="name" required>
                        </div>
                        @error('phone')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" name ="phone" required>
                        </div>
                        @error('email')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" name ="email" required>
                        </div>
                        @error('password')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" name ="password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create account</button>
                </form>
                <div class="d-flex justify-content-center gap-2">
                    <span>already have an account?</span><a class="link" href="./login.html"> login</a>
                </div>
            </div>

        </div>
    </div>
@endsection
