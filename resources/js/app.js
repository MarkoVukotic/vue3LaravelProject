import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';
import PostsIndex from './components/Posts/Index.vue'

import LaravelVuePagination from "laravel-vue-pagination";

const app = createApp({})
app.component('posts-index', PostsIndex)
app.component('Pagination' , LaravelVuePagination)
app.mount('#app')
