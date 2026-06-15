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
	id : 'xY1eCsbdzkL4UiJN',
	shipping_options : array(
		$client->shippingOption(
			id : 'jPUaOqvRuc7ZAs9y',
			title : 'uIBQA9SkMNG5whDf',
			prices : array(
				$client->labeledPrice(
					label : '2LfObG1NChIumtiP',
					amount : 6908490216620006741,
				),
			),
		),
	),
);
```