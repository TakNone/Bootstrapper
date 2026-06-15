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
		name : 'H5pC4EUifzvOAtZs',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'vK5kxW04zM1buDtd',
			street_line2 : 'RisW8uBCyd2QtYSO',
			city : 'WTul8JtbS9704POk',
			state : '8uVt1PlHdaiYTCOF',
			country_iso2 : 'Cq4MO73xLHlvkg6m',
			post_code : 'gdEcBF4DTSvzJy5A',
		),
	),
);
```