# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 233

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
		name : 'jJ6hmSZoLTKsYQwx',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '8Wvrqbe6B5RQIMgf',
			street_line2 : '3nYXAE6iITcBHajG',
			city : 'zW3aIRX7Ec05O2eU',
			state : 'vwbcXVnLHJjoF1a9',
			country_iso2 : 'MzvZTl546RA0rN72',
			post_code : 'awAznmqry0e3sTH2',
		),
	),
);
```