<script>
    import { inertia } from "@inertiajs/svelte";
</script>

<main>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a use:inertia href="/users">Users</a></li>
            <li><a use:inertia href="/about">About</a></li>
        </ul>
    </nav>
    <slot />
</main>
