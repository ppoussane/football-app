<template>
    <div class="row">
        <div class="col-sm-12" v-show="view == 'table'">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Players <button class="btn btn-primary btn-sm pull-right" @click.prevent="view = 'form'">+</button>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Nick Name</th>
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Height</th>
                                    <th>Birthday</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(player, index) in players">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ player.name }}</td>
                                    <td>{{ player.nicName }}</td>
                                    <td><img :src="playerImage(player)" :alt="player.name" width="100" class="img-responsive"></td>
                                    <td>{{ player.position }}</td>
                                    <td>{{ player.height }}</td>
                                    <td>{{ player.birthDate }}</td>
                                    <td>{{ player.country.name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12" v-show="view == 'form'">
            <div class="panel panel-primary">
                <div class="panel-heading">Player Form <button class="btn btn-danger btn-sm pull-right" @click.prevent="view = 'table'">x</button></div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <form action="#" method="POST" @submit.prevent="savePlayer">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" v-model="player.name" />
                            </div>

                            <div class="form-group">
                                <label for="nicName">Nick Name</label>
                                <input type="text" name="nicName" class="form-control" id="nicName" v-model="player.nicName" />
                            </div>

                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" name="position" class="form-control" id="position" v-model="player.position" />
                            </div>

                            <div class="form-group">
                                <label for="birthDate">Birthday</label>
                                <input type="date" name="birthDate" class="form-control" id="birthDate" v-model="player.birthDate" />
                            </div>

                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="number" name="height" class="form-control" id="height" v-model="player.height" />
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country" v-model="player.country_id">
                                    <option v-for="country in countries" :value="country.id">{{ country.name }}</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image" @change="formImage" />
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" @click.prevent="savePlayer">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            countries: { required: true },
        },
        data() {
            return {
                players: [],
                view: 'table',
                player: {
                    name: '',
                    nicName: '',
                    position: '',
                    height: 170,
                    birthDate: '',
                    country_id: '',
                    image: {},
                },
            }
        },

        methods: {
            formImage(e) {
                this.player.image = e.target.files[0];
            },
            savePlayer() {
                let form = new FormData();
                form.append('image', this.player.image);
                form.append('name', this.player.name);
                form.append('nicName', this.player.nicName);
                form.append('birthDate', this.player.birthDate);
                form.append('position', this.player.position);
                form.append('height', this.player.height);
                form.append('country_id', this.player.country_id);

                axios.post('/demo/player', form)
                    .then(response => {
                        this.players.push(response.data);
                        this.view = 'table';
                    })
                    .catch(errors => console.log(errors));
            },

            playerImage(player) {
                return 'storage/' + player.image;
            },

            loadPlayers() {
                axios.get('/demo/players')
                    .then(response => this.players = response.data)
                    .catch(errors => console.log(errors));
            }
        },

        created() {
            this.loadPlayers();
        }
    }
</script>