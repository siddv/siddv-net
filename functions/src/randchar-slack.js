exports.handler = async (event, context) => {
  
  const randchar = {
    total: 0,
    rolls: [],
    rollDetails: [],
  }
  let details = '';

  for(let i=0;i<=5;i++) {
    let d6s = [];
    let rollTotal;
    let lowestNumber;

    for(let a=0;a<=3;a++) {
      d6s.push(Math.ceil(Math.random() * 6))
    }    

    lowestNumber = d6s.sort().splice(0, 1);
    rollTotal = d6s.reduce((a, b) => a + b, 0);

    randchar.rollDetails.push({
      total: rollTotal,
      details: `[~${lowestNumber.join()}~, *${d6s.join('*, *')}*] = *${rollTotal}*`
    }) 
    randchar.rolls.push(rollTotal);
    randchar.total += rollTotal;
  }

  randchar.rollDetails.sort((a,b) => b.total > a.total;
  randchar.rollDetails.forEach(val => details += `${val.details}\n`)

  return {
    headers: {
      "content-type": "application/json"
    },
    statusCode: 200,
    body: JSON.stringify({
      response_type: "in_channel",
      text: `Total: *${randchar.total}*\nRolls: *${randchar.rolls.sort((a,b) => b>a).join('*, *')}*`,
      attachments: [
        {
          text: `${details}`
        }
      ]
    })
  };

};