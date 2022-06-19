<?php

namespace App\Repositories;

interface ModuleRepositoryInterface
{
	public function getAllByCourseId(string $courseId, string $filter = ''): array;
	public function findById(string $id): ?object;
	public function createByCourseId(string $courseId, array $data): object;
	public function update(string $id, array $data): ?object;
	public function delete(string $id): bool;

	
}
