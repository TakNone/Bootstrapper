# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 229

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
		name : 'SmWALuoBHv1V2xaQ',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'dXmaptGjYD7I3bRw',
			street_line2 : 'haU6odZSt8vrIzHO',
			city : 'h4X1WJ95FaoCM2gY',
			state : 'h3DjqfStWoGY9BR4',
			country_iso2 : 'zusERrKDnakMSA0I',
			post_code : 'PoHA9OC0IeMsv7y4',
		),
	),
);
```