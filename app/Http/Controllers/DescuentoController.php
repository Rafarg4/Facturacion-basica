<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDescuentoRequest;
use App\Http\Requests\UpdateDescuentoRequest;
use App\Repositories\DescuentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Producto;
use Flash;
use Response;

class DescuentoController extends AppBaseController
{
    /** @var  DescuentoRepository */
    private $descuentoRepository;

    public function __construct(DescuentoRepository $descuentoRepo)
    {
        $this->descuentoRepository = $descuentoRepo;
    }

    /**
     * Display a listing of the Descuento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $descuentos = $this->descuentoRepository->all();

        return view('descuentos.index')
            ->with('descuentos', $descuentos);
    }

    /**
     * Show the form for creating a new Descuento.
     *
     * @return Response
     */
    public function create()
    {
        $productos = Producto::pluck('nombre_producto','id');
        return view('descuentos.create',compact('productos'));
    }

    /**
     * Store a newly created Descuento in storage.
     *
     * @param CreateDescuentoRequest $request
     *
     * @return Response
     */
    public function store(CreateDescuentoRequest $request)
    {
        $input = $request->all();

        $descuento = $this->descuentoRepository->create($input);

        Flash::success('Descuento saved successfully.');

        return redirect(route('descuentos.index'));
    }

    /**
     * Display the specified Descuento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $descuento = $this->descuentoRepository->find($id);

        if (empty($descuento)) {
            Flash::error('Descuento not found');

            return redirect(route('descuentos.index'));
        }

        return view('descuentos.show')->with('descuento', $descuento);
    }

    /**
     * Show the form for editing the specified Descuento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $descuento = $this->descuentoRepository->find($id);
        $productos = Producto::pluck('nombre_producto','id');

        if (empty($descuento)) {
            Flash::error('Descuento not found');

            return redirect(route('descuentos.index'));
        }

         return view('descuentos.edit',compact('productos','descuento'));
    }

    /**
     * Update the specified Descuento in storage.
     *
     * @param int $id
     * @param UpdateDescuentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDescuentoRequest $request)
    {
        $descuento = $this->descuentoRepository->find($id);

        if (empty($descuento)) {
            Flash::error('Descuento not found');

            return redirect(route('descuentos.index'));
        }

        $descuento = $this->descuentoRepository->update($request->all(), $id);

        Flash::success('Descuento updated successfully.');

        return redirect(route('descuentos.index'));
    }

    /**
     * Remove the specified Descuento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $descuento = $this->descuentoRepository->find($id);

        if (empty($descuento)) {
            Flash::error('Descuento not found');

            return redirect(route('descuentos.index'));
        }

        $this->descuentoRepository->delete($id);

        Flash::success('Descuento deleted successfully.');

        return redirect(route('descuentos.index'));
    }
}
