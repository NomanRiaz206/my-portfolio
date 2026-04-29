export interface Blog {
  id: number;
  title: string;
  slug: string;
  excerpt: string;
  content: string;
  thumbnail: string;
  category: string;
  tags: string[];
  is_featured: boolean;
  is_published: boolean;
  published_at: string; // ISO date string
}

export interface BlogsApiResponse {
    success: boolean;
    message: string;
    data: Blog[];
}