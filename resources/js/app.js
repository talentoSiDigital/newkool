import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';



/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import {
    faMagnifyingGlass,
    faAngleDown,
    faIndustry,
    faHandshake,
    faAward,
    faHandsHoldingCircle,
    faCircleCheck,
    faEnvelope,
    faPhone,
    faLocationDot,
    faXmark,
    faAnglesDown,
    faBackward,
    faCaretLeft,
    faCaretRight,
    faArrowLeft,
    faArrowRight,

} from '@fortawesome/free-solid-svg-icons'
import { faFacebookF, faInstagram, faXTwitter, faWhatsapp,faPinterest  } from '@fortawesome/free-brands-svg-icons'


library.add(
    faMagnifyingGlass,
    faFacebookF,
    faInstagram,
    faAngleDown,
    faIndustry,
    faHandshake,
    faAward,
    faHandsHoldingCircle,
    faCircleCheck,
    faEnvelope,
    faPhone,
    faLocationDot,
    faXTwitter,
    faXmark,
    faWhatsapp,
    faAnglesDown,
    faBackward,
    faCaretLeft,
    faCaretRight,
    faArrowLeft,
    faArrowRight, faPinterest
)


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
