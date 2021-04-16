import SwaggerUI from 'swagger-ui'
import 'swagger-ui/dist/swagger-ui.css';

const spec = require('./postbyte-api-spec-swagger.yaml');

const ui = SwaggerUI({
  spec,
  dom_id: '#swagger',
  deepLinking: true,
});

ui.initOAuth({
  appName: "PostByte API Specification",
  // See https://demo.identityserver.io/ for configuration details.
  clientId: 'implicit'
});
