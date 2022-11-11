<template>
<Head title="Login Page"/>
<AppLayout>
<div>
<h1>Login</h1>
<form @submit.prevent="form.post(route('login'))">
<div>
<label style="margin-right:10px">User Email</label>
<input type="text" v-model="form.email">
<div v-if="errors.email">{{errors.email}}</div>
</div>
<div style="margin-top:10px">
<label style="margin-right:10px">Password</label>
<input type="password" v-model="form.password">
<div v-if="errors.password">{{errors.password}}</div>
</div>
<div style="margin-top:10px">
<button type="submit" :disabled="form.processing">Submit</button>
</div>
</form>
</div>
</AppLayout>
</template>

<script>
import { Head,useForm } from '@inertiajs/inertia-vue3'
import AppLayout from "../../layouts/Auth"
export default {
  components:{
     AppLayout,Head
    },
    props:{
      errors:Object
    },
    setup(){
      const form=useForm({
        email:'',
        password:'',
      })
      return {form}
    }
}
</script>