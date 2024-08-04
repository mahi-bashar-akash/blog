const userApi = '/user';

const apiRoutes = {

    login: userApi + '/auth/login',
    register: userApi + '/auth/register',
    forgot: userApi + '/auth/forgot',
    reset: userApi + '/auth/reset',

    profile: userApi + '/admin-profile/details',
    profileUpdate: userApi + '/admin-profile/update',
    changePassword: userApi + '/admin-profile/update/password',
    logout: userApi + '/admin-profile/logout',

    blogs: userApi + '/blogs',

    categories: userApi + '/categories',

}

export default apiRoutes;
