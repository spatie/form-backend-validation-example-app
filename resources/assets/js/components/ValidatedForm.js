import Form from 'form-backend-validation';

export default {
    data() {
        return {
            form: new Form({
                name: '',
                description: '',
            }),
            message: '',
            messageClass: '',
        }
    },

    props: ['method', 'action'],

    methods: {
        onSubmit() {
            this.form[this.method](this.action)
                .then(response => this.displaySuccessMessage('Your project was created'))
                .catch(response => this.displayErrorMessage('Your project was not created'));
        },

        displaySuccessMessage(message) {
            this.messageClass = 'alert--success';
            this.message = message;
        },

        displayErrorMessage(message) {
            this.messageClass = 'alert--error';
            this.message = message;
        },

        clearMessage() {
            this.message = '';
        },
    }
};
