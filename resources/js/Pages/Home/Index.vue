<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Word from '@/Components/Word.vue';

import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';


import { useForm, Head } from '@inertiajs/vue3';

defineProps(['words']);

const form = useForm({
    searchWord: '',
});
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="">
                <input
                    v-model="form.searchWord"
                    placeholder="What's on your mind?"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                <InputError :message="form.errors.message" class="mt-2" />
                <PrimaryButton class="mt-4">Search</PrimaryButton>
            </form>

            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">

            <Word

                v-for="word in words"

                :key="word.id"

                :word="word"

            />

            </div>

        </div>
    </AuthenticatedLayout>
</template>
