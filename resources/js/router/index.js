import {
    createRouter,
    createWebHistory
} from 'vue-router';
import Home from '../views/Home.vue';
import About from '../views/About.vue';
import Contact from '../views/Contact.vue';

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
    // Más rutas aquí
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
