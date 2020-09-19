<template>
    <div>
        <!-- Title and description -->
        <div class="mb-10">
            <h1 class="text-yellow-600 font-bold text-3xl mb-6">
                Velkommen, {{ $page.user.name }}!
            </h1>
            <p class="text-lg">
                Vennligst bruk navigasjonen til venstre. Dashboard er forsatt under arbeid.
            </p>
        </div>
    </div>
</template>

<script>
import DashboardLayout from "../Layouts/Dashboard";

export default {
    layout: DashboardLayout,
}
</script>
