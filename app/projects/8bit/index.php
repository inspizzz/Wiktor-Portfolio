<!-- blog post type of format -->
<div id="main">
    <div class="heading">
        <h1> 8-Bit Computer! </h1>
    </div>

    <div class="overview">
        <p>Welcome to my 8 bit computer project! Over last summer I started researching into how 8 bit computers could potentially function and decided to start a long term project learning about and eventually assembling one!</p>
        <p>Since beginning the project officially on the 11th October 2023, I am going to be updating this page with recent successes and difficulties encountered with this project.</p>
    </div>

    <section class="post">
        <div class="post-heading">
            <h2> Our First Meeting! </h2>
            <p> 11th October 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> To kick off our project I organised a team meeting where we went through the details of the project and exploring some of the parts we are going to be using. I got everyone to pick a different chip and explore what it does as well as its applicability to the 8-bit computer. Afterwards we looked at assembling an A-stable clock mechanism using the 555 timer ic chip and successfully managed to get two prototypes of this working. The device we built had a built in potentiometer that allowed us to vary the speed of the pulses to be quicker or slower and to see this we placed an LED with a current limiting resistor at the output.</p>
                <p> I felt that this session was extremely positive as we became more comfortable with out setting in the laboratory but also got to know each other better and apply creativity to build a piece of technology that would fundamentally be used within the computer.
            </div>

            <!-- slideshow -->
            <div class="post-images">
                <img src="/resources/projects/8bit/blog1/collaborating.jpg" />
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Session 2 - Start Clock </h2>
            <p> 18th October 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p>After my first successful meeting last week I was happy to invite everyone for the next session! My plans for today were to familiarise us with how exactly the clock works and what components help complete desired functionality and in what way. We looked over my notes and understood the ins and outs of the 555 timer, a key component in the clocks inner workings, and the use of logic gates (74LS04, 74LS08 and 74LS32).</p>
                <p>The clock architecture I decided to go for was one which allows the user to switch between two modes. The first mode being automatic and the second is a button which the user may toggle through each clock pulse, click by click. The benefits of this is that when debugging the computer, this will come in incredibly useful discovering faulty components and connections.  </p>
                <p>We have also had a change of scenery too! I attended a talk by Chris Sum at Tech Exeter and met someone who works at the university! She works in a technology centred creative space and has access to a whole heap of cool micro controllers and sensors as well as creative diy tools. I have been very fotunate to have meet her and moving forward we have come to an agreement that our team may use the space for the foreseable future! This room is incredible and provides us with an amazing space to learn and get hands on with any technology related project that anyone here at the university may be working on </p>
                <p>In conclusion, today our team managed to start building two clock modules. I felt really positive about today and sure that everyone grasped a much better understanding of how the clock works in a fundamental level beyond just the structure of the chip. </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
                <img src="/resources/projects/8bit/blog2/collaborating.jpg" />
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Personal - Thinking about the registers </h2>
            <p> 1th November 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> During this week most of the people attending the workshops were away so I decided to do some extra work learning about the next steps in the project. </p>
                <p> In order for the processor to be able to store temporary 8 bit data a register is required. The purpose of it is to temporarily store any sort of sequence of bits that can only be 8 bits long. This may be 8 bits of data relating to an address, instruction, or even data!</p>
                <p> The register is made up of 8 D-Type flip flops. Each flip flop is used to store a bit of data which fundamentally is constructed using a latching mechanism. Such mechanism may be achieved with the use of nand gates and a clock signal. </p>
                <p> In order to understand the inner working of the register I decided to build a 1 bit register as can be seen in the image. It uses logic to decide when to store the input data and also has an sr-latch which is used to store the value while there is power. </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
                <img src="/resources/projects/8bit/personal/1bit-memory.jpg" />
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Session 3 - Finish Clock </h2>
            <p> 8th November 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> We have had a bit of a break as most of the people attending my workshops went away for reading week ( a time when lectures are put on pause, similar to half term ). Since my last workshop my plan for this one was to hopefully be able to complete the clock and begin to learn about the next steps in the project. </p>
                <p> Today we finished creating two fully working clock circuits! This is extremely exciting as it shows all the hard work we put into this project so far. There were some updates I had to make to the circuit diagrams due to some missing connections however my team was able to efficiently capture what was going wrong and solve this by implementing a solution extremely efficiently.</p>
                <p> Now that we have two clocks, we will be moving onto learning about the bus and how registers may interact with it. </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
                <video width="320" height="240" controls>
                    <source src="/resources/projects/8bit/blog3/clock.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Personal - Register Build </h2>
            <p> 8th November 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> Out of curiosity I assembled a clock module at home as well as two registers interconnected using a bus. I wanted to see if I could transfer some data between registers and it was successful! </p>
                <p> The registers make use of the 74LS245 chip which allows for bus integration by using a line of tri-state logic inside of the chip either reading from the bus or writing to the bus. This chip allows for easy communication between computer components as well as isolating components when not in use. </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
                <video width="320" height="240" controls>
                    <source src="/resources/projects/8bit/personal/clock.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Session 4 - Start Register </h2>
            <p> 15th November 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> This week, we recapped what we have achieved the few previous weeks and took a look at the documentation I am writing up to understand what we will be approaching next </p>
                <p> I have pre-built two registers in advance of the workshop, this was extremely useful for understanding the connections between chips and how they related to each other. After conceptually understanding the way the 74LS173 chip stores data using D Flip Flops, we began to assemble the registers in teams of 2 </p>
                <p> This week we decided to come along to the open design session which is open to anyone developing projects of their own. We met many cool people at this event while also being able to complete about half of the first register. What caught my attention was one of the guys high resolution ( in the legal range ) infrared camera project and we were able to identify the heat signatures of our power source chip. </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
            <img src="/resources/projects/8bit/blog4/register_build.jpg" />
            </div>
        </div>
    </section>

    <section class="post">
        <div class="post-heading">
            <h2> Session 5 - Finish First Register </h2>
            <p> 22nd November 2023 </p>
        </div>

        <div class="post-body">
            <div class="post-text">
                <p> This week we finished building the first register. As of today both registers have been completed, however one was experiencing connectivity issues likely caused by a short wire as when we pressed on the mess of cables the connection began to work again. </p>
                <p> Having two registers built by the team and two built by myself we decided to move forward with the project and take a look at the next steps which are either looking into the ALU, Instruction Counter or Random Access Memory. I believe that looking into the ALU, half adders and full adders would be quite interesting so that is what we are going to do in the following weeks. </p>
                <p> </p>
            </div>

            <!-- slideshow -->
            <div class="post-images">
            <img src="/resources/projects/8bit/blog5/register_complete.jpg" />
            </div>
        </div>
    </section>
</div>