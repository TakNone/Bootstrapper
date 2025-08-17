# payments.savedInfo

**Description** : *Saved server-side order information*

**Layer** : 211

```tl
payments.savedInfo#fb8fe43c flags:# has_saved_credentials:flags.1?true saved_info:flags.0?PaymentRequestedInfo = payments.SavedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		name : '2efWcZ40FXIRjDzE',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'M5IbivwJNSd4HuEV',
			street_line2 : '2TvlGYifD8ou4A3P',
			city : 'OJvze2SmwG8Lg3ut',
			state : 'pFWuhDnG5cExlJPa',
			country_iso2 : 'Sp9WmijUbMPwTKkf',
			post_code : '6DxXCwVgqLQjb5S7',
		),
	),
);
```