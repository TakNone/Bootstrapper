# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 229

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
	id : 'b64Pd7CazuZ5QXkN',
	shipping_options : array(
		$client->shippingOption(
			id : 'PzgoCbhutKTXDyRQ',
			title : 'sLZ8vSQINlbE9Fhy',
			prices : array(
				$client->labeledPrice(
					label : 'ZGH1RYymtKxu2L7b',
					amount : 1481416106839226889,
				),
			),
		),
	),
);
```