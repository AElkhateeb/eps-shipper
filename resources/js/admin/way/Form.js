import AppForm from '../app-components/Form/AppForm';

Vue.component('way-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                price:  '' ,
                time:  '' ,
                enabled:  false ,
                from_id:  '' ,
                to_id:  '' ,
                
            }
        }
    }

});