import { useParams } from "react-router-dom";

function BlogDetail() {
  const { slug } = useParams();

  return (
    <div className="min-h-screen bg-black text-white p-10">
      <h1>Blog: {slug}</h1>
    </div>
  );
}

export default BlogDetail;