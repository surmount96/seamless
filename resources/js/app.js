/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vodal from 'vodal';
import { Datetime } from 'vue-datetime';


import "vodal/common.css";
import "vodal/rotate.css";
import 'vue-datetime/dist/vue-datetime.css'

import Form  from 'vform'

// Vue.component(HasError.name, HasError);
// Vue.component(AlertError.name, AlertError);
Vue.component('datetime', Datetime);
Vue.component(Vodal.name, Vodal);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            show:false,
            employees:{},
            state: false,
            checkAll:false,
            form: new Form({
                id:'',
                full_name:'',
                job_title: '',
                salary:'',
                employment_status:'',
                decrease:'',
                increase:'',
                end:'',
                start:'',
                appointment:''
            })
        }
    },
    mounted(){
        this.getEmployees();
    },
    methods:{
        getEmployees(){
            axios.get('/api/employee').then( response => {
                this.employees = response.data.employees.data;
            });

        },
        makePagination(){

        },
        changeState(){
            this.state = false;
            this.show = true;
            this.form.reset();
        },
        addEmployee(){
            this.show = true;
            this.form.post('/api/employee').then(res => console.log(res));
            this.form.reset();
            this.getEmployees();
        },
        editEmployee(data){
          this.show = true;
          this.form.fill(data);
          this.state = true;
        },
        updateEmployee(){
            this.form.patch('/api/employee/'+this.form.id)
                .then(res => { this.getEmployees()})
                .catch(err => { console.log(err.response)});
        },
        deleteEmployee(id){
            this.form.delete('/api/employee/'+id).then(res => {})
                .catch(err => console.log(err.response));
        }
    }
});
