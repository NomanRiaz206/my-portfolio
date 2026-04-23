import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function Projects() {
  const sectionRef = useRef<HTMLDivElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".project-card", {
        y: 120,
        opacity: 0,
        rotateX: 20,
        duration: 1,
        stagger: 0.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 80%",
        },
      });

      gsap.from(".project-card img", {
        scale: 1.3,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 80%",
        },
      });
    }, sectionRef);

    return () => ctx.revert();
  }, []);

  const handleMouseMove = (e: React.MouseEvent<HTMLDivElement>) => {
    const card = e.currentTarget;

    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * -10;
    const rotateY = ((x - centerX) / centerX) * 10;

    gsap.to(card, {
      rotateX,
      rotateY,
      scale: 1.05,
      duration: 0.4,
      ease: "power2.out",
    });

    gsap.to(card.querySelector("img"), {
      x: (x - centerX) * 0.05,
      y: (y - centerY) * 0.05,
      scale: 1.1,
      duration: 0.4,
    });
  };

  const handleMouseLeave = (e: React.MouseEvent<HTMLDivElement>) => {
    const card = e.currentTarget;

    gsap.to(card, {
      rotateX: 0,
      rotateY: 0,
      scale: 1,
      duration: 0.6,
      ease: "power3.out",
    });

    gsap.to(card.querySelector("img"), {
      x: 0,
      y: 0,
      scale: 1,
      duration: 0.6,
    });
  };

  return (
    <section
      ref={sectionRef}
      id="projects"
    className="flex min-h-screen flex-col gap-[50px] bg-[#0a0a0a] px-6 py-[120px] text-white [perspective:1000px] md:px-10 lg:flex-row xl:px-[120px]"
    >
      <div
        className="project-card w-[320px] cursor-pointer overflow-hidden rounded-[16px] bg-[#111] p-5 [transform-style:preserve-3d] [will-change:transform]"
        onMouseMove={handleMouseMove}
        onMouseLeave={handleMouseLeave}
      >
        <div className="overflow-hidden rounded-[12px]">
          <img
            src="https://via.placeholder.com/500"
            alt="Project One"
            className="pointer-events-none block h-auto w-full"
          />
        </div>
        <h3 className="mt-4 text-xl font-semibold">Project One</h3>
      </div>

      <div
        className="project-card w-[320px] cursor-pointer overflow-hidden rounded-[16px] bg-[#111] p-5 [transform-style:preserve-3d] [will-change:transform]"
        onMouseMove={handleMouseMove}
        onMouseLeave={handleMouseLeave}
      >
        <div className="overflow-hidden rounded-[12px]">
          <img
            src="https://via.placeholder.com/500"
            alt="Project Two"
            className="pointer-events-none block h-auto w-full"
          />
        </div>
        <h3 className="mt-4 text-xl font-semibold">Project Two</h3>
      </div>
    </section>
  );
}

export default Projects;