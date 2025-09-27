# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 216

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
	id : 's2ui6Y189dmcWyQP',
	shipping_options : array(
		$client->shippingOption(
			id : 'pKSAymIr3VY8hT2o',
			title : '0KUOTbfI4GnMSmqX',
			prices : array(
				$client->labeledPrice(
					label : 't3Bpo9lLHXWqwDyI',
					amount : -1367331997036131532,
				),
			),
		),
	),
);
```