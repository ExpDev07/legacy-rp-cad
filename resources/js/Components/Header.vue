<template>
    <div class="bg-black bg-opacity-50 flex items-center justify-between px-12 py-6">
        <!-- Left -->
        <div class="flex justify-start flex-1">
            <slot name="left" />
        </div>

        <!-- Logo -->
        <div class="flex justify-center flex-1">
            <inertia-link href="/">
                <img class="block h-24" src="/images/logo.png" alt="Logo">
            </inertia-link>
        </div>

        <!-- Right -->
        <div class="flex justify-end flex-1">
            <slot name="right" />
        </div>
    </div>
</template>
