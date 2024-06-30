<div>
    <x-v1.dropdown>
        <x-slot name="openBtn">Abrir modal</x-slot>
        <x-v1.dropdown-item itemText="Perfil" />
        <x-v1.dropdown-submenu-item subMenuText="Ajustes">
            <x-slot name="subItems">
                <x-v1.dropdown-item itemText="Cuenta" />
                <x-v1.dropdown-item itemText="Envios" />
            </x-slot>
        </x-v1.dropdown-submenu-item>
    </x-v1.dropdown>
</div>
