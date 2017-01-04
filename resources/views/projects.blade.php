<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form-backend-validation demo</title>
</head>

<body>
<div id="app">
    <h1>Create a project</h1>

    <validated-form inline-template action="{{ action('ProjectsController@store') }}" method="post">
        <div v-cloak>
            <div :class="messageClass">@{{ message }}</div>

            <form @submit.prevent="onSubmit"
                  @keydown="form.errors.clear($event.target.name);clearMessage();"
            >
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" v-model="form.name">
                    <span v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                </div>

                <div>
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" v-model="form.description">
                    <span v-if="form.errors.has('description')"
                          v-text="form.errors.get('description')"></span>
                </div>

                <div>
                    <button :disabled="form.errors.any()">Create project</button>
                </div>
            </form>
        </div>
    </validated-form>

</div>

<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>