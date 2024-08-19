<template>
    <nav aria-label="breadcrumb">>
        <ol class="breadcrumb">
            <li v-for="(crumb, index) in breadcrumbs" :key="index" class="breadcrumb-item">
                <router-link :to="crumb.path">{{ crumb.name }}</router-link>
            </li>
        </ol>
    </nav>
</template>

<script>
import { computed } from 'vue'; // Importar computed
import { useRoute } from 'vue-router';

export default {
    name: 'Breadcrumb',
    setup() {
        const route = useRoute();
        const breadcrumbs = computed(() => {
            const routes = route.matched;
            return routes.map(route => ({
                name: route.meta.title || 'Home',
                path: route.path
            }));
        });

        return { breadcrumbs };
    }
}
</script>

<style scoped>
/* Estilos específicos para el breadcrumb */
</style>
