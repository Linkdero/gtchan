<template>
    <div>
        <h1>Temas</h1>
        <ul>
            <li v-for="tema in temas" :key="tema.id">{{ tema.nombre }}</li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            temas: []
        };
    },
    created() {
        const slug = this.$route.params.slug;
        axios.get(`/api/categorias/${slug}/temas`)
            .then(response => {
                this.temas = response.data;
                console.log(this.temas)
            });
    }
};
</script>
