<template>
    <div class="social_vue">
        <a :href="this.socials.url">
            <i :class="'fab  fa-' + cleanUrl" id="social_icon"></i>
            <p>{{name}}</p>
    <!-- {{socials.url}} -->
            </a>
        <div v-on:click.prevent="toggleIcon"><i class="fas fa-plus" id="social_icon"></i></div>
        <div class="input_social" v-if="seen">
            <input v-model="url" placeholder="bv. https://www.instagram.com/uwaccount">
            <button v-on:click.prevent="storeUrl" class="btn">Voeg sociale media toe</button>
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
                name: "",
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
        },
            computed: {
                cleanUrl() {
                    const original = this.socials.url;
                    if (original) {
                        return original.split('.')[1];
                        }
                    }
                    
            }
    }
</script>
