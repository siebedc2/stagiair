<template>
    <div class="social_vue">
        <a href="#">
            <i :class="'fab fa-' + socials.url" id="social_icon"></i>
    {{socials.url}}
            </a>
        <div v-on:click.prevent="toggleIcon">+</div>
        <div class="input_social" v-if="seen">
            <input v-model="url" placeholder="add social url">
            <button v-on:click.prevent="storeUrl">add Social account</button>
        </div>
        
    </div>
</template>

<script>
import axios from 'axios';
    export default {
           data() {
            return {
                seen: false,
                url: [],
                socials: [],
            }
        },
        mounted() {
           console.log("mounted");
           this.getSocials();

        },
        methods: {
            getSocials() {
                axios.get('/api/media/')
                    .then(res => {
                        this.socials = res.data;
                    })
                    .catch(err => {
                        console.error(err);
                    });
            },
            storeUrl() {
                console.log(this.url);
                let vueInstance = this;
                 axios.post('api/profile/', {
                    url: vueInstance.url
                })
                .then(function (res) {
                    vueInstance.url = res.data.url;
                }).then(function (res) {
                    vueInstance.getSocials();
                })
                .catch(function (error) {
                    console.log(error);
                });
                    
            },
            toggleIcon: function() {
                this.seen = !this.seen;
                }
        }
    }
</script>