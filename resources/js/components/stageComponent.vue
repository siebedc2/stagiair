<template>
    <div class="intern_grid">
        
        <a v-for="(stage, i) in stages" v-bind:key="i"  :href="'/stages/' + stage.id"  class="internship">
                        <!-- elk item van 1 internship in een html tag steken -->
                        <h4 id="titleTeaser">{{stage.title}}</h4>
                        <h4 id="companyTeaser">{{stage.companyName}}</h4>
                        <i class="arrow right"></i>
                        <p id="descriptionTeaser">{{stage.description}}</p>
        </a>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
           data() {
            return {
                stages: []
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.getStages();
        },
        methods: {
            getStages() {
                axios.get('/api/stages')
                    .then(res => {
                        this.stages = res.data;
                    })
                    .catch(err => {
                        console.error(err);
                    });
            }
        }
            
    }
</script>