<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 text-white leading-tight">
            {{ __('Kelola Pemohon') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-custom-color bg-custom-color overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-white">
                    <form method="post" action="{{ route('pemohon.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div class="max-w-xl text-white">
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" type="text" name="name" class="mt-1 block w-full" value="{{ old('name') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="nik" value="NIK" />
                            <x-text-input id="nik" type="text" name="nik" class="mt-1 block w-full" value="{{ old('nik') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nik')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" type="text" name="email" class="mt-1 block w-full" value="{{ old('email') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="telepon" value="Telepon" />
                            <x-text-input id="telepon" type="text" name="telepon" class="mt-1 block w-full" value="{{ old('telepon') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('telepon')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="password" value="Password" />
                            <x-text-input id="password" type="text" name="password" class="mt-1 block w-full" value="{{ old('password') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="password_confirmation" value="Confirm Password" />
                            <x-text-input id="password_confirmation" type="text" name="password_confirmation" class="mt-1 block w-full" value="{{ old('password_confirmation') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                        </div>
                        <div class="max-w-xl text-white">
                            <x-input-label for="status" value="Status" />
                            <select id="status" name="status" class="mt-1 block w-full text-black">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                        <x-secondary-button tag="a" href="{{ route('pemohon.index') }}">Cancel</x-secondary-button>
                        <x-primary-button name="save" value="true">Save</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>