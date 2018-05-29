import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: ':slug',
            name: 'lesson',
            component: require('./views/Lesson'),
            props: true
        },
        {
            path: '*',
            component: require('./views/404')
        }
    ],
    linkExactActiveClass: 'active',
    mode: 'history',
    scrollBehavior(){
        return {x:0, y:0}
    }
});
