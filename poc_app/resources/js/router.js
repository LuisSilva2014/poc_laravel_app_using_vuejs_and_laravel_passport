import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import exampleComponent from './components/pages/ExampleComponent'
import playerComponent from './components/pages/PlayerComponent'
import playerTriviaComponent from './components/pages/PlayerTriviaComponent'
import mainAppComponent from './components/MainAppComponent'

const routes = [
    {
        path : '/',
        component : mainAppComponent,
    },
    {
        path : '/example',
        component : exampleComponent,
    },
    {
        path : '/player',
        component : playerComponent,
    },
    {
        path : '/player-trivia',
        component : playerTriviaComponent,
    }

]
export default new Router({
    mode: 'history', //This will user just the route of the browser utl
    routes
})
