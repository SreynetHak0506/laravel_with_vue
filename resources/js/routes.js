
import User from './components/User.vue';
import Comments from './components/Comments.vue';
import AllPost from './components/post/AllPost.vue';
import AddPost from './components/post/AddPost.vue';
import EditPost from './components/post/EditPost.vue';
// import usecome from './vuex/usecome.vue';
// import HomePage from './components/HomePage';

 
export const routes = [
    {
            path: '/user',
            name: 'user',
            component: User
        },
        // {
        //     path: '/usecome',
        //     name: 'usecome',
        //     component: usecome
        // },
        {
            path: '/comment',
            name: 'comment',
            component: Comments
        },
        {
            path: '/',
            name: 'post',
            component: AllPost
        },
        {
            path: '/add',
            name: 'add',
            component: AddPost
        },
        {
            path: '/edit/:id',
            name: 'edit',
            component: EditPost
        },
        // {
        //     path: '/home',
        //     name: 'home',
        //     component: HomePage
        // }
];