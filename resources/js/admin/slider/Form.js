import AppForm from '../app-components/Form/AppForm';

Vue.component('slider-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                text:  this.getLocalizedFormDefaults() ,
                activated:  false ,
                is_published:  false ,
                link1:  '' ,
                link2:  '' ,

            },
            mediaCollections: ['slider'],
        }

    }

});
