<script>
    import Layout from "../Layout.svelte";
    export let users;
    console.log(users);
    import { useForm } from "@inertiajs/svelte";

    let form = useForm({
        email: null,
        password: null,
        remember: false,
    });

    function submit() {
        $form.post("/users");
    }
</script>

<svelte:head>
    <title>Welcome</title>
</svelte:head>
<Layout>
    <form on:submit|preventDefault={submit}>
        <input type="text" bind:value={$form.email} />
        {#if $form.errors.email}
            <div class="form-error">{$form.errors.email}</div>
        {/if}
        <input type="password" bind:value={$form.password} />
        {#if $form.errors.password}
            <div class="form-error">{$form.errors.password}</div>
        {/if}
        <input type="checkbox" bind:checked={$form.remember} /> Remember Me
        <button type="submit" disabled={$form.processing}>Submit</button>
    </form>
</Layout>
