@extends('layouts.master')

@section('title','Homepage')

@section('content')
    <div class="lg:w-11/12 md:w-11/12 mx-auto flex flex-wrap">
        <div class="lg:w-3/12 md:w-4/12 lg:mx-0 md:mx-0 w-full mb-4">
            <h3 class="text-large font-bold py-4 bg-white opacity-30 pl-5">employee</h3>
            <div class="w-full bg-white shadow rounded lg:p-10 p-5 ">
                <div class="">
                    <div class="flex items-center">
                        <img src="{{ asset('img/logo-2.png') }}" alt="">
                        <h2 class="ml-2 text-large">All Employees</h2>
                    </div>
                    <p class="text-medium text-gray-grayer my-3 ml-2">PROJECT</p>
                </div>
                <ul class="text-medium">
                    <li class="mb-4 flex items-center">
                        <img src="{{ asset('img/img-1.png') }}" alt="">
                       <span class="ml-2"> Arena Sport</span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <img src="{{ asset('img/dsv.png') }}" alt="">
                       <span class="ml-3">DSV</span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-sm flex items-center justify-center text-white">SM</div>
                        <span class="ml-2">Seafood Mall</span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-fs flex items-center justify-center text-white">FS</div>
                        <span class="ml-2">FireStar</span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <img src="{{ asset('img/zb.png') }}" alt="">
                        <span class="ml-3">Zeta Bank</span>
                    </li>
                </ul>
                <p class="text-medium text-gray-grayer my-3 ml-2">STATUS</p>
                <ul>
                    <li class="mb-4 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-blue flex items-center justify-center text-white">FT</div>
                        <span class="ml-2">Full time</span>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-pt flex items-center justify-center text-white">PT</div>
                        <span class="ml-2">Part time</span>
                    </li>
                    <li class="m-4">
                        <button class="rounded-full w-48 py-4 text-white bg-purple-dark">add project</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:w-9/12 md:w-8/12 lg:mx-0 sm:mx-0 mx-1 w-full">
            <div class="text-right mb-3">
                <button class="bg-green py-2 rounded-full text-white px-8 focus:outline-none" @click="changeState">add employee</button>
            </div>
            <table class="w-full mx-8 my-4">
                <tr>
                    <td><input type="checkbox" v-model="checkAll"></td>
                    <td>EMPLOYEE</td>
                    <td class="flex items-center">
                        <span class="mr-2">
                                SALARY
                            </span>
                        <svg class="w-3 text-gray-grayer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M8 7l4-4m0 0l4 4m-4-4v18"></path></svg>
                    </td>
                    <td>
                        <span class="mr-">STATUS</span>
                    </td>
                    <td>MANAGE</td>
                </tr>
                <tr class="bg-white shadow rounded mb-4 py-3 text-medium" v-for="(employee,index) in employees" :key="employee.id">
                    <td><input type="checkbox" :checked="checkAll"></td>
                    <td class="flex">
                        <div class="">
                            <img src="{{ asset('img/small-img-201.png') }}" alt="">
                        </div>
                        <div class="ml-3">
                            <h2>@{{ employee.full_name }}</h2>
                            <p class="text-gray-grayer ">@{{ employee.job_title }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <h2>@{{ employee.salary }} NOK <small class="bg-green py-1 px-2 text-white rounded-full text-subtext">+300</small></h2>
                            <p>@{{ employee.employment_status }}</p>
                        </div>
                    </td>
                    <td>
                        <h2>@{{ employee.appointment }}</h2>
                        <p>2 months</p>
                    </td>
                    <td class="flex text-gray-grayer">
                        <div class="hover:text-blue" @click="editEmployee(employee)">
                            <svg class="w-4 mr-4 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </div>

                        <div class="border-r"></div>
                        <div class="hover:text-red" @click="deleteEmployee(employee.id)">
                            <svg class="w-4 ml-4 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </div>
                    </td>
                    <td></td>
                </tr>
            </table>
            <div class="w-full lg:mx-10 md:mx-5">
                <div class="w-full text-medium">
{{--                    <div class="flex justify-between py-3 px-10">--}}
{{--                        <p>--}}
{{--                            <input type="checkbox" v-model="checkAll">--}}
{{--                        </p>--}}
{{--                        <p class="w-32 ">EMPLOYEE</p>--}}
{{--                        <p class="flex items-center">--}}
{{--                            <span class="mr-2">--}}
{{--                                SALARY--}}
{{--                            </span>--}}
{{--                            <svg class="w-3 text-gray-grayer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M8 7l4-4m0 0l4 4m-4-4v18"></path></svg>--}}
{{--                        </p>--}}
{{--                        <p class="flex items-center">--}}
{{--                            <span class="mr-">STATUS</span>--}}
{{--                            <svg  class="w-3 text-gray-grayer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 17l-4 4m0 0l-4-4m4 4V3"></path></svg>--}}
{{--                        </p>--}}
{{--                        <p>MANAGE</p>--}}
{{--                    </div>--}}
{{--                    <div class="" v-show="loading">--}}
{{--                        <img src="{{ asset('img/loader.gif') }}" class="w-6 mx-auto" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="bg-white shadow rounded mb-4 flex justify-between items-center py-3 px-10" v-for="(employee,index) in employees" :key="employee.id">--}}
{{--                        <div class="mb-4">--}}
{{--                            <input type="checkbox" :checked="checkAll">--}}
{{--                        </div>--}}
{{--                        <div class="flex ">--}}
{{--                            <div class="">--}}
{{--                                <img src="{{ asset('img/small-img-201.png') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ml-3">--}}
{{--                                <h2>@{{ employee.full_name }}</h2>--}}
{{--                                <p class="text-gray-grayer ">@{{ employee.job_title }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h2>@{{ employee.salary }} NOK <small class="bg-green py-1 px-2 text-white rounded-full text-subtext">+300</small></h2>--}}
{{--                            <p>@{{ employee.employment_status }}</p>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <h2>@{{ employee.appointment }}</h2>--}}
{{--                            <p>2 months</p>--}}
{{--                        </div>--}}
{{--                        <div class="flex text-gray-grayer">--}}
{{--                            <div class="hover:text-blue" @click="editEmployee(employee)">--}}
{{--                                <svg class="w-4 mr-4 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>--}}
{{--                            </div>--}}

{{--                            <div class="border-r"></div>--}}
{{--                            <div class="hover:text-red" @click="deleteEmployee(employee.id)">--}}
{{--                                <svg class="w-4 ml-4 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between text-medium">
                        <div class="">
                            <p class=" text-gray-700" style="font-size:.8rem">
                                Showing
                                <span class="font-medium">@{{ current_page}}</span>
                                of
                                <span class="font-medium">@{{ last_page }}</span>
                            </p>
                        </div>
                        <div class="">
                            <button class="border border-gray py-1 px-3 shadow" :disabled="!prev_page" @click="getEmployees(current_page-1)">Previous</button>
                            <button class="border border-gray py-1 px-3 ml-2 shadow" :disabled="!next_page" @click="getEmployees(current_page+1)">Next</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    Modal--}}
    <vodal :show="show" :width="500" :height="560" animation="slideRight" @hide="show = false">
        <div class="border-b border-gray pb-3">
            <h2>@{{ state ? 'Update' : 'Add new' }} employee</h2>
        </div>
        <form @submit.prevent="state ? updateEmployee() : addEmployee()">
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Full name</label>
                <input type="text" v-model="form.full_name" class="w-full  border  py-2 px-3 focus:outline-none rounded" required placeholder="full name">
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Job title</label>
                <input type="text" v-model="form.job_title" class="w-full  border  py-2 px-3 focus:outline-none rounded" required placeholder="job title">
            </div>
            <div class="flex flex-wrap my-3 mx-3 text-medium text-gray-grayer">
                <div class="lg:w-1/2 md:w-1/2 w-full">
                    <div class="lg:mr-2 md:mr-2 ">
                        <label for="" class="ml-">Employment Status</label>
                        <select v-model="form.employment_status" class="w-full border  bg-white py-2 px-3 focus:outline-none rounded">
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>

                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full">
                    <label for="" class="ml-">Appointment</label>
                    <select v-model="form.appointment" class="w-full block border bg-white py-2 px-3 focus:outline-none rounded">
                        <option value="test period">test period</option>
                        <option value="contract">contract</option>
                        <option value="probation">probation</option>
                    </select>
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer flex">
                <div class="mr-2">
                    <label for="" class="ml-">Start duration</label>
                    <datetime v-model="form.start" input-class="w-full  border  py-2 px-3 focus:outline-none rounded" placeholder="choose a start date" style="width:13.4rem"></datetime>
                </div>
                <div class="">
                    <label for="" class="ml-">End duration</label>
                    <datetime v-model="form.end" input-class="w-full  border  py-2 px-3 focus:outline-none rounded" placeholder="choose an end date" style="width:14rem"></datetime>
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer flex">
                <div class="mr-2">
                    <label for="" class="ml-">Increase</label>
                    <input type="number" v-model="form.increase" class="w-full  border  py-2 px-3 focus:outline-none rounded"  placeholder="salary increase">
                </div>
                <div class="">
                    <label for="" class="ml-">Deduction</label>
                    <input type="number" v-model="form.decrease" class="w-full  border  py-2 px-3 focus:outline-none rounded" placeholder="salary decrease">
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Salary</label>
                <input type="number" v-model="form.salary" class="w-full  border  py-2 px-3 focus:outline-none rounded" required placeholder="salary">
            </div>

            <div class="text-right mr-3">
                <button type="submit" class="bg-green py-2 w-32 text-white rounded-full">@{{ state ? 'update' : 'create' }}</button>
            </div>
        </form>
    </vodal>
@endsection
