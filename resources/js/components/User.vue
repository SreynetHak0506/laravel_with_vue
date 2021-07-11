<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Component</div>

                    <div class="card-body">
                       <h5> I'm  user component</h5>
                       <br>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Avatar</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr  v-for="user in users" :key="user.id">
                                <td>{{user.id}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.gender}}</td>
                                <td>{{user.avatar}}</td>
                                <td>{{user.city}}</td>
                            </tr>
                        </tbody>
                    </table>                 

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div>
        <h1>I am component user</h1>
        Current state counter is : {{$store.state.counter}}
        <Comments></Comments>
    </div>
</template>
<script>
import Comments from './Comments.vue'
    export default {
        components :{
         Comments,

        }
    //     name:'User',
    //   props: ['user'],
    //     data(){
    //         return {
    //            users:this.user
    //         }
    //     },
    //     mounted() {
    //         console.log(this.user)
    //     }
    }
</script>
