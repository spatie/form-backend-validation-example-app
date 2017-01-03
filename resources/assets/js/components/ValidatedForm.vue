<template>
    <form @submit.prevent="onSubmit"
          @keydown="form.errors.clear($event.target.name)"
          action="action"
          method="method">
        <slot></slot>
    </form>
</template>

<script>
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
            this.form.post('/projects/create')
                .then(response => alert('All ok'));
        }
    }
};

</script>
