<script>
    import { inertia } from "@inertiajs/svelte";
</script>

<main>
    <nav>
        <ul>
            <li><a use:inertia href="/">Home</a></li>
            <li><a use:inertia href="/users">Users</a></li>
            <li><a href="/users/about">About</a></li>
        </ul>
    </nav>
    <slot />
</main>
