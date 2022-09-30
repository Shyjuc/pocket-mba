<style type="text/css">

    .header {
      background: #8a8a8a;
    }
    
    .header .columns {
      padding-bottom: 0;
    }
    
    .header p {
      color: #fff;
      margin-bottom: 0;
    }
    
    .header .wrapper-inner {
      padding: 20px; /*controls the height of the header*/
    }
    
    .header .container {
      background: #8a8a8a;
    }
    
    .wrapper.secondary {
      background: #f3f3f3;
    }
    
    </style>
    <!-- move the above styles into your custom stylesheet -->
    
    
    <wrapper class="header" bgcolor="#8a8a8a">
      <container>
        <row class="collapse">
          <columns small="6" valign="middle">
            <h2 class="font-semibold text-xl pb-2 text-gray-800 leading-tight">
                <img src="http://127.0.0.1:8000/qr-logo.svg" style="height:35px; float:left;">
                <span style="color: #1f7d67!important; font-weight: 700; font-size: 21px;">quadrock</span>
            </h2>
          </columns>
          <columns small="6" valign="middle">
          </columns>
        </row>
      </container>
    </wrapper>
    
    <container>
    
      <spacer size="16"></spacer>
      
      <row>
        <columns>
          
          <h1>Hi, {{$user}}</h1>
          <p class="lead">You have received a proposal from {{$company}}.</p>
          <p>Please click below link for further action</p>
          <callout class="primary">
            <a href="{!! $url !!}" target="_blank">View Proposal</a>
          </callout>
    
        </columns>
      </row>
    
    </container>