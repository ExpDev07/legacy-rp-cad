<template>
    <input class="rounded bg-gray-100 text-black px-4 py-3" ref="input" @input="$emit('input', $event.target.value)">
</template>

<script>
export default {
    methods: {
        focus() {
            this.$refs.input.focus();
        }
    }
}
</script>
