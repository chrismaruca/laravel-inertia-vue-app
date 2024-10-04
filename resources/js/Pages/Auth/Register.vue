<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
})

function submit() {
    form.post(route('register'), {
        onError: () => form.reset('password', 'password_confirmation'),
    })
}

</script>

<template>
    <Head title=" - Register"/>
    <h1>Register a new account</h1>
    <div>
        <form @submit.prevent="submit">
            <div class="mb-6">
                <label>Username</label>
                <input type="text" v-model="form.name">
                <small>{{ form.errors.name }}</small>
            </div>

            <div class="mb-6">
                <label>Email</label>
                <input type="text" v-model="form.email">
                <small>{{ form.errors.email }}</small>
            </div>

            <div class="mb-6">
                <label>Password</label>
                <input type="password" v-model="form.password">
                <small>{{ form.errors.password }}</small>
            </div>

            <div class="mb-6">
                <label>Confirm password</label>
                <input type="password" v-model="form.password_confirmation">
            </div>

            <div>
                <p>Already a user? <a class="text-link" href="#">Log in</a></p>
                <button class="primary-btn" :disabled="form.processing">Register</button>
            </div>
        </form>
    </div>
</template>