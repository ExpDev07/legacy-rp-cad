<template>
    <div>
        <h1 class="text-3xl mb-6">
            Velkommen, {{ $page.user.name }}!
        </h1>
    </div>
</template>

<script>
import DashboardLayout from "../Layouts/Dashboard";

export default {
    layout: DashboardLayout,
}
</script>
