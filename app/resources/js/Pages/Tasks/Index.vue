<template>
    <Header />
        <div className="flex flex-col min-h-screen overflow-hidden bg-slate-900">
            
            <main class="grow mx-32 pt-32 mb-12">
                <h1 class="text-6xl font-serif text-slate-300 mb-22">Tasks</h1>
                <h1 class="text-2xl font-mono text-slate-300 mb-22">Total Points: {{ $page.props.auth.user.points }}</h1>
                <div v-if="message" class="bg-slate-200 p-3 rounded-md mt-4">
                    {{ message }}
                </div>
                <div v-if="flashSuccess">
                    <Banner type="success" :open="flashSuccess ? 'true' : 'false'" @close-event="handleCloseEvent">
                        {{ flashSuccess }}
                    </Banner>  
                </div>

                <div v-if="flashError">
                    <Banner type="error" :open="flashError ? 'true' : 'false'" @close-event="handleCloseEvent">
                        {{ flashError }}
                    </Banner>
                </div>
                <div class="pt-12">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <div v-for="task in tasks">
                            <div v-if="task.is_active != 0 ? true : false">
                                <TaskCard :key="task.id" :taskName="task.name" :taskDescription="task.description" :taskId="task.id" />
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <!-- Site footer -->
            <Footer />
            
        </div>
</template>

<script setup>
import Header from '@/partials/Header.vue'
import Footer from '@/partials/Footer.vue'
import TaskCard from '@/Pages/Tasks/TaskCard.vue';
import Banner from '@/Components/Banner.vue';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    tasks: Array,
    message: String,
});

const page = usePage()

const flashSuccess = computed(
  () => page.props.flash.success,
)

const flashError = computed(
  () => page.props.flash.error,
)

const handleCloseEvent = () => {
    page.props.flash.success = null;
    page.props.flash.error = null;
}
</script>
