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
	id : '390mo4sND6CfHrhy',
	shipping_options : array(
		$client->shippingOption(
			id : 'sjBRpkzyaXYP4w3C',
			title : 'aRhI6SQoembrWqDF',
			prices : array(
				$client->labeledPrice(
					label : 'YWrPpZ652euwTaHR',
					amount : 824416884818731678,
				),
			),
		),
	),
);
```