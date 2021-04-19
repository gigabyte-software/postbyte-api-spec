import SwaggerUI from 'swagger-ui'
import 'swagger-ui/dist/swagger-ui.css';

const spec = require('./postbyte-api-spec-swagger.yaml');

const DisableTryItOutPlugin = function() {
  return {
    statePlugins: {
      spec: {
        wrapSelectors: {
          allowTryItOutFor: () => () => false
        }
      }
    }
  }
}

const ui = SwaggerUI({
  spec,
  dom_id: '#swagger',
  deepLinking: true,
  plugins: [
    DisableTryItOutPlugin
  ]
});

ui.initOAuth({
  appName: "PostByte API Specification",
  // See https://demo.identityserver.io/ for configuration details.
  clientId: 'implicit'
});
