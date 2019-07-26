<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveForm extends Model
{
    protected $fillable = [ 'staff_id', 'reliever', 'days_requested', 'period_leave_day', 'period_leave_month', 'period_leave_day_resume', 'period_leave_month_resume', 'balance_of_leave', 'public_holiday', 'hod_remark', 'cs_remark', 'admin_remark', 'date_resume', 'basics', 'allowance', 'period_leave_approved', 'cs_approved', 'entitled', 'hod_approved', 'admin_approved', 'period_leave_year' ];
}
