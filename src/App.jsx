import React from 'react';
import { useState } from '@wordpress/element';

const App = (attributes) => {
  const [value, setValue] = useState(attributes.value);
  // console.log(attributes);

  const onChangeHandler = (e) => {
    const {id, onChange} = attributes;
    onChange(id, e.target.value);
  }

  return (
    <input
      type="hidden"
      id={attributes.id}
      name={attributes.name}
      value={value.length > 0 ? value : crypto.randomUUID()}
      className="cf-number__input"
      onChange={onChangeHandler}
    />
  )
}

export default App;
