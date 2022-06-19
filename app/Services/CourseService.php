<?php

namespace App\Services;

use App\Repositories\CourseRepositoryInterface;

class CourseService
{
	private $repository;

	public function __construct(CourseRepositoryInterface $repository)
	{
		return $this->repository = $repository;
	}

	public function getAll(string $filter = ''): array
	{
		$courses = $this->repository->getAll($filter);
		
		return convertItemsOfArrayToObject($courses);
	}

	public function create(array $data)
	{
		return $this->repository->create($data);
	}

	public function findById(string $id): ?object
	{
		return $this->repository->findById($id);
	}

	public function update(string $id, array $data)
	{
		return $this->repository->update($id, $data);
	}

	public function delete(string $id): bool
	{
		return $this->repository->delete($id);
	}
}