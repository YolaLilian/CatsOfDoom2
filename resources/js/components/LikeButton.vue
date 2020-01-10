<template>
    <div class="container">
       <button class="btn btn-outline-dark mt-2" @click="likePost">Like</button>
    </div>
</template>

<script>
    export default {

        props: [ 'postId'],
        
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            likePost() {
                axios.post('/like/' + this.postId)
                .then(response => {
                    alert(response.data);
                })
            }
        }
    }
</script>
