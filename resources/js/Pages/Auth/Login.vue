<script setup>
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    email: null,
    password: null,
    remember: null,
});

function submit() {
    form.post(route("login"), {
        onError: () => form.reset("password", "remember"),
    });
}
</script>

<template>
    <Head title=" - Log in" />
    <h1>Log in</h1>
    <div>
        <form @submit.prevent="submit">
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

            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-2">
                    <input type="checkbox" v-model="form.remember" id="remember"/>
                    <label for="remember">Remember me</label>
                </div>

                <p class="text-slate-600">Not a user? <Link class="text-link" :href="route('register')">Register</Link></p>
            </div>

            <div>
                <button class="primary-btn" :disabled="form.processing">
                    Login
                </button>
            </div>
        </form>
    </div>
</template>
