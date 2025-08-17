# payments.validatedRequestedInfo

**Description** : *Validated user-provided info*

**Layer** : 211

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
	id : 'iDygELhJav6UpfwK',
	shipping_options : array(
		$client->shippingOption(
			id : '0UnPqOeICLzwiGZf',
			title : 'CeGkB9qVv78fgEI5',
			prices : array(
				$client->labeledPrice(
					label : 'jqwXL5h2KR3IptWD',
					amount : 1015872939059166673,
				),
			),
		),
	),
);
```