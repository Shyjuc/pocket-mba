import React from 'react'

function Faq() {
  return (
    <>
    <section id="faq" className="faq section-bg">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div className="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" className="collapse" data-bs-target="#faq-list-1">How can I download Founder's Kit? <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" className="collapse show" data-bs-parent=".faq-list">
                <p>
                  You can select the version you need from our website. You wil be redirected to our store where you can make paymnet and download our product.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" data-bs-target="#faq-list-2" className="collapsed">What are the major difference in Version 1 and Version 2? <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" className="collapse" data-bs-parent=".faq-list">
                <p>
                  Founder's Kit V.2 is a complete collection of Pitch Deck Templates, Work Sheets, Check Lists and Marketing Campaign posts. These documents are designed to assist startup founder and self employers to plan, manage and delegate their beginning level activities while working on a new business idea. Founder's Kit Version 1.0 is a collection of selected documents and it doesn't contain any marketing templates.  and Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" data-bs-target="#faq-list-3" className="collapsed">How Founder's Kit pitch decks are diffrent from normal deck?<i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" className="collapse" data-bs-parent=".faq-list">
                <p>
                  We have carefully addressed various stages and requirements of creating a Pitch deck. Custom designed slide layout for business model presentation. Detailled guidelines and reference has been provided with each slide.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" data-bs-target="#faq-list-4" className="collapsed">How can I see sample Documents? <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" className="collapse" data-bs-parent=".faq-list">
                <p>
                  Download our Beginner's Kit sample version.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" data-bs-target="#faq-list-5" className="collapsed">How will I receive latest modiffications and updates? <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" className="collapse" data-bs-parent=".faq-list">
                <p>
                  Our subscribers will be a part of our knowledge community in Facebook, WhatsApp and Telegram. You will also notified via email with links to download the latest resource added as part of Kit.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i className="bx bx-help-circle icon-help"></i> <a href="/Home" data-bs-toggle="collapse" data-bs-target="#faq-list-5" className="collapsed">Can I modify these documents? <i className="bx bx-chevron-down icon-show"></i><i className="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" className="collapse" data-bs-parent=".faq-list">
                <p>
                  All template documents in including pitch deck, company profile, work sheets, word documents etc can be modified as per your need. There are reference documents also like check lists which need to be printed document to track your tasks and activities
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    </>
  )
}

export default Faq