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
	id : 'wWnAHmJqphPlMRjz',
	shipping_options : array(
		$client->shippingOption(
			id : 'tRI5ThsKjz6cqEOi',
			title : 'rLkdicbJtZumGw9f',
			prices : array(
				$client->labeledPrice(
					label : '2F57K3tJaC4flrHL',
					amount : -5126005352346354641,
				),
			),
		),
	),
);
```