import React from 'react';
import './ContactForm.css';
import emailjs from 'emailjs-com';
import Request from './Request';
import { Form, Input, TextArea, Button, Grid } from 'semantic-ui-react';
import Swal from 'sweetalert2';

//Service ID: service_bdyij9p

    const SERVICE_ID = "service_bdyij9p";
    const TEMPLATE_ID = "template_xf0fo5j";
    const USER_ID = "WOwaOIEaXlaUWNvW1"; //public key

    const ContactForm = () => {
      const handleOnSubmit = (e) => {
        e.preventDefault();
        emailjs.sendForm(SERVICE_ID, TEMPLATE_ID, e.target, USER_ID)
          .then((result) => {
            console.log(result.text);
            Swal.fire({
              icon: 'success',
              title: 'Message Sent Successfully'
            })
          }, (error) => {
            console.log(error.text);
            Swal.fire({
              icon: 'error',
              title: 'Ooops, something went wrong',
              text: error.text,
            })
          });
        e.target.reset()
      };

      


  return (
    <section id="community" className="services">
      <div className="container" data-aos="fade-up">
        <Request />
    <div className="ContactForm">
      <Form onSubmit={handleOnSubmit}>

      

      <Grid columns={2} divided>
    <Grid.Row style = {{ marginBottom : 15, marginTop : 10, padding:10 }}>
      <Grid.Column>
      <select name="industry" class="ui dropdown">
        <option value="">Select your Industry</option>
        <option value="Consultancy">Consultancy</option>
        <option value="Edtech">Ed-tech</option>
        <option value="Fintech">Fin-tech</option>
        <option value="Health-tech">Health-tech</option>
        <option value="E-Commerce">E-Commerce</option>
      </select>
      </Grid.Column>
      <Grid.Column>
      <select name="item" class="ui dropdown">
        <option value="">I am Looking for</option>
        <option value="deck-template">Pitch Deck template for my Startup</option>
        <option value="create-deck">Assistance to create our Pitch deck</option>
        <option value="Pitch deck kit">Pitch deck kit</option>
        <option value="Founder Kit">Founder Kit</option>
        <option value="Business Launch Kit">Business Launch Kit</option>
      </select>
      </Grid.Column>
    </Grid.Row>
    </Grid>

      

        <Form.Field
          id='form-input-control-last-name'
          control={Input}
          label='Name'
          name='user_name'
          placeholder='Name…'
          required
          icon='user circle'
          iconPosition='left'
        />
        <Form.Field
          id='form-input-control-email'
          control={Input}
          label='Email'
          name='user_email'
          placeholder='Email…'
          required
          icon='mail'
          iconPosition='left'
        />
        <Form.Field
          id='form-input-control-phone'
          control={Input}
          label='Phone'
          name='user_phone'
          placeholder='Phone number…'
          required
          icon='phone'
          iconPosition='left'
        />
        <Form.Field
          id='form-textarea-control-opinion'
          control={TextArea}
          label='Message'
          name='user_message'
          placeholder='Message…'
          required
        />
        <Button type='submit' color='green'>Submit</Button>
      </Form>
    </div>
    </div>
    </section>
  );
}
export default ContactForm;