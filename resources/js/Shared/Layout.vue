<script>
import Navbar from "./Navbar.vue";
import Sidebar from "./Sidebar.vue";
import Footer from "./Footer.vue";
import {Head} from "@inertiajs/vue3";

export default {
    components: {Head, Footer, Sidebar, Navbar},
    props:{
        title: String
    },
    mounted() {
        const githubButton = document.createElement("script");
        githubButton.setAttribute(
            "src",
            "https://buttons.github.io/buttons.js"
        );
        document.head.appendChild(githubButton);

        const demo = document.createElement("script");
        demo.setAttribute(
            "src",
            "https://demo.themesberg.com/windster/app.bundle.js"
        );
        document.head.appendChild(demo);
    },
}
</script>


<template>

    <Head>
        <title>{{title??"SD Negeri 2 Selakau"}}</title>
    </Head>

    <!-- This is an example component -->
    <div>
        <Navbar></Navbar>
        <div class="flex overflow-hidden bg-white pt-16">
            <Sidebar></Sidebar>
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <slot></slot>
                </main>
                <Footer></Footer>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
