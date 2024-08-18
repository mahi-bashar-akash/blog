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
    },

    /*ERROR HANDLER*/
    ErrorHandler(error) {
        Object.entries(error).forEach(([i, v]) => {
            const inputElement = document.querySelector(`[name="${i}"]`);
            const errorReport = inputElement?.closest('.form-group')?.querySelector('.error-report');
            const isInvalid = inputElement?.closest('.form-control',)?.classList.add('is-invalid-custom');
            const isInvalidText = inputElement?.closest('.form-textarea',)?.classList.add('is-invalid-custom');
            if (errorReport) errorReport.textContent = v;
        });
    },

}

export default apiService;
