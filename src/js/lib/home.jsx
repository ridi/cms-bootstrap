import React from 'react';
import ReactDOM from 'react-dom';
import { CmsMenu } from '@ridibooks/cms-sdk';

ReactDOM.render(
  <CmsMenu endPoint="http://localhost"/>,
  document.getElementById('root'),
);
