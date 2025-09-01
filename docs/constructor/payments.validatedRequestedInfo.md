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
	id : 'Ge5ER2NbJ8LlHzK0',
	shipping_options : array(
		$client->shippingOption(
			id : 'HdDqEQhZVScTPf6A',
			title : '36bn1ltzy8Y25Lum',
			prices : array(
				$client->labeledPrice(
					label : 'kHS7Bvy9nj4mMsVQ',
					amount : -7051347920287191587,
				),
			),
		),
	),
);
```