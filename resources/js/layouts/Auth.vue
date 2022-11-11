<template>
    <div v-if="$page.props.flash.message">{{$page.props.flash.message}}</div>
    <slot></slot>
</template>

<script>

export default {
 
}
</script>