import AppForm from '../app-components/Form/AppForm';

Vue.component('withdrawal-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                price:  '' ,
                status:  this.getLocalizedFormDefaults() ,
                in_out:  false ,
                enabled:  false ,
                from_id:  '' ,
                to_id:  '' ,
                way_id:  '' ,
                
            }
        }
    }

});