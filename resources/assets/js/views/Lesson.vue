<template>
    <section class="layout-content">
        <div>
            <div class="col-xs-12">
                <h1 v-text="lesson.title"></h1>
                <hr>
                <div v-html="lesson.body"></div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['slug'],
        data(){
            return {
                lesson: {}
            }
        },
        mounted(){
            axios.get(`api/lesson/${this.slug}`)
                .then(response => {
                    this.lesson = response.data;
                })
        }
    }
</script>
