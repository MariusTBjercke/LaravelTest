import '@/js/bootstrap';

import React from 'react';
import ReactDOM from 'react-dom';

export default function HelloReact() {
  return (
      <div>Hello React</div>
  );
}

if (document.getElementById('react')) {
  ReactDOM.render(<HelloReact />, document.getElementById('react'));
}
