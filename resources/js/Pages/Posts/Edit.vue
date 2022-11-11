<template>
<Head title="Edit Page"/>
<AppLayout>
<div>
<h1>Edit</h1>
<form @submit.prevent="form.put(route('posts.update',form.id))">
<div>
<label>Title</label>
<input type="text" v-model="form.title">
<div v-if="errors.title">{{errors.title}}</div>
</div>
<div>
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
      post:Object,
      errors:Object
    },
    setup(props){
      const form=useForm(props.post)
      return {form}
    }
}
</script>