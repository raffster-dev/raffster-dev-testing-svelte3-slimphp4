<script>
	import { Router, Route, Link } from "svelte-routing";
	import Home from "./pages/Home.svelte";
	import Clients from "./pages/Clients.svelte";
	import About from "./pages/About.svelte";

	export let url = "";
</script>

<Router url="{url}">
	<nav>
	   <Link to="/">Home</Link>
	   <Link to="/clients">Clients</Link>
	   <Link to="about">About</Link>
	 </nav>

	 <div>
	   <Route path="/"><Home /></Route>
	   <Route path="clients" component="{Clients}" />
	   <Route path="about" component="{About}" />
	 </div>
</Router>

<style>
	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
	}

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>