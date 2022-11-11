<template>
<Head title="Index Page"/>
<AppLayout>
<div>
<Link :href="route('posts.create')">Create Post</Link>
<h1>Index</h1>
<table>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scop="col">Delete</th>
       <th scop="col">Edit</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="post in posts" :key="post.id">
      <th>{{post.id}}</th>
      <td>{{post.title}}</td>
      <td>
      <button @click="destroy(post.id)">Delete</button>
      </td>
      <td>
      <Link :href="route('posts.edit',post.id)">Edit</Link>
      </td>
      <td>{{post.created_at}}</td>
      <td>{{post.updated_at}}</td>
    </tr>
  </tbody>
</table>
</div>
</AppLayout>
</template>

<script>
// const posts=[{
//   id:"1",
//   title:"test",
// }]
import { Head,Link } from '@inertiajs/inertia-vue3'
import AppLayout from "../../layouts/App"
import { Inertia } from '@inertiajs/inertia'
export default {
  components:{
  //       Link
     AppLayout,Head,Link
    },
    props: {
      posts:Object,
    },
    setup() {
      const destroy=(id)=>{
        if(confirm('Are you sure')){
          Inertia.delete(route('posts.destroy',id))
        }
      }
      return {destroy}
    },
}
</script>