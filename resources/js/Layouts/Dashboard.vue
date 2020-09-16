<template>
    <app-layout>
        <div class="h-screen flex flex-col">
            <!-- Logo -->
            <cad-header />
            <!-- Slot -->
            <div class="flex-1 p-5">
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
import CadHeader from "../components/Header";
import CadFooter from "../components/Footer";

export default {
    components: {
        AppLayout,
        CadFooter,
        CadHeader,
    }
}
</script>
