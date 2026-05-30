# payments.validatedRequestedInfo

**Description** : *Validated user\-provided info*

**Layer** : 225

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
	id : 'ibZ86UaQJ1p2Wky5',
	shipping_options : array(
		$client->shippingOption(
			id : 'DLPAlWUc5eYaE9zm',
			title : 'CRUzLw0bu2ahWc87',
			prices : array(
				$client->labeledPrice(
					label : 'CkLNvzGrp04ZHFxM',
					amount : 4466107559052547670,
				),
			),
		),
	),
);
```