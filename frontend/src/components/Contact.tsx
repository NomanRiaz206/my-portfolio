import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";

function Contact() {
  const contactRef = useRef<HTMLElement>(null);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".contact-head", {
        y: 30,
        opacity: 0,
        duration: 0.9,
        ease: "power3.out",
      });

      gsap.from(".contact-desc", {
        y: 30,
        opacity: 0,
        delay: 0.2,
        duration: 0.9,
        ease: "power3.out",
      });

      gsap.from(".contact-actions", {
        y: 30,
        opacity: 0,
        delay: 0.4,
        duration: 0.9,
        ease: "power3.out",
      });

      gsap.from(".contact-icons", {
        y: 20,
        opacity: 0,
        delay: 0.6,
        duration: 0.8,
        ease: "power3.out",
      });
    }, contactRef);

    return () => ctx.revert();
  }, []);

  return (
    <section
      id="contact"
      ref={contactRef}
      className="relative overflow-hidden bg-black px-6 pb-[120px] pt-[140px] text-center text-white scroll-mt-[100px] md:px-10"
    >
      <div
        className="pointer-events-none absolute left-0 right-0 top-0 h-[260px]"
        style={{
          background:
            "radial-gradient(circle at top center, rgba(124, 58, 237, 0.18), transparent 70%)",
        }}
      />

      <div className="relative z-[2] mx-auto max-w-[900px] px-0">
        <div className="contact-head mb-5">
          <p className="mb-3 text-[0.85rem] font-semibold uppercase tracking-[0.2em] text-[#7c83ff]">
            GET IN TOUCH
          </p>
          <h2 className="m-0 text-[clamp(2.5rem,5vw,3.8rem)] font-bold tracking-[-0.04em]">
            Let&apos;s Work Together
          </h2>
        </div>

        <p className="contact-desc mx-auto mb-10 mt-5 max-w-[700px] text-[1.05rem] leading-[1.7] text-[#a1a1aa]">
          I&apos;m always open to discussing new projects, collaborations, or
          opportunities. Whether you have a question or just want to say hi —
          my inbox is always open.
        </p>

        <div className="contact-actions mb-10 flex flex-wrap justify-center gap-4">
          <a
            href="mailto:nomanriaz.dev@gmail.com"
            className="rounded-[12px] bg-[linear-gradient(135deg,#7c3aed_0%,#4f46e5_100%)] px-6 py-[14px] font-semibold text-white no-underline transition-all duration-300 hover:translate-y-[-1px]"
          >
            Send Email
          </a>

          <a
            href="https://linkedin.com"
            target="_blank"
            rel="noreferrer"
            className="rounded-[12px] border border-white/[0.12] bg-transparent px-6 py-[14px] text-white no-underline transition-all duration-300 hover:border-white/[0.22]"
          >
            LinkedIn
          </a>
        </div>

        <div className="contact-icons flex justify-center gap-4">
          <a
            href="https://github.com"
            target="_blank"
            rel="noreferrer"
            className="flex h-[44px] w-[44px] items-center justify-center rounded-[12px] border border-white/[0.1] text-[#aaa] no-underline transition-all duration-300 hover:border-white/[0.18] hover:text-white"
          >
            🐙
          </a>

          <a
            href="https://linkedin.com"
            target="_blank"
            rel="noreferrer"
            className="flex h-[44px] w-[44px] items-center justify-center rounded-[12px] border border-white/[0.1] text-[#aaa] no-underline transition-all duration-300 hover:border-white/[0.18] hover:text-white"
          >
            in
          </a>
        </div>
      </div>
    </section>
  );
}

export default Contact;