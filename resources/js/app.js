/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vodal from 'vodal';
import { Datetime } from 'vue-datetime';
import Swal from 'sweetalert2/dist/sweetalert2.js'


import "vodal/common.css";
import "vodal/rotate.css";
import 'vue-datetime/dist/vue-datetime.css'
import 'sweetalert2/src/sweetalert2.scss'

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

Vue.component('show', require('./Show.vue').default);

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
            loading:false,
            current_page:'',
            last_page:'',
            prev_page:'',
            next_page:'',
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
        getEmployees(page = 1){
            this.loading = true;
            axios.get('/api/employee?page='+page).then( response => {
                this.employees = response.data.employees.data;
                this.makePagination(response.data.employees);
                this.loading = false;
            });

        },
        makePagination(data){
            this.current_page = data.current_page;
            this.last_page = data.last_page;
            this.prev_page = data.prev_page_url;
            this.next_page = data.next_page_url;
        },
        changeState(){
            this.state = false;
            this.show = true;
            this.form.reset();
        },
        addEmployee(){
            this.show = true;
            this.loading = true;
            this.form.post('/api/employee').then(res => {
                this.form.reset();
                this.getEmployees();
                this.loading = false;
                this.show = false;
                Swal.fire('Successful', 'New employee added', 'success')
            }).catch(err => {console.log(err)});
        },
        editEmployee(data){
          localStorage.setItem('employee_id',data.id);
          // this.form.fill(data);
        },

        deleteEmployee(id){
            // this.loading = true;
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this imaginary file!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
            }).then((result) => {
                if (result.value) {
                    this.form.delete('/api/employee/'+id).then(res => {
                        this.getEmployees(); this.loading = false;
                    }).catch(err => console.log(err.response));
                    Swal.fire(
                        'Deleted!',
                        'Your imaginary file has been deleted.',
                        'success'
                    )
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            });
        }
    }
});
