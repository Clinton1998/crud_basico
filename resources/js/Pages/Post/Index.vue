<template>
    <h1 class="text-3xl text-blue-700 text-center font-extrabold">Listado de posts</h1>
    <div class="mb-4 sticky top-10">
        <Link :href="route('posts.create')" class="btn btn-primary inline-block">Nuevo post</Link>
    </div>
    <table class="table table-fixed">
        <thead>
            <tr>
                <th class="w-1/12">#</th>
                <th class="w-8/12">Título</th>
                <th class="w-2/12">Categoria</th>
                <th class="w-1/12">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(post, index) in posts" :key="post.id">
                <td>{{ index + 1 }}</td>
                <td><a href="#" class="underline hover:text-red-600">{{ post.title }}</a></td>
                <td>{{ post.category.name }}</td>
                <td>
                    <button class="btn btn-warning">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import Base from '../../Layouts/Base.vue'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    layout: Base,
    components: {
        Link,
    },
    props: {
        posts: {
            type: Array,
            required: true
        }
    },

    created(){
        console.log('Los datitos recibidos del servidor son: ');
        console.log(this.posts);

    },

    mounted() {
        let rutaActual = route('posts.index');
        console.log('El valor de rutaActual es: ', rutaActual);
    }
}
</script>