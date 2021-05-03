import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'hash',
    base: '/',
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('App/views/TheHome'),
        },
        {
            path: '/activities',
            name: 'activities',
            component: () => import('App/views/TheActivities'),
        },
    ],
});

export default router;
