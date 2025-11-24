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
	id : 'fuj8k0alr2P1nHLY',
	shipping_options : array(
		$client->shippingOption(
			id : 'zu1EvLlmOhq5i2dX',
			title : 'NhpJWLe4nwctv39u',
			prices : array(
				$client->labeledPrice(
					label : 'ZsNkxfE0YlFPQX5g',
					amount : -6889466032643035668,
				),
			),
		),
	),
);
```