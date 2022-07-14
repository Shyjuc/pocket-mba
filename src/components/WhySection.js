import React from 'react'

function WhySection() {
  return (
    <>
    <section id="why-us" className="why-us section-bg">
      <div className="container-fluid" data-aos="fade-up">

        <div className="row">

          <div className="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div className="content">
              <h3><strong>Planning to start your new business...? </strong>Why founder's Kit?</h3>
              <p>
                Founder's Kit assist you in all stages of Startup journey from Idea Validation to Product Launch
              </p>
            </div>

            <div className="accordion-list">
              <ul>
                <li>
                  <a href='/Home' data-bs-toggle="collapse" className="collapse" data-bs-target="#accordion-list-1"><span>01</span> Better Decisions, Proper Implementation <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" className="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Founders need to be very careful in the early stages of Idea validation, Market research, Prototype development and their meeting with Investors. They must know what all activities matter in this process
                    </p>
                  </div>
                </li>

                <li>
                  <a href='/Home' data-bs-toggle="collapse" data-bs-target="#accordion-list-2" className="collapsed"><span>02</span> Collect and Manage Data Effectively <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" className="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Sometimes, Your team might not put right set of effort or include right set of parameters which might affect your expected result. If you have enough data &amp; guidelines 80% of your head ache is over.
                    </p>
                  </div>
                </li>

                <li>
                  <a href='/Home' data-bs-toggle="collapse" data-bs-target="#accordion-list-3" className="collapsed"><span>03</span> Preparedness to impress your customer and investors <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" className="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our multi-purpose decks will help you to grab right set off opportunities like Govt Grants, Startup meet, acceleration program or a 
                      casual talk in an accidental opportunity to pitch before a potential investor
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div className="col-lg-5 align-items-stretch order-1 order-lg-2 img" style={{ backgroundImage: 'url("assets/img/why-us.png")' }} data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>
    </>
  )
}

export default WhySection