import "../css/app.css"
import {createApp, h} from 'vue';
import {createInertiaApp, Link} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import Layout from "./Shared/Layout.vue";
import "@fortawesome/fontawesome-free";
import dateFormatter from "./Plugins/DateFormatter.js";

createInertiaApp({
    progress: {
        color: '#29d',

        // Whether the NProgress spinner will be shown...
        showSpinner: true,
    },
    resolve: name => {
        let page = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));
        page.then((module) => {
            if (module.default.layout === undefined) {
                module.default.layout = Layout;
            }
        });

        return page;
    },
    // resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .mixin({methods: {route}})
            .use(plugin)
            .use(dateFormatter)
            .component("Link", Link)
            .mount(el)
    },
});
