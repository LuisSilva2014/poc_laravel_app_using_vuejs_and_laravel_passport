require('./bootstrap');
window.Vue = require('vue');
import routes from './router'

Vue.component('mainapp', require('./components/MainAppComponent.vue').default);
// import mainAppComponent from './components/MainAppComponent'

Vue.config.productionTip = false

const app = new Vue({
    el: '#app',
    routes,
    // render: h => h(mainAppComponent)
});

// new Vue({
//     router,
//     render: h => h(Dashboard)
//   }).$mount('#app')
