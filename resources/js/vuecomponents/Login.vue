<template>
    <el-card class="login-box" shadow="never">
        <div slot="header" class="clearfix">
            <span>Вход</span>
        </div>
        <el-form status-icon ref="ruleForm">
            <el-form-item>
                <el-input placeholder="Логин" type="text" autocomplete="off">
                    <template slot="prepend">
                        <i class="el-icon-user"></i>
                    </template>
                </el-input>
            </el-form-item>
            <el-form-item>
                <el-input placeholder="Пароль" type="password" autocomplete="off">
                    <template slot="prepend">
                        <i class="el-icon-lock"></i>
                    </template>
                </el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary">Войти</el-button>
                <el-button @click="toRegistration">Регистрация</el-button>
            </el-form-item>
        </el-form>
    </el-card>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
    methods: {
        toRegistration() {
            this.$router.push('/registration')
        }
    }
}
</script>