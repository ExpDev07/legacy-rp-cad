<template>
    <input class="rounded bg-gray-100 text-black px-4 py-3" ref="input" :type="type" @input="$emit('input', $event.target.value)" v-else>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: 'text',
        }
    },
    methods: {
        focus() {
            this.$refs.input.focus();
        }
    }
}
</script>
