import { createRouter, createWebHistory } from 'vue-router'

import HomePage from '../pages/home/index.vue'
import ServicesPage from '../pages/services/index.vue'
import AboutUsPage from '../pages/aboutus/index.vue'
import BlogsPage from '../pages/blogs/index.vue'
import ContactUs from '../pages/contactus/index.vue'
import PortfolioPage from '../pages/portfolio/index.vue'
import PricingPage from '../pages/pricing/index.vue'
import CareersPage from '../pages/careers/index.vue'

const routes = [
  {
    path: '/',
    children: [
      { path: '', name: 'Home', component: HomePage },
      { path: 'services', name: 'Services', component: ServicesPage },
      { path: 'about', name: 'AboutUs', component: AboutUsPage },
      { path: 'blogs', name: 'BlogsPage', component: BlogsPage },
      { path: 'contact', name: 'ContactUs', component: ContactUs },
      { path: 'portfolio', name: 'Portfolio', component: PortfolioPage },
      { path: 'pricing', name: 'Pricing', component: PricingPage },
      { path: 'careers', name: 'Careers', component: CareersPage }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    // This ensures scrolling to the top of the page on route change
    return { top: 0 }
  }
})

export default router
