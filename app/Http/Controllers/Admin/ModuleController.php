<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Module\StoreUpdateModule;
use App\Repositories\CourseRepositoryInterface;
use App\Repositories\ModuleRepositoryInterface;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
		protected $repository;
		protected $courseRepository;

		public function __construct(
			ModuleRepositoryInterface $repository,
			CourseRepositoryInterface $courseRepository
			)
		{
			$this->repository = $repository;
			$this->courseRepository = $courseRepository;
		}

		public function index(Request $request, $courseId)
		{
			if (!$course = $this->courseRepository->findById($courseId)){
				return back();
			}

			$data = $this->repository->getAllByCourseId(
				courseId: $courseId,
				filter: $request->filter ?? ''
			);
			$modules = convertItemsOfArrayToObject($data);

			return view('admin.courses.modules.index', compact('modules', 'course'));
		}

		public function create($courseId)
		{
			if (!$course = $this->courseRepository->findById($courseId)){
				return back();
			}

			return view('admin.courses.modules.create', compact('course'));
		}

		public function store(StoreUpdateModule $request, $courseId)
		{
			if (!$this->courseRepository->findById($courseId)){
				return back();
			}
			// $course->modules()->create($request->only(['name']));
			$this->repository->createByCourseId($courseId, $request->only(['name']));
			return redirect()->route('modules.index', $courseId);
		}

		public function edit($courseId, $id)
		{
			if (!$course = $this->courseRepository->findById($courseId)){
				return back();
			}

			if (!$module = $this->repository->findById($id)){
				return back();
			}

			return view('admin.courses.modules.edit', compact('course', 'module'));
		}

		public function update(StoreUpdateModule $request, $courseId, $id)
		{
			if (!$this->courseRepository->findById($courseId)){
				return back();
			}

			$this->repository->update($id, $request->only('name'));

			return redirect()->route('modules.index', $courseId);
		}

		public function show($courseId, $id)
		{
			if (!$course = $this->courseRepository->findById($courseId)){
				return back();
			}
//
			if (!$module = $this->repository->findById($id)){
				return back();
			}

			return view('admin.courses.modules.show', compact('course', 'module'));
		}

		public function destroy($courseId, $id)
		{
			if (!$this->repository->delete($id)){
				return back();
			}
			
			return redirect()->route('modules.index', $courseId);

		}
	}
