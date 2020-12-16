<script>
	import { onMount } from 'svelte';

    let clients = [];

    onMount(() => {
        getClients();
    });

    async function getClients() {
        const res = await fetch("http://localhost/api/clients");
        clients = await res.json();
    }
</script>

<h1>Clients</h1>

<div class="clients">
    {#each clients as client}
        <div>
            <p>{client.name}</p>
        </div>
    {:else}
		<p>loading...</p>
	{/each}
</div>
