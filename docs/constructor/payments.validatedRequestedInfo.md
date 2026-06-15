# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 227

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
	id : 'yseGJN63rkYFZX9M',
	shipping_options : array(
		$client->shippingOption(
			id : 'bY5HLw6GZ9IsdJ7x',
			title : '6OyJq3EdmeplrbNw',
			prices : array(
				$client->labeledPrice(
					label : 'wfa03xylCREZPW21',
					amount : -583848362540553869,
				),
			),
		),
	),
);
```