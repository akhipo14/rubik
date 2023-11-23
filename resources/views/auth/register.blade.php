@extends('user.layouts.index')

@section('content')
    <div class="login">

        <div class="pembungkus-login">
            <h1>Daftar</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="inputan">
                    <div class="inputan-isi">
                        <label for="name" class="">Nama</label>
                        <div class="input">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="haikal rafli">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="inputan-isi">
                        <label for="no_hp" class="">No Whatsapp</label>
                        <div class="input">
                            <input id="no_hp" type="number"
                                class="form-control @error('password') is-invalid @enderror" name="whatsapp"
                                placeholder="0812345678910 " value="{{ old('name') }}">

                            @error('whatsapp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="inputan-isi">
                        <label for="email" class="">Email</label>

                        <div class="input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="example@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="inputan-isi">
                        <label for="password" class="">Password</label>
                        <div class="input">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="inputan-isi">
                        <label for="password-confirm" class="">Confirm Password</label>

                        <div class="input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div> --}}
                    <div class="login-button">
                        <button type="submit" class="">
                            Daftar
                        </button>
                    </div>
                    <div class="login-daftar">
                        <p>Sudah punya akun ? <a href="/login">Login sekarang</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('user.layouts.footer')
@endsection
