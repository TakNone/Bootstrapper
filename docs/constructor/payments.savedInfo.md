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
		name : 'rgwpP6Qc4kRui5EC',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'WDM5jptcfih4aPLu',
			street_line2 : 'D96digw3zmBXjEQY',
			city : 'X5y1ga8FVovuAMkt',
			state : 'Sp36WcYFXZDaOdV9',
			country_iso2 : 'FkCX6rbfNR48Ee1A',
			post_code : '9tkcz76AiTBYjZK5',
		),
	),
);
```