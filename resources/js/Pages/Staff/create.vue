<template>
  <AppLayout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">

            <form @submit.prevent="form.post('/staff')">
                <h1 class="text-2xl text-gray-800 font-bold text-center">Create a new staff member</h1>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                    <InputLabel for="name" value="Name" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.name"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.name">{{form.errors.name}}</div>

                    </div>

                    <div class=" w-full">
                    <InputLabel for="email" value="Email" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.email"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.email">{{form.errors.email}}</div>

                    </div>
                </div>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                    <InputLabel for="address" value="Address" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.address"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.address">{{form.errors.address}}</div>

                    </div>

                    <div class=" w-full">
                    <InputLabel for="phone" value="Phone Number" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.phone"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.phone">{{form.errors.phone}}</div>

                    </div>
                </div>
                <div class="md:flex-row flex-col flex items-center gap-10 justify-center mt-8">
                    <div class=" w-full">
                    <InputLabel for="position" value="Position" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.position"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.position">{{form.errors.position}}</div>
                    </div>

                    <div class=" w-full">
                    <InputLabel for="department" value="Department" />
                    <TextInput
                    class="mt-1 block w-full"
                    type="text"
                    required
                    v-model="form.department"
                    autocomplete
                    />
                    <div class="text-red-500" v-if="form.errors.department">{{form.errors.department}}</div>
                    </div>
                </div>
                <PrimaryButton type="submit" class="flex justify-end mt-4" >Add Staff</PrimaryButton>
            </form>

        </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "../../Components/InputLabel.vue"
import TextInput from "../../Components/TextInput.vue"
import PrimaryButton from "../../Components/PrimaryButton.vue"
import AppLayout from "../../Layouts/AppLayout.vue";


const form = useForm({
    name: '',
    email: '',
    phone:'',
    address: '',
    position: '',
    department: '',
});



</script>

<style>

</style>
