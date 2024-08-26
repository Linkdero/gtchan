import {
    createRouter,
    createWebHistory
} from 'vue-router';
import Home from '../views/Home.vue';
import About from '../views/About.vue';
import Contact from '../views/Contact.vue';
import Posts from '../views/Posts.vue';
import Temas from '../views/Temas.vue';
// import CategoriaPosts from '../views/CategoriaPosts.vue';

const routes = [{
        path: '/',
        component: Home,
        meta: {
            title: 'Home'
        }
    },
    {
        path: '/about',
        component: About,
        meta: {
            title: 'About'
        }
    },
    {
        path: '/contact',
        component: Contact,
        meta: {
            title: 'Contact'
        }
    },
    {
        path: '/categorias/:slug/temas',
        component: Temas,
        meta: {
            title: 'Temas'
        }
    },
    {
        path: '/temas/:slug/posts',
        component: Posts,
        meta: {
            title: 'Posts'
        }
    },

    // Más rutas aquí
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
