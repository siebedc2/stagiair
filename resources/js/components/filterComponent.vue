<template>
    <div class="filter">
        <p>Filter by sector:</p>
        <a v-for="(sector, i) in sectors" v-bind:key="i" :class="{'active': sector.sector === activeFilter}" href="#" v-on:click.prevent="filter(sector.sector)"> {{sector.sector}} <span>|</span> </a>
        <a v-on:click.prevent="reset()"  href="#">Reset</a>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
           data() {
            return {
                sectors: [],
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.getSectors();
        },
        methods: {
            getSectors() {
                axios.get('/api/sectors')
                    .then(res => {
                        this.sectors = res.data;
                    })
                    .catch(err => {
                        console.error(err);
                    });
            },
            filter(sector) {
                this.$store.dispatch('UPDATE_STAGES', sector);
            },
            reset() {
                this.$store.dispatch('GET_STAGES');
                this.$store.state.activeFilter = '';
            }
        },
        computed: {
            activeFilter() {
                return this.$store.state.activeFilter;
            }
        }  
    }
</script>