<div id="root">
    <input type="text" id="input" v-model="message">
    <p>Message is: @{{ message }}</p>
</div>

<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    new Vue({
        el: '#root',
        data: {
            message: 'Hello Vue'
        }
    })
</script>
------------------------------------------------------------------------

<div id="root">
    <ul>
        <li v-for="name in names" v-text="name"></li>
    </ul>
    <input type="text" v-model="newName">
    <button v-on:click="addName">Add Name</button>
</div>

<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#root',

        data: {
            newName:'',
            names: ['John', 'Joe']
        },

        methods: {
            addName() {
                this.names.push(this.newName);
                this.newName= '';
            }
        },
    })
</script>
-------------------------------------------------------------------------
<< Hover Over Button >>
<div id="root">
    <button v-bind:title="title">Hover Over Me</button>
</div>

<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#root',

        data: {
            title: 'Peyman Hovered'
        },
    })
</script>
--------------------------------------------------------------------------
<< Toggle/Like >>
<head>
    <style>
        .is-loading{
            background-color: red;
        }
    </style>
</head>

<div id="root">
    <button :class="{ 'is-loading' : isLoading }" @click="toggleClass">Click Me</button>
</div>

<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#root',

        data: {
            isLoading: false
        },

        methods: {
            toggleClass(){
                this.isLoading = true;
            }
        },
    });
</script>
-----------------------------------------------------------------------------
<< Task|List|Computed >>
<head>
    <style>

    </style>
</head>

<div id="root">
    <h1>All Tasks</h1>

    <ul>
        <li v-for="task in tasks" v-text="task.description"></li>
    </ul>

    <h1>Incomplete Tasks</h1>

    <ul>
        <li v-for="task in incompleteTasks" v-text="task.description"></li>
    </ul>
</div>

<script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

<script>
    var app = new Vue({
        el: '#root',

        data: {
            tasks: [
                { description: 'Co to the store', completed: false},
                { description: 'Co to supermarket', completed: true},
                { description: 'Do homework', completed: true},
                { description: 'Wash dishes', completed: true},
                { description: 'Doing exersice', completed: true},
                { description: 'Writing Code', completed: true},
                { description: 'Listen to music', completed: false},
            ]
        },

        computed: {
            incompleteTasks() {
                return this.tasks.filter(task => ! task.completed);
            }
        }
    });
</script>

Vue.component('task',{
template: '<li>fo</li>'
});

new Vue({
el: '#root'
});


