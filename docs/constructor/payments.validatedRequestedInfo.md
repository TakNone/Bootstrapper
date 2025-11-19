# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 218

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
	id : 'yOMKemob9gwAutqs',
	shipping_options : array(
		$client->shippingOption(
			id : 'GXZmO0Kj6qEWP1hA',
			title : 'x246Mw13KtWVQgps',
			prices : array(
				$client->labeledPrice(
					label : 'heKC0PBoZzAqdmXp',
					amount : -3913443111568436042,
				),
			),
		),
	),
);
```