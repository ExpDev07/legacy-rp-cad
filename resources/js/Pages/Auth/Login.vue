<template>
    <div>
        <div class="mb-8">
            <h1 class="text-4xl font-bold mb-5">
                Vennligst logg inn
            </h1>

            <p class="text-lg">
                Logg inn med din e-post addresse og passord.
            </p>
        </div>

        <form @submit.prevent="login()" class="mb-6">
            <cad-input class="block w-full mb-4" type="text" placeholder="E-post" v-model="form.email" />
            <cad-input class="block w-full mb-4" type="password" placeholder="Passord" v-model="form.password" />

            <cad-button type="submit">
                Login
            </cad-button>
        </form>

        <p>
            Har du ikke bruker? <inertia-link class="text-yellow-400" href="/register">Opprett en</inertia-link>.
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
                email: '',
                password: '',
            }
        }
    },
    methods: {
        async login() {
            await this.$inertia.post('/login', this.form);
        }
    }
}
</script>
</script>
