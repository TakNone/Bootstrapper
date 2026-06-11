# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 227

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
		name : '3t9JTiezw4Eb5Ngq',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'RfkEi1gTlPKOYtwv',
			street_line2 : 'lFr3HJAKmagRj1Q8',
			city : 'rdfhnk8RjsVGIuto',
			state : '9hGenMBiFWovSNcL',
			country_iso2 : 'cGiMQaW73l0yrgoB',
			post_code : 'G4irFcMptzY1EQvq',
		),
	),
);
```