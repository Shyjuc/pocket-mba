import HeroSlider, { Overlay, Slide, MenuNav } from "hero-slider";
import Wrapper from "./sections/Wrapper";
import Title from "./sections/Title";
import Subtitle from "./sections/Subtitle";
import Button from "./sections/Button";

const bogliasco = "../assets/img/slider-bg.png";
const countyClare = "../assets/img/slider-bg2.png";
const giauPass = "../assets/img/slider-bg2.png";

export default function BasicSlider() {
  return (
    <HeroSlider
      height={"100vh"}
      autoplay
      controller={{
        initialSlide: 1,
        slidingDuration: 500,
        slidingDelay: 100,
        onSliding: (nextSlide) =>
          console.debug("onSliding(nextSlide): ", nextSlide),
        onBeforeSliding: (previousSlide, nextSlide) =>
          console.debug(
            "onBeforeSliding(previousSlide, nextSlide): ",
            previousSlide,
            nextSlide
          ),
        onAfterSliding: (nextSlide) =>
          console.debug("onAfterSliding(nextSlide): ", nextSlide)
      }}
    >
      <Overlay>
        <Wrapper>
          <Title>Build Your Next Business</Title>
          <Subtitle>
           Start with our Pitchdeck documentation and templates.
          </Subtitle>
          <Button>Get Started Now</Button>
        </Wrapper>
      </Overlay>

      <Slide
        shouldRenderMask
        label="Discover PocketMBA startup blog"
        background={{
          backgroundImageSrc: giauPass
        }}
        
      />

      <Slide
        shouldRenderMask
        label="Download Business Model templates"
        background={{
          backgroundImageSrc: bogliasco
        }}
      />

      <Slide
        shouldRenderMask
        label="Kickstart Your Business and Raise Capital"
        background={{
          backgroundImageSrc: countyClare
        }}
      />

      

      <MenuNav />
    </HeroSlider>
  );
}
