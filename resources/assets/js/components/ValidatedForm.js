import Form from 'form-backend-validation';

export default {
    data() {
        return {
            form: new Form({
                name: '',
                description: '',
            })
        }
    },

    props: ['method', 'action'],

    methods: {
        onSubmit() {
            this.form[this.method](this.action)
                .then(response => alert('All ok'));
        }
    }
};
