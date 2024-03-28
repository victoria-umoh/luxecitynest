<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input wire:model="phone" id="phone" class="block mt-1 w-full" type="text" name="phone" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        {{-- <div class="mt-4">
            <div class="col-8">
                <x-label for="country_code" value="{{ __('Country Code') }}" />
                <div class="input-group">
                    <select name="country_code" id="country_code" class="form-control" wire:model="country_code">
                        <option value="+234">+234</option>
                    </select>
                    <x-input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" wire:model="phone" />
                </div>
                @error('phone') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div> --}}

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="row role-radio mb-5 mt-4">
            <div class="col-md-3  ">
                <input type="radio" class="btn-check" name="role" id="buy" autocomplete="off" value="user" checked>
                <label class="btn  role-selection" for="buy">User</label>
            </div>
            <div class="col-md-3 ">
                <input type="radio" class="btn-check" name="role" id="rent"  value="lad" autocomplete="off">
                <label class="btn role-selection" for="rent">Landlord</label>
            </div>
            <div class="col-md-3 ">
                <input type="radio" class="btn-check" name="role" id="shortlet" value="lad" autocomplete="off" >
                <label class="btn role-selection" for="shortlet">Agent</label>
            </div>
            <div class="col-md-3 ">
                <input type="radio" class="btn-check" name="role" id="land" value="lad" autocomplete="off">
                <label class="btn role-selection" for="land">Developer</label>
            </div>
            <div class="col-md-3" >
                <input type="radio" class="btn-check" name="role" id="admin" value="admin" autocomplete="off" />
                <label class="btn role-selection" for="land">Admin</label>
            </div>
            <div class="col mt-5">
                <p class="bold-purple">By clicking on "Register" you confirm that you agree to our website <a href="" class="link">Terms of use</a></p>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
