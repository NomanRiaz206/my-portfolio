import type { ProjectsApiResponse } from "../types/projects";

const BASE_URL = import.meta.env.VITE_API_BASE_URL;

export async function getProjects(): Promise<ProjectsApiResponse> {
  const response = await fetch(`${BASE_URL}/projects`, {
    method: "GET",
    headers: {
      Accept: "application/json",
    },
  });

  if (!response.ok) {
    throw new Error("Failed to fetch projects");
  }

  return response.json();
}