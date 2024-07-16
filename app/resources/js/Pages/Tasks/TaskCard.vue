<template>
    <div class="bg-slate-200 p-3 rounded-md">
        <h2 class="text-2xl text-bold">{{ taskName }}</h2>
        <p>{{ taskDescription }}</p>
        <form @submit.prevent="submitFlag">
            <input class="rounded-md" type="text" v-model="form.flag" placeholder="Enter flag" />
            <button class="border-2 bg-slate-900 p-2 text-slate-300 rounded-md" type="submit">Submit</button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    taskName: String,
    taskDescription: String,
    taskId: Number,
    taskFlag: String,
});


const form = useForm({
    flag: '',
});

const submitFlag = () => {
    form.post(route('tasks.submit', {task_id: props.taskId, flag: form.flag} ), {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>