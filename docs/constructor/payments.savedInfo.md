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
		name : 'wqAp37G8nio4tZve',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'tNABVamhz5RiQKxr',
			street_line2 : 'hjygckPLI027rewZ',
			city : 'LtGXlFd7wZcuyDUN',
			state : 'P52JQxndH1Z6S4q9',
			country_iso2 : 'qXPAsxK6hJLul5ik',
			post_code : 'UszZ7RxFGc9jMo1m',
		),
	),
);
```