import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";

function Experience() {
  const expRef = useRef<HTMLElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".exp-head", {
        y: 30,
        opacity: 0,
        duration: 0.9,
        ease: "power3.out",
      });

      gsap.from(".exp-item", {
        y: 50,
        opacity: 0,
        stagger: 0.18,
        duration: 0.9,
        delay: 0.2,
        ease: "power3.out",
      });
    }, expRef);

    return () => ctx.revert();
  }, []);

  const experiences = [
    {
      company: "Punjab Information Technology Board (PITB)",
      role: "Laravel Intern",
      duration: "December 2025 - Present",
      description:
        "Developed a full-stack e-commerce website, including product management, checkout,payment functionality and an admin dashboard.",
      tags: [
        "PHP",
        "Laravel",
        "MySQL",
        "Tailwind CSS",
        "Full-stack development",
      ],
      logoText: "P",
    },
    {
      company: "Dexterz Sol",
      role: "React Front-End Intern",
      duration: "March 2024 - April 2024",
      description:
        "Developed a Facebook Marketplace Chrome extension using JavaScript, HTML, and CSS,providing a seamless and intuitive user experience.",
      tags: [
        "JavaScript",
        "ReactJS",
        "Chrome Extensions",
        "Front-end development",
      ],
      logoText: "D",
    },
  ];

  return (
    <section
      id="experience"
      ref={expRef}
      className="relative overflow-hidden bg-black px-6 pb-[110px] pt-[130px] text-white scroll-mt-[100px] md:px-10"
    >
      <div
        className="pointer-events-none absolute left-0 right-0 top-0 h-[280px]"
        style={{
          background:
            "radial-gradient(circle at top center, rgba(47, 83, 220, 0.12), transparent 65%)",
        }}
      />

      <div className="relative z-[2] mx-auto w-full max-w-[1200px]">
        <div className="exp-head mb-[72px] text-center">
          <p className="mb-[14px] text-[0.86rem] font-bold uppercase tracking-[0.18em] text-[#7c83ff]">
            Career
          </p>
          <h2 className="m-0 text-[clamp(2.4rem,5vw,4rem)] font-bold leading-[1.05] tracking-[-0.04em] text-[#f5f5f5]">
            Work Experience
          </h2>
        </div>

        <div className="relative mx-auto max-w-[760px] pl-0">
          <div
            className="absolute bottom-[120px] left-4 top-[6px] w-px"
            style={{
              background:
                "linear-gradient(to bottom, rgba(99,102,241,0.55), rgba(99,102,241,0.2))",
              boxShadow: "0 0 18px rgba(99,102,241,0.28)",
            }}
          />

          {experiences.map((item, index) => (
            <div
              key={index}
              className="exp-item relative mb-12 grid grid-cols-[28px_1fr] items-start gap-4 md:grid-cols-[34px_1fr] md:gap-[22px]"
            >
              <div className="relative z-[2] flex justify-center pt-[6px]">
                <div className="flex h-[14px] w-[14px] items-center justify-center rounded-full border-2 border-[#6b6fff] bg-black shadow-[0_0_16px_rgba(107,111,255,0.35)]">
                  <div className="h-1 w-1 rounded-full bg-[#6b6fff]" />
                </div>
              </div>

              <div className="rounded-[24px] border border-white/[0.06] bg-[rgba(8,8,10,0.92)] px-6 py-7 shadow-[0_18px_50px_rgba(0,0,0,0.28)] transition-all duration-300 hover:-translate-y-[2px] hover:border-[rgba(139,92,246,0.22)] hover:shadow-[0_24px_70px_rgba(0,0,0,0.45)] md:px-8">
                <div className="mb-[18px] flex flex-wrap items-start justify-between gap-5">
                  <div className="flex items-start gap-4">
                    <div className="flex h-12 w-12 shrink-0 items-center justify-center rounded-[14px] border border-white/[0.08] bg-[linear-gradient(180deg,#17181c_0%,#0f1013_100%)] text-base font-bold text-[#d4d4d8]">
                      {item.logoText}
                    </div>

                    <div>
                      <h3 className="m-0 text-[1.45rem] font-bold leading-[1.05] text-[#f4f4f5] md:text-[1.9rem]">
                        {item.company}
                      </h3>
                      <p className="mt-[6px] text-base font-medium text-[#7c83ff]">
                        {item.role}
                      </p>
                    </div>
                  </div>

                  <div className="whitespace-nowrap pt-[6px] text-[0.98rem] tracking-[0.02em] text-[#8b8b95]">
                    {item.duration}
                  </div>
                </div>

                <p className="mb-[18px] max-w-[92%] text-[1.02rem] leading-[1.75] text-[#a1a1aa]">
                  {item.description}
                </p>

                <div className="flex flex-wrap gap-[10px]">
                  {item.tags.map((tag, i) => (
                    <span
                      key={i}
                      className="rounded-full border border-white/[0.06] bg-white/[0.04] px-[14px] py-[10px] text-[0.92rem] leading-none text-[#b4b4bc]"
                    >
                      {tag}
                    </span>
                  ))}
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}

export default Experience;