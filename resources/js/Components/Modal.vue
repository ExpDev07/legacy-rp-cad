<template>
    <!-- Wrapper -->
    <div class="absolute md:p-20 z-10 top-0 bottom-0 right-0 left-0 w-full h-full bg-black bg-opacity-75" v-if="show">
        <!-- Content -->
        <div class="px-10 py-8 mx-auto rounded max-w-5xl max-h-full bg-gray-800 overflow-y-auto">
            <!-- Header -->
            <header class="mb-8">
                <slot name="header" />
            </header>
            <!-- Body -->
            <main class="mb-10">
                <slot />
            </main>
            <!-- Footer -->
            <footer class="mb-5">
                <slot name="footer" />
            </footer>
        </div>
    </div>
</template>

<script>
import CadButton from "./Button";

export default {
    components: {
        CadButton,
    },
    props: {
        show: {
            type: Boolean,
            default: false,
        },
    },
    watch: {
        show: function (value) {
            // Overflow on body depending on whether modal is open.
            if (value) {
                $('body').addClass('overflow-hidden');
            } else {
                $('body').removeClass('overflow-hidden');
            }
        },
    }
}
</script>
