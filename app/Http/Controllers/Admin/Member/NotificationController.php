<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Redirect;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $page_number = (int) $request->input('sGo', 1);
        $page_size = (int) $request->input('sPageSize', 10);
        $filter_from_date = (int) $request->input('sBeginDt', '');
        $filter_to_date = $request->input('sEndDt', '');
        $filter_order_number = $request->input('sOrderNo', '');
        $filter_member_number = $request->input('sMemNm', '');
        $filter_subject = $request->input('sSbj', '');
        $filter_content = $request->input('sCont', '');

        $sql = Notification::when($filter_from_date != 0, function ($query) use ($filter_from_date) {
                $query->where('created_at', $filter_from_date);
            })->when($filter_to_date != 0, function ($query) use ($filter_to_date) {
                $query->where('created_at', $filter_to_date);
            })->when($filter_order_number != '', function ($query) use ($filter_order_number) {
                $query->where('order_number', 'LIKE', "%$filter_order_number%");
            })->when($filter_member_number != '', function ($query) use ($filter_member_number) {
                $query->where('', 'LIKE', "%$filter_member_number%");
            })->when($filter_mailbox_number != '', function ($query) use ($filter_mailbox_number) {
                $query->where('mailbox_number', 'LIKE', "%$filter_mailbox_number%");
            });
        $total_count = $sql->count();
        $page_count = ceil(1.0 * $total_count / $page_size);
        $page_number = ($page_number > $page_count ? $page_count : $page_number);
        $page_number = ($page_number < 1 ? 1 : $page_number);
        $users = $sql->offset(($page_number - 1) * $page_size)->limit($page_size)->get();

        // foreach ($users as $user) {
        //     $user = [
        //         'id' => $user->id,
        //         'name' => $user->name,
        //         'user_id' => $user->user_id,
        //         'grade' => $user->grade,
        //         'mailbox_number' => $user->mailbox_number,
        //         'cellphone_number' => $user->cellphone_number,
        //         'advance_payment' => $user->advance_payment,
        //         'last_visit_date' => $user->last_visit_date,
        //         'created_at' => date('Y-m-d H:i', strtotime($user->created_at)),
        //     ];
        // }

        return view('admin.member.notification', [
            // 'users' => $users,
            // 'total_count' => $total_count,
            // 'page_number' => $page_number,
            // 'page_size' => $page_size,
            // 'page_count' => $page_count,
            // 'filter_grade' => $filter_grade,
            // 'filter_user_id' => $filter_user_id,
            // 'filter_name' => $filter_name,
            // 'filter_mailbox_number' => $filter_mailbox_number,
        ]);
    }
}
