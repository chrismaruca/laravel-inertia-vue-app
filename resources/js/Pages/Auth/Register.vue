<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

function submit() {
    form.post(route("register"), {
        onError: () => form.reset("password", "password_confirmation"),
    });
}
</script>

<template>
    <Head title=" - Register" />
    <h1>Register a new account</h1>
    <div>
        <form @submit.prevent="submit">
            <TextInput
                name="name"
                v-model="form.name"
                :message="form.errors.name"
            />
            <TextInput
                name="email"
                type="email"
                v-model="form.email"
                :message="form.errors.email"
            />
            <TextInput
                name="password"
                type="password"
                v-model="form.password"
                :message="form.errors.password"
            />
            <TextInput
                name="confirm password"
                type="password"
                v-model="form.password_confirmation"
            />

            <div>
                <p>Already a user? <Link class="text-link" :href="route('login')">Log in</Link></p>
                <button class="primary-btn" :disabled="form.processing">
                    Register
                </button>
            </div>
        </form>
    </div>
</template>
