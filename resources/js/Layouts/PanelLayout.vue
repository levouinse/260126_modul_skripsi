<template>
    <div class="panel-layout" :key="$page.component">
        <header class="main-header" id="apps">
            <nav class="navbar p-0 navbar-dark navbar-expand-lg">
                <div class="menu-all w-100 d-inline-block">
                    <HeaderForAll :app_tagline="app_tagline"/>

                    <!-- Sidebar menu -->
                    <div class="w-100 bar-bottom">
                        <div class="container p-0">
                            <slot name="sidebar" />
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="col-12">
                <slot />
            </div>
        </div>
        <Transition name="fuduts">
            <div v-if="mode === 'loading'" class="loading-wrapper text-center">
                <div class="spinner-wrapper">
                    <div class="spinner-border text-light" style="width: 5rem; height: 5rem;"></div>
                </div>
            </div>
        </Transition>
        <footer style="margin-top:100px;">
            <p class="text-center default-color">Copyright © 2024 All rights
                reserved | This website is developed by <a href="" class="fw-bold default-color">Techno
                Celebes</a>
            </p>
        </footer>
    </div>
</template>

<script setup>
    import HeaderForAll from './HeaderForAll.vue';
    import '../../css/admin.css'
    import { ref, provide } from 'vue'
    // import HeaderForAll from '@/components/layout/HeaderForAll.vue'

    const mode = ref("normal")

    const setMode = (newMode) => {
        mode.value = newMode
    }

    const props = defineProps({
        app_tagline: String,
    });

    provide('layoutMode', mode)
    provide('setLayoutMode', setMode)
</script>

<style scoped>
.admin-layout {
    min-height: 100vh;
    background: #f8fafc;
}

.main-content {
    padding: 30px 0;
    min-height: calc(100vh - 160px);
}

/* Responsive */
@media (max-width: 768px) {
    .main-content {
        padding: 20px 0;
    }
}
</style>