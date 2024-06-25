{{-- <div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg static">
            <div class="p-5 grid grid-cols-3 gap-4 h-[580px]">
                <div class="rounded grid gap-2 overflow-y-auto max-h-[550px]">

                    @livewire('contactsbox')

                </div>
                <div id="chat-box" class="col-span-2 bg-gray-400 rounded">
                    <div id="chat" class="rounded grid gap-4 overflow-y-auto max-h-[491px] h-[250px]">
                        @livewire('messagebox')
                    </div>
                        
                    @livewire('formbox')
                    
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="mx-auto h-[900px]">
        <div class="grid grid-cols-3 ">
            <!-- Columna de contactos -->
            <div class="col-span-1 bg-gray-500 rounded border-r border-gray-200 overflow-y-auto">
                <div class="p-4">
                    @livewire('contactsbox')
                </div>
            </div>

            <!-- Columna de mensajes y formulario -->
            <div class="col-span-2 flex flex-col">
                <!-- Área de mensajes -->
                <div class="flex-1 bg-gray-200 p-4 overflow-hidden">
                  
                        @livewire('messagebox')
            
                        @livewire('formbox')

                </div>
            </div>
        </div>
    </div>
