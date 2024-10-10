<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-7">
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 d-flex justify-content-between">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5">
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 d-flex justify-content-between">
                            {{-- {{ __("You're logged in!") }} --}}
                            <div class="ms-3">
                                <p class="font-bold">{{ __('Order Creator') }}</p>
                                <span>{{ __('Ali') }}</span>
                            </div>
                            <div class="ms-3">
                                <p class="font-bold">{{ __('Order Shop') }}</p>
                                <span>{{ __('Nagaf') }}</span>
                            </div>
                            <x-secondary-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'shop-menu')"
                            >{{ __('Menu') }}</x-secondary-button>
                            <x-modal name="shop-menu" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <table class="table table-striped p-3 m-3">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </x-modal>
                            <a href="#">
                                <x-primary-button class="ms-3">
                                    {{ __('Join This Order') }}
                                </x-primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 d-flex justify-content-between">
                            {{-- {{ __("You're logged in!") }} --}}
                            <div class="ms-3">
                                <p class="font-bold">{{ __('Order Creator') }}</p>
                                <span>{{ __('Ali') }}</span>
                            </div>
                            <div class="ms-3">
                                <p class="font-bold">{{ __('Order Shop') }}</p>
                                <span>{{ __('Nagaf') }}</span>
                            </div>
                            <x-secondary-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'shop-menu')"
                            >{{ __('Menu') }}</x-secondary-button>
                            <x-modal name="shop-menu" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <table class="table table-striped p-3 m-3">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </x-modal>
                            <a href="#">
                                <x-primary-button class="ms-3">
                                    {{ __('Join This Order') }}
                                </x-primary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
