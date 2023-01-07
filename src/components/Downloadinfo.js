import React from 'react'
import {
    Grid,
    Header,
    Button,
    Segment,
  } from 'semantic-ui-react'

function Downloadinfo() {
  return (
    <div>
    <Segment style={{ padding: '0em', borderTop:'2px solid #f2f2f2' }} vertical>
      <Grid celled='internally' columns='equal' stackable>
        <Grid.Row textAlign='left'>
          <Grid.Column style={{ paddingBottom: '5em', paddingTop: '5em' }}>
            <Header as='h3' style={{ fontSize: '2em' }}>
              Documentation
            </Header>
            <p style={{ fontSize: '1.33em' }}>To design your pitch deck, there isn't really a manual or set of guidelines. This documentation was created, considering the most relevant advancements and trends.</p>
            <p style={{ fontSize: '1.33em' }}>However, your slides should be designed with your investment objective in mind as well as facts on the market and industry. It is also subject to adjustment depending on the investors and context in which it is utilised.</p>
            <Button size='small'>Read more</Button>
          </Grid.Column>
          <Grid.Column style={{ paddingBottom: '5em', paddingTop: '5em' }}>
            <Header as='h3' style={{ fontSize: '2em' }}>
              Further Support
            </Header>
            <p style={{ fontSize: '1.33em' }}>
              Have a burning question that's not answered here? Try the Guidelines document or reach to us
            </p>
          </Grid.Column>
        </Grid.Row>
      </Grid>
    </Segment>
    </div>
  )
}

export default Downloadinfo