<div class="basis-1/6 shadow-sm" style="background:#eee; border-right:1px solid #ccc; height:100vh;"> 
    <ul class="p-3 mt-10">
        <li>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
        </li>
        <li>
    <x-nav-link :href="route('contacts')" :active="request()->routeIs('contacts')">
        {{ __('Contacts') }}
    </x-nav-link>
        </li>
        <li>
            <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.index')">
                {{ __('Companies') }}
            </x-nav-link>
                </li>
        <li>
    <x-nav-link :href="route('deals.index')" :active="request()->routeIs('deals.index')">
        {{ __('Deals') }}
    </x-nav-link>
        </li>

        <li>
            <x-nav-link :href="route('contracts')" :active="request()->routeIs('contracts')">
                {{ __('Contracts') }}
            </x-nav-link>
                </li>
    </ul>
</div>