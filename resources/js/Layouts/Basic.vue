<template>
    <app-layout>
        <div class="h-screen flex flex-col">
            <!-- Logo -->
            <cad-header />
            <!-- Slot -->
            <div class="flex-1 flex items-center justify-center text-center p-5">
                <div class="container mx-auto max-w-lg">
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
