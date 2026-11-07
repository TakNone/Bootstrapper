# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 233

```tl
payments.validatedRequestedInfo#d1451883 flags:# id:flags.0?string shipping_options:flags.1?Vector<ShippingOption> = payments.ValidatedRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **id** | [`flags.0?string`](type/string) | ID |
| **shipping_options** | [`flags.1?Vector<ShippingOption>`](type/ShippingOption) | Shipping options |

---

## Type

[payments.ValidatedRequestedInfo](type/payments.ValidatedRequestedInfo)

---

## Example

```php
$paymentsValidatedRequestedInfo = $client->payments->validatedRequestedInfo(
	id : 'l6Vi3FzIE4OMRhBg',
	shipping_options : array(
		$client->shippingOption(
			id : '41YeHCSE6h975rsn',
			title : 'azVxSlbyh7I2N1Po',
			prices : array(
				$client->labeledPrice(
					label : 'U0ZYDMxiKQNpEmGX',
					amount : 8414510415669583319,
				),
			),
		),
	),
);
```