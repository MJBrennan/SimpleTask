
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data :{
    	name : '',
    	image : '',
        email : '',
        address_1 : '',
        address_2 : '',
        country : '',
        eircode: '',
        password : '',

    },
    methods :{


    	 onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
    	submit:function()
    	{
    		let inst = this;

            if(inst.name == ''||inst.image == ''||inst.email == '' ||inst.address_1 == ''||inst.address_2 == ''||inst.country == ''||inst.eircode == ''||inst.password == '')
            {

                alert("Please make sure all fields are filled in!");
                return;
            }

		    axios.post('/processusers', {

            name: inst.name,
            email: inst.email,
            address_1: inst.address_1,
            address_2: inst.address_2,
            eircode: inst.eircode,
            country: inst.country,
            password: inst.password,
            image: inst.image
            
		 
		  })
		  .then(function (response) {

		    if(response.data == "Done"){


                alert("Details Saved!");
                window.location.reload();


            }

		  })
		  .catch(function (error) {
		    console.log(error);
		  });
    	}
    }
});
