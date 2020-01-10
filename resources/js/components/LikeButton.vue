<template>
    <div class="container">
       <button class="btn btn-outline-dark mt-2" @click="likePost">Like</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            likePost() {
                alert("MEOW!")
            }
        }
    }
</script>
