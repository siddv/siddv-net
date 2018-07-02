<template>
  <div>
  
  <page-title
    title="Quartz"
    subtitle="Emotions in flux"/>

  <Youtube vid="79yq483MoUg"/>

    <section class="section"> 
      <div class="container content sv__copy-block">
        <p>
          Quartz was inspired in part by services and sites such as <a href="http://www.omegle.com" target="_blank">Omegle</a> and <a href="http://www.chatroulette.com" target="_blank">Chatroulette</a>. These services connect two strangers and allow them to communicate via text, video, and audio. We wanted to explore the idea of '<a href="https://www.youtube.com/watch?v=pIwToj3p3vM" target="_blank">single-serving relationships</a>'. 
        </p>
        <p>
          We wanted to emulate the kind of thing Omegle and Chatroulette did, but over a different medium. We chose the telephone. We set out to create a project that connects two strangers to each other on the phone and.
        </p>
        <p>
          Using Node.js and <a href="http://www.twilio.com/" target="_blank">Twilio</a>, we built a system that programatically initiates a conference call between two given nummbers.
        </p>
      </div>
    </section>

    <section class="section"> 
      <div class="container">
        <img src="~/assets/images/portfolio/quartz/twilio.png" />
      </div>
    </section>

    <section class="section"> 
      <div class="container content sv__copy-block">
        <p>
          This worked pretty well. We established a goal at this point. We wanted to have a physical phone that individuals could approach. As the user came within proximity the phone was to ring. Once the user picked up the phone, it would ring a random number from a list - connecting the individual with someone random. We needed to source these numbers so we set up a web form on my server where individuals could enter their number for the project - we posted this on our Twitters, Facebooks and generally spread the link around to gain numbers. The numbers were added to a database. The script was updated to output a random number from our database as the second number to connect (in response.xml). The first number would be the physical phone we wanted individuals to interact with. 
        </p>
      </div>
    </section>

    <section class="section"> 
      <div class="container">
        <img src="~/assets/images/portfolio/quartz/phone.jpg" />
      </div>
    </section>

    <section class="section"> 
      <div class="container content sv__copy-block">
        <p>
          We began constructing the physical phone. This comprimised of:
        </p>
        <ul>
          <li>An Arduino
            <ul>
              <li>We hooked up a WiFi-enabled Arduino to an ultrasonic sensor. When something got close enough for the ultrasonic sensor to pick up, the Arduino sent a signal (over MQTT) to the Node.js script, triggering the system.</li>
            </ul>
          </li>
          <li>A mobile phone
            <ul>
              <li>Once the system triggered, the script would call this phone, causing it to ring.</li>
            </ul>
          </li>
        </ul>
        <p>
          We housed all this inside a wooden dummy phone we constructed. We also added a 'retro' handsfree handset, giving off the overall appearence of a proper land-line phone.
        </p>
        <p>
          We deployed this in a cafe, setting the phone on a plinth. We got a couple of pretty cool conversations, that can be heard in the video above.
        </p>
      </div>
    </section>

    <section class="section"> 
      <div class="container content sv__copy-block">
        <p>
          We took the entire system online in the end. Effectively a user calls a number, they are then connected to a random number in the database. Their own number is also automatically added to the database. The project, which is currently live, can be checked out here: <a href="http://quartz.jamiepat.es" target="_blank">Quartz</a>
        </p>
      </div>
    </section>
  </div>
</template>

<script>
import Youtube from '~/components/Youtube'
export default {
  components: {
    Youtube
  }
}
</script>
