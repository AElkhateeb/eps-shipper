import AppForm from '../app-components/Form/AppForm';

Vue.component('receivere-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                
            }
        }
    }

});