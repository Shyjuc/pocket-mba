import React from 'react';
import './ContactForm.css';
import emailjs from 'emailjs-com';
import { Form, Input, TextArea, Button } from 'semantic-ui-react';
import Swal from 'sweetalert2';

    const SERVICE_ID = "service_0l7y702";
    const TEMPLATE_ID = "template_quojd8s";
    const USER_ID = "VI_xb6dyab74QPnkm";

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
      <div className="section-title">
          <h2>CONTACT US</h2>
          <h3>#Business Plan #Investor Meeting #Startup Events</h3>
        </div>
    <div className="ContactForm">
      <Form onSubmit={handleOnSubmit}>
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