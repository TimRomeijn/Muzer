<template>

    <div class="input-group chat-input-area">
        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Stuur hier je berichtje" v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                <i class="fas fa-envelope fa-2x"></i>
            </button>
        </span>
    </div>
</template>

            <script>
            export default {
                props: ['user'],

                data() {
                    return {
                        newMessage: ''
                    }
                },

                methods: {
                    sendMessage() {
                        this.$emit('messagesent', {
                            user: this.user,
                            message: this.newMessage
                        });

                        this.newMessage = ''
                    }
                }
            }
            </script>