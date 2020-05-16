<template>
    <el-main>
        <transition name="zoom">
            <router-view style="animation-duration: 0.3s"></router-view>
        </transition>
    </el-main>
</template>

<script>
export default {
    data() {
        return {
            
        }
    }
}
</script>