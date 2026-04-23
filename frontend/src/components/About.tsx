import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";

function About() {
  const heroRef = useRef<HTMLDivElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".char", {
        y: 120,
        opacity: 0,
        stagger: 0.03,
        duration: 1,
        ease: "power4.out",
      });

      gsap.from(".hero-sub", {
        y: 40,
        opacity: 0,
        delay: 0.6,
        duration: 1,
        ease: "power3.out",
      });

      gsap.from(".hero-image", {
        scale: 1.2,
        opacity: 0,
        duration: 1.2,
        delay: 0.3,
        ease: "power3.out",
      });
    }, heroRef);

    return () => ctx.revert();
  }, []);

  return (
    <section
      ref={heroRef}
      id="about"
      className="overflow-hidden bg-[radial-gradient(circle_at_top_left,_#1a1a2e_0%,_#0a0a0a_40%,_#000_100%)] px-6 pb-[60px] pt-[120px] text-white md:px-10 xl:px-[120px]"
    >
      <div className="mx-auto flex min-h-[calc(100vh-180px)] max-w-[1400px] flex-col items-center justify-between gap-14 lg:flex-row lg:gap-10">
        <div className="w-full flex-1 max-w-[600px]">
          <div className="mb-5 inline-block rounded-[20px] border border-[rgba(165,165,255,0.3)] px-[14px] py-[8px] text-[12px] text-[#a5a5ff]">
            • Full Stack Web Developer
          </div>

          <h1 className="text-[clamp(2.8rem,6vw,5.5rem)] font-bold leading-[1.1] tracking-[-2px]">
  
  {/* Line 1 */}
  <div>
    {"Hi, I'm".split("").map((char, i) => (
      <span key={`l1-${i}`} className="char inline-block">
        {char === " " ? "\u00A0" : char}
      </span>
    ))}
  </div>

  {/* Line 2 */}
  <div>
    {"Noman".split("").map((char, i) => (
      <span key={`l2-${i}`} className="char inline-block">
        {char}
      </span>
    ))}
  </div>

  {/* Line 3 */}
  <div>
    {"Riaz".split("").map((char, i) => (
      <span key={`l3-${i}`} className="char inline-block">
        {char}
      </span>
    ))}
  </div>

</h1>

          <p className="hero-sub mt-5 max-w-[500px] text-[1.1rem] leading-[1.6] text-[#b0b0b0]">
            I build AI agents and full-stack products that solve real problems.
            From intelligent automation to production-grade web experiences —
            I ship things that work.
          </p>

          <div className="mt-[30px] flex flex-wrap gap-[15px]">
            <button className="rounded-[10px] border-none bg-white px-5 py-3 font-semibold text-black transition-all duration-300 hover:translate-y-[-1px]">
              View My Work
            </button>

            <button className="rounded-[10px] border border-white/20 bg-transparent px-5 py-3 text-white transition-all duration-300 hover:border-white/35">
              Get in Touch
            </button>
          </div>

          <div className="mt-[30px] flex gap-5 text-[14px] text-[#888]">
            <span>⚫ GitHub</span>
            <span>LinkedIn</span>
          </div>
        </div>

        <div className="flex w-full flex-1 justify-center">
          <div className="hero-image h-[500px] w-[380px] overflow-hidden rounded-[24px] border border-white/[0.08] bg-[#111] shadow-[0_20px_60px_rgba(0,0,0,0.6)] max-sm:h-[420px] max-sm:w-full max-sm:max-w-[380px]">
            <img
              src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
              alt="Team working"
              className="h-full w-full object-cover"
            />
          </div>
        </div>
      </div>
    </section>
  );
}

export default About;