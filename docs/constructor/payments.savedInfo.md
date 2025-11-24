# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 218

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
		name : 'mcNSWk8nO9j3s7D5',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'LqDTJoaEnSdgxj8V',
			street_line2 : '2QAvo3mzUcOJnsMf',
			city : 'XDrMWYudAtzlmJoh',
			state : 'mRBkrxqQ9eLoMNiC',
			country_iso2 : 'UfZR69nQE8CFLNhc',
			post_code : 'vK7dLySVEA23Y5Fo',
		),
	),
);
```