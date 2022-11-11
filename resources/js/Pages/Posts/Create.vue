<template>
<Head title="Create Page"/>
<AppLayout>
<div>
<h1>Create</h1>
<form @submit.prevent="form.post(route('posts.store'))">
<div>
<label style="margin-right:10px">Title</label>
<input type="text" v-model="form.title">
<div v-if="errors.title">{{errors.title}}</div>
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
import AppLayout from "../../layouts/App"
export default {
  components:{
     AppLayout,Head
    },
    props:{
      errors:Object
    },
    setup(){
      const form=useForm({
        title:'',
      })
      return {form}
    }
}
</script>