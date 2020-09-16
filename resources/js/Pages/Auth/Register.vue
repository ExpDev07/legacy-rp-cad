<template>
    <div>
        <div class="mb-8">
            <h1 class="text-4xl font-bold mb-5">
                Registrer bruker
            </h1>

            <p class="text-lg">
                Opprett en ny bruker.
            </p>
        </div>

        <form @submit.prevent="register()" class="mb-6">
            <input class="block w-full rounded text-black px-4 py-3 mb-4" type="text" placeholder="Navn" v-model="form.name" />
            <input class="block w-full rounded text-black px-4 py-3 mb-4" type="text" placeholder="E-post" v-model="form.email" />
            <input class="block w-full rounded text-black px-4 py-3 mb-4" type="password" placeholder="Passord" v-model="form.password" />
            <input class="block w-full rounded text-black px-4 py-3 mb-4" type="password" placeholder="Gjennta passord" v-model="form.confirmPassword" />

            <cad-button type="submit">
                Opprett bruker
            </cad-button>
        </form>

        <p>
            Har du allerede en bruker? <inertia-link class="text-yellow-400" href="/login">Logg inn</inertia-link>.
        </p>
    </div>
</template>

<script>
import BasicLayout from "../../Layouts/Basic";
import CadButton from "../../components/Button";

export default {
    layout: BasicLayout,
    components: {
        CadButton,
    },
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                confirmPassword: '',
            }
        }
    },
    methods: {
        async register() {
            await this.$inertia.post('/users', this.form);
        }
    }
}
</script>
