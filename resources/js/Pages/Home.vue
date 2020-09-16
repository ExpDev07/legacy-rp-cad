<template>
    <div>
        <h1 class="text-3xl mb-6">
            Velkommen, {{ $page.user.name }}!
        </h1>

        <inertia-link class="bg-red-700 text-white px-3 py-2" href="/logout" method="post">
            Logout
        </inertia-link>
    </div>
</template>

<script>
import DashboardLayout from "../Layouts/Dashboard";

export default {
    layout: DashboardLayout,
}
</script>
