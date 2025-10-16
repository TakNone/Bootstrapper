# paymentCharge

**Description** : *Payment identifier*

**Layer** : 216

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
	id : 'crqTNKeAWx8n2Vzh',
	provider_charge_id : 'YjNEPzce0UdWk3T9',
);
```