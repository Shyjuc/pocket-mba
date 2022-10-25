import React from 'react'
import ArticleItem from './ArticleItem'

function Article() {
  return (
    <>
    <section id="community" className="services">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Getting Started - Business Plan</h2>
          <h3>This page is an overview of the necessary slides required in your Pitch deck.</h3>
        </div>

        <div className="row content">
            <ArticleItem 
            img='assets/img/introduction.png'
            name='How to design Introduction Slide in Pitch Deck?'
            detail='Ready to Use Startup Templates, Lessons, Market Insights to run your business. Collection of 200+ marketing campaign posters.'
            path="/how-to-design-intro-slide"
            />
            <ArticleItem
            img='assets/img/problem.png'
            name='How to write Problem Statement in Pitch Deck'
            detail='Insightful database and quizzes for employee engagement and training to understand the competitive dynamics of your industry.'
            path="/how-to-design-problem-slide"
            />
            <ArticleItem
            img='assets/img/solution.png' 
            name='How to write Solution Statement in Pitch Deck'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/how-to-design-solution-slide"
            />
            <ArticleItem
            img='assets/img/market.png' 
            name='How to include your Market Info in Pitch Deck?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/how-to-explain-your-market"
            />
            <ArticleItem
            img='assets/img/traction.png' 
            name='How to design Traction slide in Pitch Deck?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/how-to-speak-about-traction"
            />
            <ArticleItem
            img='assets/img/business-model.png' 
            name='How to present business model in your Pitch Deck?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/what-is-your-business-model"
            />
            <ArticleItem
            img='assets/img/competition.png' 
            name='How to present competition in your Pitch Deck?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/how-to-describe-competition-in-your-market"
            />
            <ArticleItem
            img='assets/img/investment.png' 
            name='How to present funding requirement in your Pitch Deck?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/how-to-make-a-deal-in-pitchdeck"
            />
            <ArticleItem
            img='assets/img/go-to-market.png' 
            name='How to present your Go-to-Market Strategy?'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/go-to-market-strategy"
            />
              <ArticleItem
            img='assets/img/metrics.png' 
            name='Key metrics you should include in Your Business Plan presentation.'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            path="/startup-key-metrics"
            />
            
        </div>

      </div>
    </section>
    </>
  )
}

export default Article