
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg static">
                <div class="p-5 grid grid-cols-3 gap-4 h-[580px]">
                    <div class="rounded grid gap-2 overflow-y-auto max-h-[550px]">
                        <!-- Contenido de la lista de contactos -->
                        @livewire('contactsbox')
                    </div>
                    <div id="chat-box" class="col-span-2 bg-gray-400 rounded">
                        <!-- Contenedor de mensajes con barra de desplazamiento -->
                        <div id="chat" class="rounded grid gap-4 overflow-y-auto max-h-[491px] h-[491px] relative">
                            <!-- Contenido de los mensajes -->
                            @livewire('messagebox')

                            <!-- Caja de texto para ingresar mensajes -->
                            @livewire('formbox')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

