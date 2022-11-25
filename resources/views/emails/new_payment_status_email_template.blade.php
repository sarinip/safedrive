<div style="background-color: #f6f6f6; padding: 48px 0;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"
        style="max-width:600px; border:1px #eee solid;background-color:#ffffff;margin:0 auto; font-family:Roboto, sans-serif; font-size:14px; color:#464e52;">
        <tr>
            <td style="border-left:2px #163e60 solid; padding:0;" colspan="2">
                <table width="100%" cellpadding="0"cellspacing="0" border="0">
                    <tr>
                        <td style="border-bottom:1px #eee solid; text-align: center; padding:12px 10px 5px;">
                            <h2>Payment Success</h2>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="border-left:2px #163e60 solid; color: #163e60; padding: 16px; vertical-align: top;">
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                            Invoice No
                        </td>
                        <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                            {{ $data['id'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                            Time
                        </td>
                        <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                            {{ $data['created_at'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 12px; width: 170px; font-weight: 600;border-bottom:1px #eee solid;">
                            amount
                        </td>
                        <td style="padding:8px 12px;border-bottom:1px #eee solid;">
                            {{ $data['amount'] }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
