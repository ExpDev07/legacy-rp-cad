<template>
    <div>
        <div class="mb-12">
            <h1 class="font-bold text-4xl mb-6">
                {{ title }}
            </h1>
            <p class="text-xl">
                {{ description }}
            </p>
        </div>

        <inertia-link class="rounded bg-yellow-600 text-black px-10 py-3" href="/">
            Gå til hjemsiden
        </inertia-link>
    </div>
</template>

<script>
import BasicLayout from "../Layouts/Basic";

export default {
    layout: BasicLayout,
    props: {
        status: Number,
    },
    computed: {
        title() {
            return {
                503: '503: Service Unavailable',
                500: '500: Server Error',
                404: '404: Page Not Found',
                403: '403: Forbidden',
            }[this.status]
        },
        description() {
            return {
                503: 'Sorry, we are doing some maintenance. Please check back soon.',
                500: 'Whoops, something went wrong on our servers.',
                404: 'Sorry, the page you are looking for could not be found.',
                403: 'Sorry, you are forbidden from accessing this page.',
            }[this.status]
        },
    },
}
</script>
