<script>
    import Layout from "../Layouts/Layout.svelte";
    import { router } from "@inertiajs/svelte";

    let values = {
        first_name: null,
        last_name: null,
        email: null,
    };

    function handleSubmit() {
        router.post("/users", values);
    }
</script>

<svelte:head>
    <title>Home</title>
</svelte:head>

<Layout>Home page</Layout>
