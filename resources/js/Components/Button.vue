<template>
    <inertia-link :href="href" :class="this.class" v-if="type === 'link'">
        <slot />
    </inertia-link>
    <button :type="type" :class="this.class" v-else>
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
        href: {
            type: String,
            default: '/',
        }
    },
    data() {
        return {
            class: 'block bg-yellow-600 duration-200 text-black text-center rounded px-4 py-3',
        }
    },
}
</script>
