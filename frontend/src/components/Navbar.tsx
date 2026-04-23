import { useEffect, useLayoutEffect, useRef, useState } from "react";
import gsap from "gsap";

function Navbar() {
  const navRef = useRef<HTMLElement>(null);
  const [scrolled, setScrolled] = useState(false);
  const [active, setActive] = useState("about");
  const [menuOpen, setMenuOpen] = useState(false);

  useLayoutEffect(() => {
    const ctx = gsap.context(() => {
      gsap.from(".nav-logo", {
        y: -24,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out",
      });

      gsap.from(".nav-item", {
        y: -18,
        opacity: 0,
        stagger: 0.07,
        delay: 0.15,
        duration: 0.7,
        ease: "power3.out",
      });
    }, navRef);

    return () => ctx.revert();
  }, []);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 24);

      const sections = ["about", "projects", "skills", "experience", "contact"];
      let current = active;

      for (const id of sections) {
        const el = document.getElementById(id);
        if (!el) continue;

        const rect = el.getBoundingClientRect();
        if (rect.top <= 120 && rect.bottom >= 120) {
          current = id;
          break;
        }
      }

      setActive(current);
    };

    handleScroll();
    window.addEventListener("scroll", handleScroll, { passive: true });

    return () => window.removeEventListener("scroll", handleScroll);
  }, [active]);

  const navItems = [
    { label: "About", href: "#about", id: "about" },
    { label: "Projects", href: "#projects", id: "projects" },
    { label: "Skills", href: "#skills", id: "skills" },
    { label: "Experience", href: "#experience", id: "experience" },
    { label: "Contact", href: "#contact", id: "contact" },
  ];

  return (
    <header
      ref={navRef}
      className={`fixed left-0 top-0 z-[1000] w-full overflow-hidden border-b backdrop-blur-[14px] transition-all duration-300 ${
        scrolled
          ? "border-white/10 bg-[rgba(5,5,5,0.84)] shadow-[0_10px_40px_rgba(0,0,0,0.28)]"
          : "border-white/[0.05] bg-[rgba(5,5,5,0.72)]"
      }`}
    >
      {/* Glow */}
      <div
        className="pointer-events-none absolute left-0 bottom-0 h-full w-[340px]"
        style={{
          background:
            "radial-gradient(ellipse at bottom left, #161626 0%, rgba(22,22,38,0.6) 40%, transparent 75%)",
        }}
      />

      <div className="relative mx-auto flex h-[78px] w-full max-w-[1200px] items-center justify-between px-6 md:px-10">
        {/* LOGO */}
        <a
          href="#hero"
          className="nav-logo text-[1.9rem] font-extrabold tracking-[-1px] text-[#a5a5ff] transition-colors hover:text-white"
        >
          NR.
        </a>

        {/* DESKTOP NAV */}
        <nav className="hidden md:block">
          <ul className="flex items-center gap-[34px]">
            {navItems.map((item) => {
              const isActive = active === item.id;

              return (
                <li key={item.id} className="nav-item relative">
                  <a
                    href={item.href}
                    className={`group relative inline-block pb-[6px] text-[0.96rem] font-medium transition-colors ${
                      isActive
                        ? "text-white"
                        : "text-white/70 hover:text-[#a5a5ff]"
                    }`}
                  >
                    {item.label}
                    <span
                      className={`absolute bottom-0 left-0 h-[1.5px] bg-[#a5a5ff] transition-all duration-300 ${
                        isActive ? "w-full" : "w-0 group-hover:w-full"
                      }`}
                    />
                  </a>
                </li>
              );
            })}
          </ul>
        </nav>

        {/* MOBILE BUTTON */}
        <button
          onClick={() => setMenuOpen(!menuOpen)}
          className="md:hidden flex flex-col gap-[4px]"
        >
          <span className="w-6 h-[2px] bg-white"></span>
          <span className="w-6 h-[2px] bg-white"></span>
          <span className="w-6 h-[2px] bg-white"></span>
        </button>
      </div>

      {/* MOBILE MENU */}
      <div
        className={`md:hidden transition-all duration-500 overflow-hidden ${
          menuOpen ? "max-h-[400px]" : "max-h-0"
        }`}
      >
        <div className="px-6 pb-6 pt-2 flex flex-col gap-6 bg-[rgba(5,5,5,0.95)] backdrop-blur">
          {navItems.map((item) => {
            const isActive = active === item.id;

            return (
              <a
                key={item.id}
                href={item.href}
                onClick={() => setMenuOpen(false)}
                className={`text-[1rem] font-medium transition-colors ${
                  isActive
                    ? "text-white"
                    : "text-white/70 hover:text-[#a5a5ff]"
                }`}
              >
                {item.label}
              </a>
            );
          })}
        </div>
      </div>
    </header>
  );
}

export default Navbar;