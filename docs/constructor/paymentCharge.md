# paymentCharge

**Description** : *Payment identifier*

**Layer** : 214

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
	id : '5U6sm1yAHvjbidzY',
	provider_charge_id : '9pmX3YhOzdequEwT',
);
```