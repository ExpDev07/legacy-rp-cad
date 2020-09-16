<template>
    <app-layout>
        <div class="h-screen flex flex-col">
            <!-- Logo -->
            <cad-header />
            <!-- Slot -->
            <div class="flex-1 flex items-center justify-center text-center">
                <div class="container mx-auto max-w-lg px-5 py-12">
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
