<template>
    <button :type="type" class="button block w-full rounded px-4 py-3">
        <slot />
    </button>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: 'submit',
        },
    }
}
</script>

<style>
.button {
    background-color: #FFDA00;
    color: black;
}
</style>
