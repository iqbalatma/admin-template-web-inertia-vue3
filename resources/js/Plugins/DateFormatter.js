export default {
    install(app) {
        app.config.globalProperties.$formatDate = (dateString) => {
            const options = { year: 'numeric', month: 'long', day: 'numeric' }
            return new Date(dateString).toLocaleDateString(undefined, options)
        }
    },
}
