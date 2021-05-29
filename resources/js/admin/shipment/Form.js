import AppForm from '../app-components/Form/AppForm';

Vue.component('shipment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                weight:  '' ,
                pkg_num:  '' ,
                status:  '' ,
                published_at:  '' ,
                end_at:  '' ,
                prod_kind:  '' ,
                prod_price:  '' ,
                way_id:  '' ,
                from_user_id:  '' ,
                to_user_id:  '' ,
                pay_way:  '' ,
                
            }
        }
    }

});