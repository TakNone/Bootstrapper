# paymentCharge

**Description** : *Payment identifier*

**Layer** : 218

```tl
paymentCharge#ea02c27e id:string provider_charge_id:string = PaymentCharge;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Telegram payment identifier |
| <mark>provider_charge_id</mark> | [`string`](type/string) | Provider payment identifier |

---

## Type

[PaymentCharge](type/PaymentCharge)

---

## Example

```php
$paymentCharge = $client->paymentCharge(
	id : 'GITMxoYDuCbsth2J',
	provider_charge_id : 'sWRQfpM6tdqmaY2y',
);
```