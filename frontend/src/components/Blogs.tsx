import { useEffect, useLayoutEffect, useRef, useState } from "react";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { getBlogs } from "../services/api";
import type { Blog } from "../types/blogs";

gsap.registerPlugin(ScrollTrigger);

function Blogs() {
  const sectionRef = useRef<HTMLDivElement>(null);

  const [blogs, setBlogs] = useState<Blog[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string>("");

  useEffect(() => {
    const fetchBlogs = async () => {
      try {
        const res = await getBlogs();
        setBlogs(res.data);
      } catch (err) {
        setError(err instanceof Error ? err.message : "Something went wrong");
      } finally {
        setLoading(false);
      }
    };

    fetchBlogs();
  }, []);

  useLayoutEffect(() => {
    if (!blogs.length) return;

    const ctx = gsap.context(() => {
      gsap.from(".blog-heading", {
        y: 60,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 80%",
        },
      });

      gsap.from(".blog-card", {
        y: 120,
        opacity: 0,
        rotateX: 18,
        duration: 1,
        stagger: 0.18,
        ease: "power3.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 75%",
        },
      });

      gsap.from(".blog-card img", {
        scale: 1.25,
        opacity: 0,
        duration: 1.2,
        stagger: 0.18,
        ease: "power2.out",
        scrollTrigger: {
          trigger: sectionRef.current,
          start: "top 75%",
        },
      });
    }, sectionRef);

    return () => ctx.revert();
  }, [blogs]);

  const handleMouseMove = (e: React.MouseEvent<HTMLDivElement>) => {
    const card = e.currentTarget;
    const rect = card.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * -8;
    const rotateY = ((x - centerX) / centerX) * 8;

    gsap.to(card, {
      rotateX,
      rotateY,
      scale: 1.04,
      duration: 0.4,
      ease: "power2.out",
    });

    const image = card.querySelector("img");
    if (image) {
      gsap.to(image, {
        x: (x - centerX) * 0.04,
        y: (y - centerY) * 0.04,
        scale: 1.12,
        duration: 0.4,
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
        x: 0,
        y: 0,
        scale: 1,
        duration: 0.6,
      });
    }
  };

  if (loading) {
    return (
      <section
        ref={sectionRef}
        id="blogs"
        className="min-h-screen bg-[#0a0a0a] px-6 py-[120px] text-white md:px-10 xl:px-[120px]"
      >
        <p className="text-gray-400">Loading blogs...</p>
      </section>
    );
  }

  if (error) {
    return (
      <section
        ref={sectionRef}
        id="blogs"
        className="min-h-screen bg-[#0a0a0a] px-6 py-[120px] text-white md:px-10 xl:px-[120px]"
      >
        <p className="text-red-400">{error}</p>
      </section>
    );
  }

  return (
    <section
    id="blogs"
      ref={sectionRef}
      className="min-h-screen bg-[#0a0a0a] px-6 py-[120px] text-white [perspective:1000px] md:px-10 xl:px-[120px]"
    >
      <div className="blog-heading mb-14 max-w-3xl">
        <p className="mb-4 text-sm uppercase tracking-[0.35em] text-[#d7c3a2]">
          Latest Articles
        </p>

        <h2 className="text-4xl font-bold leading-tight md:text-6xl">
          Thoughts, stories, and development notes.
        </h2>

        <p className="mt-5 max-w-2xl text-base leading-7 text-gray-400">
          Explore practical insights about Laravel, frontend development,
          architecture, and modern web experiences.
        </p>
      </div>

      <div className="grid gap-7 md:grid-cols-2 xl:grid-cols-3">
        {blogs.map((blog) => (
          <article
            key={blog.id}
            className="blog-card group relative cursor-pointer overflow-hidden rounded-[22px] border border-white/10 bg-[#111] p-4 shadow-2xl shadow-black/30 [transform-style:preserve-3d] [will-change:transform]"
            onMouseMove={handleMouseMove}
            onMouseLeave={handleMouseLeave}
          >
            <div className="relative h-[230px] overflow-hidden rounded-[16px] bg-[#181818]">
              {blog.thumbnail ? (
                <img
                  src={blog.thumbnail}
                  alt={blog.title}
                  className="h-full w-full object-cover"
                />
              ) : (
                <div className="flex h-full w-full items-center justify-center bg-gradient-to-br from-[#1f2937] via-[#111827] to-[#050505]">
                  <span className="text-5xl font-black text-white/10">BLOG</span>
                </div>
              )}

              <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent" />

              {blog.category && (
                <span className="absolute left-4 top-4 rounded-full border border-white/10 bg-black/50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.18em] text-[#d7c3a2] backdrop-blur">
                  {blog.category}
                </span>
              )}
            </div>

            <div className="p-2 pt-5">
              <h3 className="line-clamp-2 text-2xl font-semibold leading-tight text-white transition group-hover:text-[#d7c3a2]">
                {blog.title}
              </h3>

              <p className="mt-4 line-clamp-3 text-sm leading-6 text-gray-400">
                {blog.excerpt}
              </p>

              <div className="mt-6 flex items-center justify-between border-t border-white/10 pt-5">
                <span className="text-xs uppercase tracking-[0.18em] text-gray-500">
                  {blog.published_at
                    ? new Date(blog.published_at).toLocaleDateString("en-US", {
                        month: "short",
                        day: "numeric",
                        year: "numeric",
                      })
                    : "Draft"}
                </span>

                <a
                  href={`/blogs/${blog.slug}`}
                  className="rounded-full border border-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.16em] text-white transition hover:border-[#d7c3a2]/50 hover:text-[#d7c3a2]"
                >
                  Read
                </a>
              </div>
            </div>

            <div className="pointer-events-none absolute inset-0 rounded-[22px] opacity-0 ring-1 ring-[#d7c3a2]/40 transition group-hover:opacity-100" />
          </article>
        ))}
      </div>
    </section>
  );
}

export default Blogs;