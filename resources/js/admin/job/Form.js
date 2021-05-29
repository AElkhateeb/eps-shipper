import AppForm from '../app-components/Form/AppForm';

Vue.component('job-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                text:  this.getLocalizedFormDefaults() ,
                is_published:  false ,
                
            }
        }
    }

});