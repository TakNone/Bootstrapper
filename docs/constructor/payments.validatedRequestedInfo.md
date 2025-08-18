# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

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
	id : '2tBJceY0zqy5oSPb',
	shipping_options : array(
		$client->shippingOption(
			id : 'mRdDa8MsnBQwPb60',
			title : '7mCuS6BIsxNzekoE',
			prices : array(
				$client->labeledPrice(
					label : '9MS68AZv7kfaersm',
					amount : 7399350821067875579,
				),
			),
		),
	),
);
```