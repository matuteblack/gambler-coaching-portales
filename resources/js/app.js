import './bootstrap';

// TODO: Agregado por chatgpt
require('./bootstrap');

import { createApp } from 'vue';

// Importa tus componentes de Vue aquí
import ExampleComponent from './components/ExampleComponent.vue';

const app = createApp({});

// Registra tus componentes de Vue
app.component('example-component', ExampleComponent);

// Monta la instancia de Vue en el DOM
app.mount('#app');