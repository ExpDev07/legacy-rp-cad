<template>
    <div class="text-center">
        <cad-button class="px-10 mb-5" type="link" href="/">
            <fa-icon class="mr-2" icon="home" /> Dashboard
        </cad-button>
        <cad-button class="px-10 mb-5" type="link" href="/arrest-reports/create">
            <fa-icon class="mr-2" icon="door-closed" /> Ny Arrestrapport
        </cad-button>
        <cad-button class="px-10 mb-5" type="link" href="/fine-reports/create">
            <fa-icon class="mr-2" icon="scroll" /> Ny Botrapport
        </cad-button>
        <cad-button class="px-10 mb-5" type="link" href="/">
            <fa-icon class="mr-2" icon="search" /> Personsøk & Bilsøk
        </cad-button>
        <cad-button class="px-10 mb-5" type="link" href="/">
            <fa-icon class="mr-2" icon="gavel" /> Straffeloven
        </cad-button>
        <cad-button class="px-10 mb-5" type="link" href="/">
            <fa-icon class="mr-2" icon="sticky-note" /> 10-koder
        </cad-button>
    </div>
</template>

<script>
import CadButton from "./Button";

export default {
    components: {
        CadButton,
    }
}
</script>
