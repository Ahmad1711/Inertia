<template>
    <div>
        <Link :href="route('posts.index')" :class="{ 'font-bold': $page.component === 'Posts/Index' }" style="margin-right:10px">Posts</Link>
        <Link :href="route('pages.about')" :class="{ 'font-bold': $page.component === 'Posts/About' }" style="margin-right:10px">About Us</Link>
        <Link :href="route('logout')" method="post">Logout</Link>
    </div>
    <div>Hi,{{$page.props.user.name}}</div>
    <div v-if="$page.props.flash.message">{{$page.props.flash.message}}</div>
    <slot></slot>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
  components:{
        Link
    },
}
</script>