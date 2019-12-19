import Vue from 'vue';
import Vuex from 'vuex';

export const GET_STAGES = "GET_STAGES";
export const UPDATE_STAGES = "UPDATE_STAGES";
export const   SET_FILTER = "SET_FILTER";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        test: 'teststate',
        stages: null,
        activeFilter: null,
    },
    actions: {
        GET_STAGES({commit}, payload) {
            axios.get('/api/stages')
                .then(res => {
                    commit(GET_STAGES, res.data);
                })
                .catch(err => {
                    console.error(err);
                });
        },
        UPDATE_STAGES({commit}, payload) {
            axios.get(`/api/filter/${payload}`)
                    .then(res => {
                        commit(GET_STAGES, res.data);
                        commit(SET_FILTER, payload);
                    })
                    .catch(err => {
                        console.error(err);
                    });
        }
    },
    mutations: {
        GET_STAGES(state, payload) {
            state.stages = payload;
        },
        SET_FILTER(state, payload) {
            state.activeFilter = payload;
        }
        // FILTER_STAGES(state, payload) {
        //     state.stages = payload;
        // },
    },
});