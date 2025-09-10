# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 214

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
		name : 'W5Jj76R49xpdUML2',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'he0O2EcSknyatRLr',
			street_line2 : 'QDfqKERlsHMBIdS8',
			city : '8ucqp9r0NYS1eCQD',
			state : 'Vlkb7viG42HNYqpL',
			country_iso2 : 'chep82W0dC5ywbT9',
			post_code : 'rTsNebwSn6Qz2DjP',
		),
	),
);
```