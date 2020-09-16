<template>
    <button :type="type" class="bg-yellow-600 hover:bg-yellow-400 text-black block w-full rounded px-4 py-3">
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
