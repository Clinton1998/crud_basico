<template>
    <div>
        <header class="bg-blue-100 fixed top-0 h-10 inset-x-0 px-10">
            <h2 class="text-blue-600 text-3xl font-extrabold">Administración de posts</h2>
        </header>
        <main class="bg-gray-100 mt-10">
            <slot></slot>
        </main>
        <div class="fixed bottom-0 left-0">
            <iframe width="200" src="https://www.youtube.com/embed/GIYbeJAk9SM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
</template>
<script>
export default {
    
}
</script>