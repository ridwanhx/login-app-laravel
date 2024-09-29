    @extends('components.layout')

    @section('content')
        <div class="container px-4 font-inter">
            <div class="flex justify-center items-center pt-28 pb-24">
                <form action="{{ url('/login') }}" method="POST"
                    class="bg-white p-10 rounded shadow-sm w-full md:w-1/2 xl:w-1/3">
                    <h3
                        class="text-3xl text-slate-800 font-bold text-center mb-4 bg-gradient-to-br from-sky-500 to-indigo-500 bg-clip-text text-transparent">
                        Login</h3>

                    <!-- Alert untuk error umum (misalnya username/password salah) -->
                    @error ('username')
                        <div class="w-full py-4 text-center text-red-600 bg-red-100 rounded mb-4">
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        </div>
                    @enderror
                    @csrf
                    <div class="mb-4">
                        <label for="username">
                            <span
                                class="block text-slate-600 capitalize mb-1 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">username</span>
                            <input type="text"
                                class="block w-full border rounded-full py-3 px-4 text-slate-800 focus:outline-none focus:ring-1 focus:ring-sky-500/25 placeholder:text-sm placeholder:capitalize"
                                id="username" name="username" value="{{ old('username') }}" placeholder="username.."
                                autofocus>
                        </label>
                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password">
                            <span
                                class="block text-slate-800 capitalize mb-1 text-sm after:content-['*'] after:ml-0.5 after:text-red-500">password</span>
                            <input type="password"
                                class="block w-full border rounded-full py-3 px-4 text-slate-600 focus:outline-none focus:ring-1 focus:ring-sky-500/25 placeholder:text-sm placeholder:capitalize"
                                id="password" name="password" placeholder="password..">
                        </label>
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="block w-full rounded-full py-3 bg-indigo-500 text-white shadow-sm shadow-indigo-500/25 transition duration-300 hover:bg-indigo-600">Submit</button>
                </form>
            </div>
        </div>
    @endsection
