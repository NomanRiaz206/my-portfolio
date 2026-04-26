import Navbar from "../components/Navbar";
import Projects from "../components/Projects";
import Skills from "../components/skills";
import Experience from "../components/Experience";
import Contact from "../components/Contact";
import Footer from "../components/Footer";
import About from "../components/About";

function Home() {
  return (
    <>
      <Navbar />
      <About />
      <Projects />
      <Skills />
      <Experience />
      <Contact />
      <Footer />
    </>
  );
}

export default Home;