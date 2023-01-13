import React from 'react'

import {
  Grid,
  Header,
  Image,
  Segment,
} from 'semantic-ui-react'

const simpledeck = "../assets/img/simple_deck.png"

function Install() {



  const onButtonClick = () => {
    // using Java Script method to get PDF file
    fetch('Pitchdeck_Simple_startup_intro.ppt').then(response => {
        response.blob().then(blob => {
            // Creating new object of PDF file
            const fileURL = window.URL.createObjectURL(blob);
            // Setting various property values
            let alink = document.createElement('a');
            alink.href = fileURL;
            alink.download = 'Pitchdeck_Simple_startup_intro.ppt';
            alink.click();
        })
    })
}

  return (
    <div>
        <Segment style={{ padding: '4em 0em' }} vertical>
      <Grid container stackable verticalAlign='middle'>
        <Grid.Row>
          <Grid.Column width={8}>
            <Header as='h3' style={{ fontSize: '2em' }}>
            It’s super simple to us
            </Header>
            <p style={{ fontSize: '1.33em' }}>
              Just fill in your company details in custom-structured slides.
              Stand out and impress your investors.
            </p>
            <Header as='h3' style={{ fontSize: '2em' }}>
            Follow new framework and priorities
            </Header>
            <p style={{ fontSize: '1.33em' }}>
            Create from professionally designed slides using industry best practises.
            </p>
          </Grid.Column>
          <Grid.Column floated='right' width={8}>
            <Image bordered rounded size='large' src={simpledeck} />
          </Grid.Column>
        </Grid.Row>
        <Grid.Row>
          <Grid.Column textAlign='center'>
            
            <div class="ui buttons">
              <button class="ui button" onClick={onButtonClick}>Download template</button>
              <div class="or"></div>
              <a href="https://shyjuchathampalli.myinstamojo.com/product/3464345/pitch-deck-kit-for-startupsme-founders/" rel="noreferrer" target="_blank" className='ui positive button'>Buy Pitch deck kit</a>
            </div>
          </Grid.Column>
        </Grid.Row>
      </Grid>
    </Segment>
    </div>
  )
}

export default Install