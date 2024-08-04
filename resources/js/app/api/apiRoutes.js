const userApi = '/user';

const apiRoutes = {

    login: userApi + '/user/login',
    register: userApi + '/user/register',
    forgot: userApi + '/user/forgot',
    reset: userApi + '/user/reset',

    profile: userApi + '/admin-profile/details',
    profileUpdate: userApi + '/admin-profile/update',
    changePassword: userApi + '/admin-profile/update/password',
    logout: userApi + '/admin-profile/logout',

    blogs: userApi + '/blogs',

    categories: userApi + '/categories',

}

export default apiRoutes;
