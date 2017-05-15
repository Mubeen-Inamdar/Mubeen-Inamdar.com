<template>
    <div class="col l6 s12">
        <h5 class="white-text">Get In Touch</h5>
        <form v-on:submit.prevent="onSubmit">
            <input v-model="noBotsPlease" class="technically-hidden" type="text" name="no_bots_please">

            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons white-text prefix">account_circle</i>
                    <input v-model="name" id="name" type="text" class="white-text validate" name="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons white-text prefix">email</i>
                    <input v-model="email" id="email" type="email" class="white-text validate" name="email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons white-text prefix">message</i>
                    <textarea v-model="message" id="message" class="materialize-textarea white-text validate" name="message" required></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="row">
                <button class="waves-effect waves-light btn" type="submit">
                    <i class="material-icons right">send</i>Send
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
    .technically-hidden {
        max-height: 0;
        margin: 0;
        border: 0;
        position: absolute;
    }
</style>

<script>
    export default {
        data() {
            return {
                noBotsPlease: '',
                name: '',
                email: '',
                message: ''
            }
        },

        methods: {
            onSubmit() {
                axios.post('/contact', {
                    no_bots_please: this.noBotsPlease,
                    name: this.name,
                    email: this.email,
                    message: this.message
                })
                .catch(error => alert(error))
                .then(response => alert(response.message));
            }
        }
    }
</script>
