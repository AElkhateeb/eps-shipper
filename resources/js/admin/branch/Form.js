import AppForm from '../app-components/Form/AppForm';

Vue.component('branch-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                location:  '' ,
                name:  this.getLocalizedFormDefaults() ,
                governrate:  this.getLocalizedFormDefaults() ,
                is_published:  false ,
                manger:  '' ,
                
            }
        }
    }

});