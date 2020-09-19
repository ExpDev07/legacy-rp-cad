<template>
    <div>
        <!-- Title and description -->
        <div class="mb-10">
            <h1 class="text-yellow-600 font-bold text-3xl mb-6">
                Lag en arrestrapport
            </h1>
            <p class="text-lg">
                Fyll inn feltene nedenfor for å lage en arrestrapport.
            </p>
        </div>

        <!-- Character selection -->
        <div class="mb-12">
            <cad-search-character v-model="character" />
        </div>

        <p v-if="character" class="mb-10">
            Du har valgt {{ character.first_name }} {{ character.last_name }}
        </p>

        <!-- Form -->
        <form @submit.prevent="submit()">
            <!-- Location -->
            <div class="mb-10">
                <cad-input type="text" placeholder="Sted" v-model="form.location" />
            </div>

            <!-- Notes -->
            <div class="mb-10">
                <cad-input type="textarea" v-model="form.notes" />
            </div>

            <!-- Submit -->
            <cad-button type="submit">
                Send arrestrapport
            </cad-button>
        </form>
    </div>
</template>

<script>
import DashboardLayout from "../../Layouts/Dashboard";
import CadButton from "../../Components/Button";
import CadInput from "../../Components/Input";
import CadSearchCharacter from "../../Components/SearchCharacter";

export default {
    layout: DashboardLayout,
    components: {
        CadButton,
        CadInput,
        CadSearchCharacter,
    },
    data() {
        return {
            character: null,
            form: {
                character_id: null,
                location: null,
                notes: null,
            },
        }
    },
    methods: {
        async submit() {
            await this.$inertia.post('/arrest-reports', {
                ...this.form, character_id: this.character.character_id,
            });
        }
    },
}
</script>
