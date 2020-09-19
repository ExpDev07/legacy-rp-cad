<template>
    <div>
        <form class="flex items-center" @submit.prevent="search()">
            <!-- Inputs -->
            <cad-input class="flex-1 mr-5" placeholder="Fornavn" v-model="form.first_name" />
            <cad-input class="flex-1 mr-5" placeholder="Etternavn" v-model="form.last_name" />

            <!-- Submit -->
            <cad-button class="mr-5" type="submit" :disabled="isLoading">
                <fa-icon class="text-xl" icon="cog" spin v-if="isLoading" />
                <fa-icon class="text-xl" icon="search" v-else />
            </cad-button>
        </form>

        <!-- Modal for showing search results -->
        <cad-modal :show="showModal">
            <!-- Header -->
            <template #header>
                <h1 class="text-3xl font-bold text-yellow-600 mb-4">
                    Velg person
                </h1>
                <p>
                    Søket ditt ga disse personene. Velg en for å gå videre.
                </p>
            </template>
            <!-- Table -->
            <table class="min-w-full">
                <!-- Head -->
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-600 text-yellow-600 text-left text-sm">
                            Person Nr.
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-600 text-yellow-600 text-left text-sm">
                            Fornavn
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-600 text-yellow-600 text-left text-sm">
                            Etternavn
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-600 text-yellow-600 text-left text-sm">
                            Kjønn
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-600 text-yellow-600 text-left text-sm">
                            Fødselsdato
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-600">

                        </th>
                    </tr>
                </thead>
                <!-- Body -->
                <tbody>
                    <tr v-for="character in characters" :key="character.character_id">
                        <td class="px-6 py-3 border-b border-gray-600">
                            {{ character.character_id }}
                        </td>
                        <td class="px-6 py-3 border-b border-gray-600">
                            {{ character.first_name }}
                        </td>
                        <td class="px-6 py-3 border-b border-gray-600">
                            {{ character.last_name }}
                        </td>
                        <td class="px-6 py-3 border-b border-gray-600">
                            {{ character.gender }}
                        </td>
                        <td class="px-6 py-3 border-b border-gray-600">
                            {{ character.date_of_birth }}
                        </td>
                        <td class="px-6 py-3 border-b border-gray-600">
                            <button type="button" class="rounded bg-blue-600 px-3 py-2" @click="selectCharacter(character)">
                                <fa-icon icon="check-circle" />
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Footer -->
            <template #footer>
                <button type="button" class="rounded bg-red-600 px-6 py-2" @click="showModal = false">
                    <fa-icon class="mr-2" icon="window-close" /> Lukk
                </button>
            </template>
        </cad-modal>
    </div>
</template>

<script>
import CadButton from "./Button";
import CadInput from "./Input";
import CadModal from "./Modal";

export default {
    components: {
        CadButton,
        CadInput,
        CadModal,
    },
    data() {
        return {
            form: {
                first_name: null,
                last_name: null,
            },
            character: null,
            characters: [],
            isLoading: false,
            showModal: false,
        }
    },
    methods: {
        async search() {
            // Set loading.
            this.isLoading = true;

            try {
                // Send request.
                const response = await axios.get('/api/characters', {
                    responseType: 'json',
                    params: this.form,
                });

                // Set characters.
                this.characters = response.data.data;

                // Select character directly if only returned 1 or show modal otherwise.
                if (this.characters.length === 1) {
                    this.selectCharacter(this.characters[0]);
                } else {
                    this.showModal = true;
                }
            }
            catch {}

            // Set loading.
            this.isLoading = false;
        },
        selectCharacter(character) {
            // Set character and emit input.
            this.character = character;
            this.$emit('input', this.character);

            // Close modal.
            this.showModal = false;
        }
    }
}
</script>

<style>

</style>
