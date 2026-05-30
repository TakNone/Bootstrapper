# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 222

```tl
payments.savedInfo#fb8fe43c flags:# has_saved_credentials:flags.1?true saved_info:flags.0?PaymentRequestedInfo = payments.SavedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_saved_credentials** | [`flags.1?true`](type/true) | Whether the user has some saved payment credentials |
| **saved_info** | [`flags.0?PaymentRequestedInfo`](type/PaymentRequestedInfo) | Saved server-side order information |

---

## Type

[payments.SavedInfo](type/payments.SavedInfo)

---

## Example

```php
$paymentsSavedInfo = $client->payments->savedInfo(
	has_saved_credentials : true,
	saved_info : $client->paymentRequestedInfo(
		name : '4xre5mDhGtydPfJ9',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '17T6IQedZzBnS2My',
			street_line2 : '0ZQtqVPbUC3erlkG',
			city : '7srCQLAGVgXTWlDe',
			state : 'KH0x4l8RkdVmConI',
			country_iso2 : '8BuwVcSe3jo2PfGW',
			post_code : 'jhQzfIWbcg9arlO4',
		),
	),
);
```