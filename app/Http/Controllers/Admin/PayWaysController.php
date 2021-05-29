<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PayWay\BulkDestroyPayWay;
use App\Http\Requests\Admin\PayWay\DestroyPayWay;
use App\Http\Requests\Admin\PayWay\IndexPayWay;
use App\Http\Requests\Admin\PayWay\StorePayWay;
use App\Http\Requests\Admin\PayWay\UpdatePayWay;
use App\Models\PayWay;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PayWaysController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPayWay $request
     * @return array|Factory|View
     */
    public function index(IndexPayWay $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(PayWay::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'fees', 'sale', 'enabled'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.pay-way.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.pay-way.create');

        return view('admin.pay-way.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePayWay $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePayWay $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the PayWay
        $payWay = PayWay::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/pay-ways'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/pay-ways');
    }

    /**
     * Display the specified resource.
     *
     * @param PayWay $payWay
     * @throws AuthorizationException
     * @return void
     */
    public function show(PayWay $payWay)
    {
        $this->authorize('admin.pay-way.show', $payWay);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PayWay $payWay
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(PayWay $payWay)
    {
        $this->authorize('admin.pay-way.edit', $payWay);


        return view('admin.pay-way.edit', [
            'payWay' => $payWay,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePayWay $request
     * @param PayWay $payWay
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePayWay $request, PayWay $payWay)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values PayWay
        $payWay->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/pay-ways'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/pay-ways');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPayWay $request
     * @param PayWay $payWay
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPayWay $request, PayWay $payWay)
    {
        $payWay->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPayWay $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPayWay $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    PayWay::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}