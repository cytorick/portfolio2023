<form wire:submit.prevent="sendmail" class="space-y-6" enctype="multipart/form-data">
    @csrf
    {{-- BASIC DETAILS --}}
    <div>
        {{-- CONTENT PANEL --}}
        <div class="px-4 py-5 sm:px-6 space-y-4">

            <div class="grid grid-cols-10 gap-5">
                <div class="col-span-10 md:col-span-5">
                    <x-input.group stacked for="name" label="{{ __('Naam*') }}"
                                   :error="$errors->first('name')">
                        <x-input.text id="name" wire:model.lazy="name"
                                      :error="$errors->first('name')"/>
                    </x-input.group>
                </div>

                <div class="col-span-10 md:col-span-5">
                    <x-input.group stacked for="email" label="{{ __('Email*') }}"
                                   :error="$errors->first('email')">
                        <x-input.text id="email" wire:model.lazy="email"
                                      :error="$errors->first('email')"/>
                    </x-input.group>
                </div>

            <div class="col-span-10 md:col-span-5">
                <x-input.group stacked for="phone" label="{{ __('Telefoon') }}"
                               :error="$errors->first('phone')">
                    <x-input.text id="phone" wire:model.lazy="phone"
                                  :error="$errors->first('phone')"/>
                </x-input.group>
            </div>
            <div class="col-span-10 md:col-span-5">
                <x-input.group stacked for="company" label="{{ __('Bedrijf') }}"
                               :error="$errors->first('company')">
                    <x-input.text id="company" wire:model.lazy="company"
                                  :error="$errors->first('company')"/>
                </x-input.group>
            </div>

                <div class="col-span-10">
                    <x-input.group stacked for="subject" label="{{ __('Onderwerp/Vraag*') }}"
                                   :error="$errors->first('subject')">
                        <x-input.text id="subject" wire:model.lazy="subject"
                                      :error="$errors->first('subject')"/>
                    </x-input.group>
                </div>

                <div class="col-span-10">
                    <x-input.group stacked for="message" label="{{ __('Bericht*') }}"
                                   :error="$errors->first('message')">
                        <x-input.textarea rows="10" id="message" wire:model.lazy="message"
                                          :error="$errors->first('message')"/>
                    </x-input.group>
                </div>
            </div>
        </div>
    </div>


    {{-- FORM TOOLS --}}
    <div class="mt-6">
        <div class="text-right">
            <x-button.submit disabled wire:loading>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin mr-2 h5 w-5 inline">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
                {{__('Versturen')}}
            </x-button.submit>
            <x-button.submit wire:loading.class="hidden">
                {{__('Verstuur')}}
            </x-button.submit>
        </div>
    </div>

</form>
