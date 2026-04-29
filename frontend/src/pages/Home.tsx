import Navbar from "../components/Navbar";
import Projects from "../components/Projects";
import Skills from "../components/skills";
import Experience from "../components/Experience";
import Contact from "../components/Contact";
import Footer from "../components/Footer";
import About from "../components/About";
import Blogs from "../components/Blogs";

function Home() {
  return (
    <>
      <Navbar />
      <About />
      <Projects />
      <Skills />
      <Experience />
      <Blogs   />
      <Contact />
      <Footer />
    </>
  );
}

export default Home;