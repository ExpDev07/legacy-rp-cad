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
            <cad-input class="block w-full mb-4" type="text" placeholder="Navn" v-model="form.name" />
            <cad-input class="block w-full mb-4" type="text" placeholder="E-post" v-model="form.email" />
            <cad-input class="block w-full mb-4" type="password" placeholder="Passord" v-model="form.password" />
            <cad-input class="block w-full mb-4" type="password" placeholder="Gjennta passord" v-model="form.confirmPassword" />

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
import CadButton from "../../Components/Button";
import CadInput from "../../Components/Input";

export default {
    layout: BasicLayout,
    components: {
        CadButton,
        CadInput,
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
