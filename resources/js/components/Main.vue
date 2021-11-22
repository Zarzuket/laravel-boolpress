<template>
    <main>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{post.title}}
            </li>
        </ul>
    </main>
</template>

<script>
export default {
    name: "Main",
    mounted(){
        axios.get('/api/posts')
        .then((response) => {
            this.posts = response.data.data;
        })
    }
}
</script>