@extends('layouts.master')

@section('title','Create')

@section('content')
    <div class="lg:w-2/3 md:w-2/3 lg:mx-auto md:mx-auto mx-6 w-full">
        <div class="border-b border-gray pb-3">
            <h2>Add new employee</h2>
        </div>
        <form @submit.prevent="addEmployee()">
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Full name</label>
                <input type="text" v-model="form.full_name" class="w-full  border  py-3 px-3 focus:outline-none rounded" required placeholder="full name">
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Job title</label>
                <input type="text" v-model="form.job_title" class="w-full  border  py-3 px-3 focus:outline-none rounded" required placeholder="job title">
            </div>
            <div class="flex flex-wrap my-3 mx-3 text-medium text-gray-grayer">
                <div class="lg:w-1/2 md:w-1/2 w-full">
                    <div class="lg:mr-2 md:mr-2 ">
                        <label for="" class="ml-">Employment Status</label>
                        <select v-model="form.employment_status" class="w-full border  bg-white py-3 px-3 focus:outline-none rounded">
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                        </select>
                    </div>

                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full">
                    <label for="" class="ml-">Appointment</label>
                    <select v-model="form.appointment" class="w-full block border bg-white py-3 px-3 focus:outline-none rounded">
                        <option value="test period">test period</option>
                        <option value="contract">contract</option>
                        <option value="probation">probation</option>
                    </select>
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer flex">
                <div class="lg:w-1/2 md:w-1/2 w-full mb-3 ">
                    <div class="lg:mr-2 md:mr-2 mr-0">
                        <label for="" class="ml-">Start duration</label>
                        <datetime v-model="form.start" input-class="w-full  border  py-3 px-3 focus:outline-none rounded" placeholder="choose a start date" style="width:27rem"></datetime>
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full mb-3 ">
                    <label for="" class="ml-">End duration</label>
                    <datetime v-model="form.end" input-class="w-full  border  py-3 px-3 focus:outline-none rounded" placeholder="choose an end date" style="width:27.5rem"></datetime>
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer flex flex-wrap">
                <div class="lg:w-1/2 md:w-1/2 w-full mb-3">
                    <div class="lg:mr-2 md:mr-2 mr-0">
                        <label for="" class="ml-">Increase</label>
                        <input type="number" v-model="form.increase" class="w-full border  py-3 px-3 focus:outline-none rounded"  placeholder="salary increase">
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full mb-3 ">
                    <label for="" class="ml-">Deduction</label>
                    <input type="number" v-model="form.decrease" class="w-full  border  py-3 px-3 focus:outline-none rounded" placeholder="salary decrease">
                </div>
            </div>
            <div class="my-3 mx-3 text-medium text-gray-grayer">
                <label for="" class="ml-">Salary</label>
                <input type="number" v-model="form.salary" class="w-full  border  py-3 px-3 focus:outline-none rounded" required placeholder="salary">
            </div>

            <div class="text-right mr-3">
                <button type="submit" class="bg-green py-3 w-32 text-white rounded-full">create</button>
            </div>
        </form>
    </div>
@endsection
