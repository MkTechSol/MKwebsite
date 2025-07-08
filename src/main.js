import { createApp } from 'vue'
import PrimeVue from 'primevue/config';
import Aura from '@primeuix/themes/aura';
import App from './App.vue'
import router from './router/index.js'
import './assets/tailwind.css'
import 'primeicons/primeicons.css'
import Dialog from 'primevue/dialog'

// Global Components Imports
import Header from './components/UI/Header.vue'
import Footer from './components/UI/Footer.vue'
import BaseButton from './components/UI/BaseButton.vue'
import BaseLinkButton from './components/UI/BaseLinkButton.vue'
import OurProcess from './components/UI/OurProcess.vue';
import OurServices from './components/UI/OurServices.vue';
import AppPublishing from './components/UI/AppPublishing.vue';
import HeroSection from './components/UI/HeroSection.vue'
import AboutUs from './components/UI/AboutUs.vue'
import ServiceCard from './components/UI/ServiceCard.vue';
import PortfolioSection from './components/UI/PortfolioSection.vue';

const app = createApp(App)

// Registering Global Components
app.component('Header', Header)
app.component('Footer', Footer)
app.component('BaseButton', BaseButton)
app.component('BaseLinkButton', BaseLinkButton)
app.component('Dialog', Dialog) 
app.component('OurProcess', OurProcess)
app.component('OurServices', OurServices)
app.component('AppPublishing', AppPublishing)
app.component('HeroSection', HeroSection)
app.component('AboutUs', AboutUs)
app.component('ServiceCard', ServiceCard)



app.use(PrimeVue, {
    theme: {
        preset: Aura
    }
});
app.use(router)

app.mount('#app')
