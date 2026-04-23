import { useLayoutEffect, useRef } from "react";
import gsap from "gsap";

function Hero() {
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
    <section ref={heroRef} style={styles.hero} id="about">
      
      {/* LEFT SIDE */}
      <div style={styles.left}>
        
        <div style={styles.badge}>• Full Stack Web Developer </div>

        <h1 style={styles.title}>
          {"Hi, I'm Noman Riaz.".split("").map((char, i) => (
            <span key={i} className="char" style={styles.char}>
              {char === " " ? "\u00A0" : char}
            </span>
          ))}
        </h1>

        <p className="hero-sub" style={styles.subtitle}>
          I build AI agents and full-stack products that solve real problems.
          From intelligent automation to production-grade web experiences —
          I ship things that work.
        </p>

        <div style={styles.buttons}>
          <button style={styles.primaryBtn}>View My Work </button>
          <button style={styles.secondaryBtn}>Get in Touch</button>
        </div>

        <div style={styles.icons}>
          <span>⚫ GitHub</span>
          <span> LinkedIn</span>
        </div>
      </div>

      {/* RIGHT SIDE (ONLY ONE IMAGE) */}
      <div style={styles.right}>
        <div className="hero-image" style={styles.imageCard}>
          <img
            src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
            style={styles.image}
          />
        </div>
      </div>

    </section>
  );
}

export default Hero;


const styles: any = {
  hero: {
    height: "100vh",
    display: "flex",
    justifyContent: "space-between",
    alignItems: "center",
    padding: "120px 120px 60px 120px",
    background:
      "radial-gradient(circle at top left, #1a1a2e 0%, #0a0a0a 40%, #000 100%)",
    color: "#fff",
    overflow: "hidden",
  },

  left: {
    flex: 1,
    maxWidth: "600px",
  },

  badge: {
    display: "inline-block",
    padding: "8px 14px",
    borderRadius: "20px",
    fontSize: "12px",
    color: "#a5a5ff",
    border: "1px solid rgba(165,165,255,0.3)",
    marginBottom: "20px",
  },

  title: {
    fontSize: "clamp(2.8rem, 6vw, 5.5rem)",
    fontWeight: 700,
    lineHeight: 1.1,
    letterSpacing: "-2px",
  },

  char: {
    display: "inline-block",
  },

  subtitle: {
    marginTop: "20px",
    fontSize: "1.1rem",
    color: "#b0b0b0",
    lineHeight: 1.6,
    maxWidth: "500px",
  },

  buttons: {
    marginTop: "30px",
    display: "flex",
    gap: "15px",
  },

  primaryBtn: {
    padding: "12px 20px",
    borderRadius: "10px",
    background: "#ffffff",
    color: "#000",
    border: "none",
    cursor: "pointer",
    fontWeight: 600,
  },

  secondaryBtn: {
    padding: "12px 20px",
    borderRadius: "10px",
    background: "transparent",
    color: "#fff",
    border: "1px solid rgba(255,255,255,0.2)",
    cursor: "pointer",
  },

  icons: {
    marginTop: "30px",
    display: "flex",
    gap: "20px",
    fontSize: "14px",
    color: "#888",
  },

  right: {
    flex: 1,
    display: "flex",
    justifyContent: "center",
  },

  imageCard: {
    width: "380px",
    height: "500px",
    borderRadius: "24px",
    overflow: "hidden",
    background: "#111",
    boxShadow: "0 20px 60px rgba(0,0,0,0.6)",
    border: "1px solid rgba(255,255,255,0.08)",
  },

  image: {
    width: "100%",
    height: "100%",
    objectFit: "cover",
  },
};