<script setup></script>

<template>
    <div>
        <header>
            <nav>
                <div class="space-x-6">
                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700': $page.component == 'Home' }"
                        :href="route('home')"
                        >Home</Link
                    >
                </div>
                <div v-if="$page.props.auth.user">
                    <Link
                        class="nav-link space-x-6"
                        :class="{
                            'bg-slate-700': $page.component == 'Dashboard',
                        }"
                        :href="route('dashboard')"
                    >
                        Dashboard
                    </Link>
                    <Link
                        class="nav-link"
                        :href="route('logout')"
                        method="post"
                        as="button"
                        type="button"
                    >
                        Logout
                    </Link>
                </div>
                <div v-else class="space-x-6">
                    <Link
                        class="nav-link space-x-6"
                        :class="{
                            'bg-slate-700': $page.component == 'Auth/Register',
                        }"
                        :href="route('register')"
                    >
                        Register
                    </Link>
                    <Link
                        class="nav-link"
                        :class="{
                            'bg-slate-700': $page.component == 'Auth/Login',
                        }"
                        :href="route('login')"
                    >
                        Log in
                    </Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
