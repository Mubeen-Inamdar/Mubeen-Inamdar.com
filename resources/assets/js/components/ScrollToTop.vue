<template>
    <a v-on:click="handleButtonClick" class="btn-floating btn-large waves-effect waves-light deep-orange scroll-to-top">
        <i class="material-icons">keyboard_arrow_up</i>
    </a>
</template>

<style scoped>
    .scroll-to-top {
        position: fixed;
        bottom: 40px;
        right: 40px;
        display: none;
        opacity: .5;
    }

    .scroll-to-top:hover {
        opacity: 1;
    }
</style>

<script>
    export default {
        data() {
            return {
                offset: 300,
                scrollDuration: 800
            }
        },

        methods: {
            handleButtonClick() {
                $('html, body').animate({scrollTop: 0}, this.scrollDuration);
            }
        },

        created() {
            const offset = this.offset;
            $(window).scroll(function () {
                if ($(this).scrollTop() > offset) {
                    $('.scroll-to-top').fadeIn();
                } else {
                    $('.scroll-to-top').fadeOut();
                }
            });
        }
    }
</script>
