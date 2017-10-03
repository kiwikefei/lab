// note: you can't use v-model unless you first declare it.
class Errors {
    constructor() {
        this.errors = {}
    }
    get(field) {
        if (this.errors[field]){
            return this.errors[field][0];
        }
    }
    record(errors){
        this.errors = errors;
    }
    clear(field){
        delete this.errors[field];
    }
    has(field){
        return this.errors.hasOwnProperty(field);
    }
    any(){
        return Object.keys(this.errors).length > 0;
    }
}
new Vue({
    el: '#app',

    data: {
        title: '', 
        content: '',
        errors: new Errors,
    },
    methods: {
        onSubmit() {
            axios.post('/notes', this.$data)
                 .then(this.onSuccess)
                 .catch(error => this.errors.record(error.response.data.errors));
                //  .catch(error => {
                //     console.log(error.response.data);
                //  });

        },
        onSuccess(response){
            alert(response.data.message);
            this.title = '';
            this.content = '';
        },
        render(){
            axios.get('/notes')
        },
        test(){
            alert('testing');
        }
    }
});