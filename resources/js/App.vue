<template>
    <div id="gtchan">
        <Sidebar />
        <router-view></router-view>
        <Navbar />

        <Footer />
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import Sidebar from './components/Sidebar.vue';

export default {
    name: 'App',
    components: {
        Navbar,
        Footer,
        Sidebar
    }
}
</script>

<style>
/* Estilos globales */
</style>
