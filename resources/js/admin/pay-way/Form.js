import AppForm from '../app-components/Form/AppForm';

Vue.component('pay-way-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  this.getLocalizedFormDefaults() ,
                fees:  '' ,
                sale:  '' ,
                enabled:  false ,
                
            }
        }
    }

});