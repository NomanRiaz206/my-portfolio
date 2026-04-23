function Footer() {
  return (
    <footer className="bg-black border-t border-white/[0.06] py-6 text-[0.9rem] text-[#6b7280]">
      <div className="mx-auto max-w-[1200px] px-10 text-center">
        © {new Date().getFullYear()} Noman Riaz. All rights reserved.
      </div>
    </footer>
  );
}

export default Footer;