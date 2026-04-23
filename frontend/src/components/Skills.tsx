import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";

function Skills() {
  const skillsRef = useRef<HTMLElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".skills-head", {
        y: 30,
        opacity: 0,
        duration: 0.9,
        ease: "power3.out",
      });

      gsap.from(".skill-row", {
        y: 40,
        opacity: 0,
        stagger: 0.15,
        duration: 0.9,
        delay: 0.2,
        ease: "power3.out",
      });
    }, skillsRef);

    return () => ctx.revert();
  }, []);

  const rows = [
    {
      title: "AI & Agents",
      skills: [
        "AI Agent Architecture",
        "LLM Integration",
        "Prompt Engineering",
        "Computer Vision",
        "Google Gemini",
        "Vertex AI",
        "OpenAI API",
        "LangChain",
      ],
    },
    {
      title: "Frontend Development",
      skills: [
        "React",
        "Next.js",
        "Flutter",
        "Astro",
        "TypeScript",
        "Tailwind CSS",
        "Framer Motion",
      ],
    },
    {
      title: "Backend Systems",
      skills: [
        "Node.js",
        "Python",
        "FastAPI",
        "Java",
        "Spring Boot",
        "PostgreSQL",
        "Firebase",
        "Prisma",
      ],
    },
    {
      title: "Cloud & DevOps",
      skills: [
        "Google Cloud",
        "AWS",
        "Docker",
        "CI/CD",
        "Turborepo",
        "Git/GitHub",
        "Vercel",
        "Agile/Scrum",
      ],
    },
  ];

  const marqueeTop = [
    "AI Agents",
    "React",
    "Node.js",
    "TypeScript",
    "Flutter",
    "Tailwind CSS",
    "Python",
    "Java",
    "Spring Boot",
    "Next.js",
  ];

  const marqueeBottom = [
    "Gemini",
    "PostgreSQL",
    "FastAPI",
    "Firebase",
    "Docker",
    "CI/CD",
    "Google Cloud",
    "Prisma",
  ];

  return (
    <section
      id="skills"
      ref={skillsRef}
      className="relative isolate overflow-hidden bg-black py-[130px] text-white scroll-mt-[100px]"
    >
      <div
        aria-hidden="true"
        className="pointer-events-none absolute inset-0 z-0 flex select-none flex-col justify-center gap-10 overflow-hidden opacity-[0.015]"
      >
        <div className="w-full overflow-hidden whitespace-nowrap">
          <div className="animate-[marqueeLeft_42s_linear_infinite] inline-flex min-w-max gap-12">
            {[...marqueeTop, ...marqueeTop].map((item, i) => (
              <span
                key={i}
                className="whitespace-nowrap text-[clamp(3rem,8vw,6.5rem)] font-bold tracking-[-0.03em] text-transparent"
                style={{ WebkitTextStroke: "1px rgba(255,255,255,0.22)" }}
              >
                {item}
              </span>
            ))}
          </div>
        </div>

        <div className="w-full overflow-hidden whitespace-nowrap">
          <div className="animate-[marqueeRight_48s_linear_infinite] inline-flex min-w-max gap-12">
            {[...marqueeBottom, ...marqueeBottom, ...marqueeBottom].map(
              (item, i) => (
                <span
                  key={i}
                  className="whitespace-nowrap text-[clamp(3rem,8vw,6.5rem)] font-bold tracking-[-0.03em] text-transparent"
                  style={{ WebkitTextStroke: "1px rgba(255,255,255,0.22)" }}
                >
                  {item}
                </span>
              )
            )}
          </div>
        </div>
      </div>

      <div className="relative z-[2] mx-auto w-full max-w-[1200px] px-6 md:px-10">
        <div className="skills-head mb-[72px]">
          <p className="mb-4 text-[0.82rem] font-semibold uppercase tracking-[0.22em] text-[#a78bfa]">
            Capabilities
          </p>
          <h2 className="m-0 text-[clamp(2.5rem,6vw,4.75rem)] font-bold uppercase leading-none tracking-[-0.04em] text-[#f4f4f5]">
            Skills
          </h2>
        </div>

        <div className="relative z-[2] flex flex-col border-t border-[#18181b]">
          {rows.map((row) => (
            <div
              key={row.title}
              className="skill-row group relative z-[2] mx-[-24px] flex cursor-default flex-col items-start gap-6 border-b border-[#18181b] px-6 py-8 transition-[background,color] duration-300 hover:bg-white/[0.02] md:mx-[-40px] md:px-10 md:py-[34px] lg:flex-row lg:items-center lg:justify-between lg:gap-8"
            >
              <h3 className="skill-title m-0 w-full min-w-full flex-1 text-[clamp(2rem,8vw,3.2rem)] font-bold uppercase leading-none tracking-[-0.04em] text-[#71717a] transition-colors duration-300 group-hover:text-[#8b5cf6] lg:min-w-[320px] lg:flex-[1_1_420px] lg:text-[clamp(2.1rem,5vw,4.5rem)]">
                {row.title}
              </h3>

              <div className="skill-tags flex w-full min-w-full flex-1 flex-wrap justify-start gap-3 transition-all duration-500 lg:min-w-[320px] lg:flex-[1_1_420px] lg:justify-end lg:opacity-0 lg:translate-x-6 lg:pointer-events-none lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:group-hover:pointer-events-auto">
                {row.skills.map((skill, i) => (
                  <span
                    key={skill}
                    className="rounded-full border border-[#27272a] bg-[rgba(10,10,10,0.92)] px-5 py-3 text-[0.95rem] font-medium text-[#a1a1aa] transition-colors duration-300 group-hover:border-[#3f3f46]"
                    style={{ transitionDelay: `${i * 0.04}s` }}
                  >
                    {skill}
                  </span>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>

      <style>{`
        @keyframes marqueeLeft {
          0% { transform: translateX(0); }
          100% { transform: translateX(-50%); }
        }

        @keyframes marqueeRight {
          0% { transform: translateX(-50%); }
          100% { transform: translateX(0); }
        }
      `}</style>
    </section>
  );
}

export default Skills;