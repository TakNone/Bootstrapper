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
		name : 'o5B1maWw3v06SH2Q',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'Ls2NEvA4Iz3JnuHO',
			street_line2 : 'esduLk1TcwaFOErA',
			city : 'mTtHhyVqMjz9sJZF',
			state : 'yMfAbDemUrnPOKXI',
			country_iso2 : '4X1Jukyfce0WTCFj',
			post_code : 'VtOsRd8mjJh6QMNG',
		),
	),
);
```