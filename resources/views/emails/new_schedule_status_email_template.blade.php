<div style="background-color: #f6f6f6; padding: 48px 0;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="max-width:600px; border:1px #eee solid;background-color:#ffffff;margin:0 auto; font-family:Roboto, sans-serif; font-size:14px; color:#464e52;">
        <tr>
          <td style="border-left:2px #163e60 solid; padding:0;" colspan="2"><table width="100%" cellpadding="0"cellspacing="0" border="0">
                <tr>
                    <td style="border-bottom:1px #eee solid; text-align: center; padding:12px 10px 5px;">
                        <h2>New Schedule Update - {{ $data['status']  }}</h2>
                    </td>
                </tr>
            </table></td>
        </tr>
        <tr>
          <td style="border-left:2px #163e60 solid; color: #163e60; padding: 16px; vertical-align: top;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                        Schedule Date
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['schedule_date'] }}
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                        Schedule Time
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['session_time'] }}
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                        Session
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['session'] }}
                    </td>
                </tr>
                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                       Student Name
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['student_name'] }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                        Instructor Name
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['instructor_name'] }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                        Status
                    </td>
                    <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                        {{$data['status'] }}
                    </td>
                </tr>

            </table>
        </td>
    </tr>
    </table>
</div>

