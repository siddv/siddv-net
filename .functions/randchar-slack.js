exports.handler = async (event) => {

  const randchar = {
    total: 0,
    rolls: []
  }

  for(let i=0;i<=5;i++) {
    let d6s = [];
    let rollTotal;

    for(let a=0;a<=3;a++) {
      d6s.push(Math.ceil(Math.random() * 6))
    }    

    rollTotal = d6s.reduce((a, b) => a + b, 0);
    d6s.sort().splice(0, 1);
    randchar.rolls.push(rollTotal);
    randchar.total += rollTotal;
  }

  return {
    response_type: "in_channel",
    text: `Total: *${randchar.total}*
  Rolls: *${randchar.rolls.join('*, *')}*`
  }

};
  