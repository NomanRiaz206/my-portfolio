export interface Project {
  id: number;
  title: string;
  slug: string;
  short_description: string;
  description: string;
  thumbnail: string;
  github_url: string;
  live_url: string;
  technologies: string[];
  is_featured: boolean;
  status: boolean;
}

export interface ProjectsApiResponse {
  success: boolean;
  message: string;
  data: Project[];
}