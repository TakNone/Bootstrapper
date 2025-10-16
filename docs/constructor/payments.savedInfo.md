# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 216

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
		name : '65NnZTt9RlxHXP3M',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'Rg9HTEVaLS6nQYOi',
			street_line2 : 'pDNFyxhtiSfg18Ab',
			city : 'vLbTxYRe4iromNBU',
			state : '8WqtL6iQGCXgSOK1',
			country_iso2 : 'qLMXeN9uEWFtcx2H',
			post_code : '2QJ5mWxPTGFK3YEe',
		),
	),
);
```