import AppForm from '../app-components/Form/AppForm';

Vue.component('package-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                weight:  '' ,
                number:  '' ,
                is_published:  false ,
                
            }
        }
    }

});