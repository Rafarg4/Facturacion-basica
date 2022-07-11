<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePagoCompraRequest;
use App\Http\Requests\UpdatePagoCompraRequest;
use App\Repositories\PagoCompraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Compra;
use Flash;
use Response;

class PagoCompraController extends AppBaseController
{
    /** @var  PagoCompraRepository */
    private $pagoCompraRepository;

    public function __construct(PagoCompraRepository $pagoCompraRepo)
    {
        $this->pagoCompraRepository = $pagoCompraRepo;
    }

    /**
     * Display a listing of the PagoCompra.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pagoCompras = $this->pagoCompraRepository->all();

        return view('pago_compras.index')
            ->with('pagoCompras', $pagoCompras);
    }

    /**
     * Show the form for creating a new PagoCompra.
     *
     * @return Response
     */
    public function create()
    {
        $compras = Compra::pluck('numero_factura','id');
        return view('pago_compras.create',compact(
            'compras'));
    }

    /**
     * Store a newly created PagoCompra in storage.
     *
     * @param CreatePagoCompraRequest $request
     *
     * @return Response
     */
    public function store(CreatePagoCompraRequest $request)
    {
        $input = $request->all();

        $pagoCompra = $this->pagoCompraRepository->create($input);

        Flash::success('Pago Compra saved successfully.');

        return redirect(route('pagoCompras.index'));
    }

    /**
     * Display the specified PagoCompra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pagoCompra = $this->pagoCompraRepository->find($id);

        if (empty($pagoCompra)) {
            Flash::error('Pago Compra not found');

            return redirect(route('pagoCompras.index'));
        }

        return view('pago_compras.show')->with('pagoCompra', $pagoCompra);
    }

    /**
     * Show the form for editing the specified PagoCompra.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $compras = Compra::pluck('numero_factura','id');
        $pagoCompra = $this->pagoCompraRepository->find($id);

        if (empty($pagoCompra)) {
            Flash::error('Pago Compra not found');

            return redirect(route('pagoCompras.index'));
        }

        return view('pago_compras.edit',compact(
            'compras','pagoCompra'));
    }

    /**
     * Update the specified PagoCompra in storage.
     *
     * @param int $id
     * @param UpdatePagoCompraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePagoCompraRequest $request)
    {
        $pagoCompra = $this->pagoCompraRepository->find($id);

        if (empty($pagoCompra)) {
            Flash::error('Pago Compra not found');

            return redirect(route('pagoCompras.index'));
        }

        $pagoCompra = $this->pagoCompraRepository->update($request->all(), $id);

        Flash::success('Pago Compra updated successfully.');

        return redirect(route('pagoCompras.index'));
    }

    /**
     * Remove the specified PagoCompra from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pagoCompra = $this->pagoCompraRepository->find($id);

        if (empty($pagoCompra)) {
            Flash::error('Pago Compra not found');

            return redirect(route('pagoCompras.index'));
        }

        $this->pagoCompraRepository->delete($id);

        Flash::success('Pago Compra deleted successfully.');

        return redirect(route('pagoCompras.index'));
    }
}
