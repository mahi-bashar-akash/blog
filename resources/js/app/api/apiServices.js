let headers = {};

const apiService = {

    headerContent: {
        'Content-Type': 'application/json; charset=utf-8',
    },

    mediaHeaderContent: {
        "Content-Type": "multipart/form-data",
    },

    clearErrorHandler() {
        let group = document.querySelectorAll('.form-group');
        group.forEach((e) => {
            let error = e.querySelector('.error-report')
            if(error != null) {
                error.classList.remove('error-report');
                error.textContent = '';
            }
        })
    }

}

export default apiService;
