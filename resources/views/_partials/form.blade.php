<h1 class="title is-3">Create a project</h1>

<validated-form inline-template action="{{ action('ProjectsController@store') }}" method="post">
      <form @submit.prevent="onSubmit"
            @keydown="form.errors.clear($event.target.name)"
>
        <div class="control">
            <label for="name" class="label">Name:</label>
            <input type="text" id="name" name="name" class="input" v-model="form.name">
            <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>

        <div class="control">
            <label for="description" class="label">Description:</label>
            <input type="text" id="description" name="description" class="input" v-model="form.description">
            <span class="help is-danger" v-if="form.errors.has('description')"
                  v-text="form.errors.get('description')"></span>
        </div>

        <div class="control">
            <button class="button is-primary" :disabled="form.errors.any()">Create project</button>
        </div>
    </form>
</validated-form>
