import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

function Showcase() {
  const sectionRef = useRef<HTMLDivElement>(null);
  const textRef = useRef<HTMLHeadingElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      
      // 🔥 PIN SECTION
      ScrollTrigger.create({
        trigger: sectionRef.current,
        start: "top top",
        end: "+=100%",
        pin: true,
        scrub: true,
      });

      // 🔥 TEXT ANIMATION
      gsap.fromTo(
        textRef.current,
        { y: 100, opacity: 0 },
        {
          y: -100,
          opacity: 1,
          scrollTrigger: {
            trigger: sectionRef.current,
            start: "top center",
            end: "bottom top",
            scrub: true,
          },
        }
      );

    });

    return () => ctx.revert();
  }, []);

  return (
    <section ref={sectionRef} style={styles.section}>
      <h1 ref={textRef} style={styles.text}>
        My Work
      </h1>
    </section>
  );
}

export default Showcase;

const styles = {
  section: {
    height: "100vh",
    background: "#000",
    color: "#fff",
    display: "flex",
    justifyContent: "center",
    alignItems: "center",
    overflow: "hidden",
  },
  text: {
    fontSize: "6rem",
    fontWeight: 700,
  },
};