<template>
    <aside class="layout-sidebar">
        <div class="topbar">
            <a href="#">Laravel Challenge</a>
        </div>
        <ul>
            <li v-for="lesson in lessons">
            	<router-link :to="{name: 'lesson', params: {slug: lesson.slug}}" v-text="lesson.title"></router-link>
            </li>
        </ul>
    </aside>
</template>

<script>
    export default {
        data(){
            return {
                lessons: [],
            }
        },
        mounted(){
            axios.get('api/lessons')
                .then(response => {
                    this.lessons = response.data
                })
        }
    }
</script>
