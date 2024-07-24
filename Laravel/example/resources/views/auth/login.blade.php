<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

<form method="POST" action="/dashboard/example/public/login">
    <!--This will expand to hidden input when inspecting -->
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
  
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          
          <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email" :value="old('email')" required/> {{-- the old method is used to keep the old email submitted when logging in does not work --}}
              <x-form-error name="email"></x-form-error>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" required/>
              <x-form-error name="password"></x-form-error>
            </div>
          </x-form-field>

      </div>
    </div>
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/dashbord/example/public/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <x-form-button>Log In</x-form-button>
    </div>
  </form>
  
</x-layout>