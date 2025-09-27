# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 214

```tl
payments.validatedRequestedInfo#d1451883 flags:# id:flags.0?string shipping_options:flags.1?Vector<ShippingOption> = payments.ValidatedRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **id** | [`flags.0?string`](type/string) | ID |
| **shipping_options** | [`flags.1?Vector<ShippingOption>`](type/ShippingOption) | Shipping options |

---

## Type

[payments.ValidatedRequestedInfo](type/payments.ValidatedRequestedInfo)

---

## Example

```php
$paymentsValidatedRequestedInfo = $client->payments->validatedRequestedInfo(
	id : 'q8VG4WpwlThz15Du',
	shipping_options : array(
		$client->shippingOption(
			id : '9MX6CreEfRvPAqzd',
			title : 'WKOjsyo0kBvDLZ7Q',
			prices : array(
				$client->labeledPrice(
					label : 'RlBWLjoN1nib5cVI',
					amount : 269896606968161511,
				),
			),
		),
	),
);
```