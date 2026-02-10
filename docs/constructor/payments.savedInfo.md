# payments.savedInfo

**Description** : *Saved server\-side order information*

**Layer** : 222

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
		name : 'h7ya5UA2O0rzS86F',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'zSJPaFgLdnRbi34W',
			street_line2 : 'cBX3lHC4SngjVsFA',
			city : 'RDj7uWGm4sUHEe3x',
			state : 'ZyRh7QYBbwJS0Xd6',
			country_iso2 : '3PhaEtsnMLmeT6gk',
			post_code : '6ZYU3vOLy8ToH2Bp',
		),
	),
);
```