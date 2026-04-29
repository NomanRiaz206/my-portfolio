import { useEffect, useLayoutEffect, useRef, useState } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { getProjects } from "../services/api";
import type { Project } from "../types/projects";

gsap.registerPlugin(ScrollTrigger);

function Projects() {
  const sectionRef = useRef<HTMLDivElement>(null);

  const [projects, setProjects] = useState<Project[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  useEffect(() => {
    getProjects()
      .then((res) => setProjects(res.data))
      .catch((err) => setError(err instanceof Error ? err.message : "Something went wrong"))
      .finally(() => setLoading(false));
  }, []);

  useLayoutEffect(() => {
    if (!projects.length) return;

    const ctx = gsap.context(() => {
      gsap.from(".projects-heading", {
        y: 60,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 80%",
        },
      });

      gsap.from(".project-card", {
        y: 100,
        opacity: 0,
        scale: 0.94,
        duration: 1,
        stagger: 0.18,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 75%",
        },
      });
    }, sectionRef);

    return () => ctx.revert();
  }, [projects]);

  const handleMouseMove = (e: React.MouseEvent<HTMLDivElement>) => {
    const card = e.currentTarget;
    const rect = card.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const rotateX = ((y - rect.height / 2) / rect.height) * -6;
    const rotateY = ((x - rect.width / 2) / rect.width) * 6;

    gsap.to(card, {
      rotateX,
      rotateY,
      scale: 1.015,
      duration: 0.35,
      ease: "power2.out",
    });

    const image = card.querySelector("img");

    if (image) {
      gsap.to(image, {
        scale: 1.04,
        duration: 0.35,
        ease: "power2.out",
      });
    }
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

    const image = card.querySelector("img");

    if (image) {
      gsap.to(image, {
        scale: 1,
        duration: 0.6,
        ease: "power3.out",
      });
    }
  };

  if (loading) {
    return (
      <section className="min-h-screen bg-[#050505] px-6 py-[120px] text-white md:px-10 xl:px-[120px]">
        Loading projects...
      </section>
    );
  }

  if (error) {
    return (
      <section className="min-h-screen bg-[#050505] px-6 py-[120px] text-red-400 md:px-10 xl:px-[120px]">
        {error}
      </section>
    );
  }

  return (
    <section
      ref={sectionRef}
      id="projects"
      className="relative min-h-screen overflow-hidden bg-[#050505] px-6 py-[120px] text-white [perspective:1200px] md:px-10 xl:px-[120px]"
    >
      <div className="pointer-events-none absolute right-0 top-0 h-[420px] w-[420px] rounded-full bg-cyan-500/10 blur-[140px]" />
      <div className="pointer-events-none absolute left-0 bottom-0 h-[420px] w-[420px] rounded-full bg-indigo-500/10 blur-[140px]" />

      <div className="projects-heading relative z-10 mb-20 max-w-3xl">
        <h2 className="text-5xl font-bold tracking-tight text-white md:text-6xl">
          Featured Projects
        </h2>

        <p className="mt-6 max-w-2xl text-xl leading-8 text-gray-400">
          From AI agents that automate complex workflows to full-stack platforms
          that scale. Here's what I've been building.
        </p>
      </div>

      <div className="relative z-10 space-y-10">
        {projects.map((project) => (
          <article
            key={project.id}
            onMouseMove={handleMouseMove}
            onMouseLeave={handleMouseLeave}
            className="project-card group mx-auto grid max-w-6xl cursor-pointer grid-cols-1 items-center gap-10 overflow-hidden rounded-[36px] border border-white/10 bg-[#111]/95 p-8 shadow-2xl shadow-black/40 [transform-style:preserve-3d] [will-change:transform] lg:grid-cols-[0.9fr_1.1fr] lg:p-12"
          >
            <div>
              <h3 className="text-3xl font-bold tracking-tight text-white md:text-4xl">
                {project.title}
              </h3>

              <p className="mt-6 max-w-md text-lg leading-8 text-gray-400">
                {project.short_description}
              </p>

              <div className="mt-8 flex flex-wrap gap-3">
                {project.technologies?.map((tech) => (
                  <span
                    key={tech}
                    className="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-gray-200"
                  >
                    {tech}
                  </span>
                ))}
              </div>

              {project.live_url && (
                <a
                  href={project.live_url}
                  target="_blank"
                  rel="noreferrer"
                  className="mt-9 inline-flex items-center gap-2 text-lg font-medium text-indigo-400 transition hover:text-indigo-300"
                >
                  View Live Project
                  <span className="transition group-hover:translate-x-1 group-hover:-translate-y-1">
                    ↗
                  </span>
                </a>
              )}
            </div>

            <div className="overflow-hidden rounded-[26px] border border-white/10 bg-black/40">
              <img
                src={project.thumbnail}
                alt={project.title}
                className="h-[300px] w-full object-cover md:h-[360px]"
              />
            </div>
          </article>
        ))}
      </div>
    </section>
  );
}

export default Projects;