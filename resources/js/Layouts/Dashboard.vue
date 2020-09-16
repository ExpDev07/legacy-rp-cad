<template>
    <app-layout>
        <div class="h-screen flex flex-col">
            <!-- Logo -->
            <cad-header>
                <template #left>
                    <h2 class="text-xl">
                        Betjent, {{ $page.user.name }}
                    </h2>
                </template>
                <template #right>
                    <inertia-link class="rounded bg-red-700 hover:bg-red-600 text-white px-5 py-2" href="/logout" method="post">
                        Logg ut
                    </inertia-link>
                </template>
            </cad-header>
            <!-- Slot -->
            <div class="flex-1 p-5 my-10">
                <div class="container mx-auto">
                    <slot />
                </div>
            </div>
            <!-- Footer -->
            <cad-footer />
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./App";
import CadHeader from "../Components/Header";
import CadFooter from "../Components/Footer";

export default {
    components: {
        AppLayout,
        CadFooter,
        CadHeader,
    }
}
</script>
