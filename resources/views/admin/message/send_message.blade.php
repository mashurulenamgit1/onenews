@extends('admin.admin_layouts')
@section('admin_content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    
  </div>
</div>

<div class="panel">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-10">
<div>
<h3 style="float: left; background-color: black;"><a href="{{route('messages.five')}}">All Messages
@include('admin.message.message')
</a></h3>
</div>
<div id="contact-form" class="contact-form">
        <h1 class="contact-form_title">Send Message</h1>
        <div class="separator"></div>

        <form class="form" action="{{ route('store.message') }}" method="post">
            <input required name="name" v-model='contact.name' placeholder="Name" type="text" autocomplete="off">
            <input required name="subject" v-model='contact.subject' placeholder="subject" type="text" autocomplete="off">
            <input name="phone" v-model='contact.phone' placeholder="phone" type="text" autocomplete="off">
            <input required name="email" v-model="contact.email" placeholder="E-mail" type="email" autocomplete="off">
            <textarea name="message" v-model="contact.message" rows="4" placeholder="Message"></textarea>
            <input name="photo" v-model="contact.photo" placeholder="photo" type="file" autocomplete="off"><br>

           <button class="button">Send</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
    <script src="app.js"></script>
</div>
</div>
</div>

<script type="text/javascript">
    const app = new Vue({
    'el': '#contact-form',

    data: {
        contact: {
            name: '',
            email: '',
            message: '',
        },

        isSending: false
    },

    methods: {

        /**
         * Clear the form
         */ 
        clearForm() {
            for (let field in this.contact) {
                this.contact[field] = ''
            }
        },

        /**
         * Handler for submit
         */ 
        onSubmit(evt) {
            evt.preventDefault();

            this.isSending = true;

            setTimeout(() => {
                // Build for data
                let form = new FormData();
                for (let field in this.contact) {
                    form.append(field, this.contact[field]);
                }

                // Send form to server  
                this.$http.post('/app.php', form).then((response) => {
                    console.log(response);
                    this.clearForm();
                    this.isSending = false;
                }).catch((e) => {
                    console.log(e)
                });

            }, 1000);
        }
    }

});


window.app = app;
</script>



@endsection