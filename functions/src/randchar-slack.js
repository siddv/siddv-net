exports.handler = async (event, context) => {
  
  const randchar = {
    total: 0,
    rolls: [],
    rollDetails: [],
  }

  for(let i=0;i<=5;i++) {
    let d6s = [];
    let rollTotal;
    let lowestNumber;

    for(let a=0;a<=3;a++) {
      d6s.push(Math.ceil(Math.random() * 6))
    }    

    lowestNumber = d6s.sort().splice(0, 1);
    rollTotal = d6s.reduce((a, b) => a + b, 0);

    randchar.rollDetails.push(`*${rollTotal}*: [*${d6s.join('*, *')}* ${lowestNumber.join()}]`) 
    randchar.rolls.push(rollTotal);
    randchar.total += rollTotal;
  }

  return {
    headers: {
      "content-type": "application/json"
    },
    statusCode: 200,
    body: JSON.stringify({
      response_type: "in_channel",
      text: `Total: *${randchar.total}*\nRolls: *${randchar.rolls.join('*, *')}*`,
      attachments: [
        {
          text: `${randchar.rollDetails.join('\n')}`
        }
      ]
    })
  };

};