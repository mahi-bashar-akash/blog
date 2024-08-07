const userApi = '/user/api';

const apiRoutes = {

    login: userApi + '/auth/login',
    register: userApi + '/auth/register',
    forgot: userApi + '/auth/forgot',
    reset: userApi + '/auth/reset',

    profile: userApi + '/profile/details',
    profileUpdate: userApi + '/profile/update',
    changePassword: userApi + '/profile/update/password',
    logout: userApi + '/profile/logout',

    blogs: userApi + '/blogs',

    categories: userApi + '/categories',

}

export default apiRoutes;
