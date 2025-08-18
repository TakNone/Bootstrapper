# payments.savedInfo

**Description** : *Saved server\-side order information*

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
		name : 'S9bedBjWQ2f4Tyno',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'vI8ySanHUs930x5P',
			street_line2 : 'Ydt7xTsCWZhRb6Qn',
			city : 'mnrIyA9szY6Fj8Jf',
			state : 'lveESNxRGD24QaVg',
			country_iso2 : '1LiuQnDOHceUI8xz',
			post_code : 'EoPr0dGhc8NAWq3T',
		),
	),
);
```