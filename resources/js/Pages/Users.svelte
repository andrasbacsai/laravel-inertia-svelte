<script>
    // export let users;
    import { useForm, page, router } from "@inertiajs/svelte";
    import { onMount } from "svelte";
    console.log($page);

    let form = useForm({
        email: null,
        password: null,
        remember: false,
    });

    onMount(() => {
        router.on("start", (event) => {
            console.log(`Starting a visit to ${event.detail.visit.url}`);
        });
        router.on("error", (errors) => {
            console.log(errors);
        });
    });
    function submit() {
        $form.post("/users", {
            onStart() {
                console.log("Sending post request...");
                $form.clearErrors();
            },
        });
    }
</script>

<svelte:head>
    <title>Users</title>
</svelte:head>
{#if $form.progress}
    {$form.progress.percentage}
    <progress value={$form.progress.percentage} max="100">
        {$form.progress.percentage}%
    </progress>
{/if}
{#if $form.isDirty}
    <div>There are unsaved form changes.</div>
{/if}
<form class="flex" on:submit|preventDefault={submit}>
    <input type="text" bind:value={$form.email} />
    {#if $form.errors.email}
        <span class="form-error">{$form.errors.email}</span>
    {/if}
    <input type="password" bind:value={$form.password} />
    {#if $form.errors.password}
        <span class="form-error">{$form.errors.password}</span>
    {/if}
    <input type="checkbox" bind:checked={$form.remember} /> Remember Me
    <button type="submit" disabled={$form.processing}>Submit</button>
</form>
