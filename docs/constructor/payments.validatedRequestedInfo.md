# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 222

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
	id : 'fNOKMdVzJG6TyuPb',
	shipping_options : array(
		$client->shippingOption(
			id : 'G0WTR6Z5xF4LyUct',
			title : 'LEvBJ85yACpTi7jb',
			prices : array(
				$client->labeledPrice(
					label : 'Xeg4DTc7L8KBFlpN',
					amount : -4213331660966601154,
				),
			),
		),
	),
);
```