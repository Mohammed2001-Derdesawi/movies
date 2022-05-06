/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
 import ViewUI from 'view-design';
  import 'view-design/dist/styles/iview.css';
  Vue.use(ViewUI);
//  require('view-design/dist/styles/iview.css');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('signin-component', require('./components/auth/SigninComponent.vue').default);
Vue.component('signup-component', require('./components/auth/SignupComponent.vue').default);
Vue.component('forgetpassword-component', require('./components/auth/ForgetpasswordComponent.vue').default);
Vue.component('resetpassword-component', require('./components/auth/ResetpasswordComponent.vue').default);
Vue.component('reviews-component', require('./components/reviews/ReviewsComponent').default);
Vue.component('modalviewreview-component', require('./components/reviews/ModalviewreviewComponent').default);
Vue.component('modaldeletereview-component', require('./components/reviews/ModaldeletereviewComponent').default);
Vue.component('paginationreview-component', require('./components/reviews/PaginationreviewComponent').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

