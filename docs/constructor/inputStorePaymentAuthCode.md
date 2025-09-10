# inputStorePaymentAuthCode

**Layer** : 214

```tl
inputStorePaymentAuthCode#9bb2636d flags:# restore:flags.0?true phone_number:string phone_code_hash:string currency:string amount:long = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **restore** | [`flags.0?true`](type/true) | NOTHING |
| <mark>phone_number</mark> | [`string`](type/string) | NOTHING |
| <mark>phone_code_hash</mark> | [`string`](type/string) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentAuthCode(
	restore : true,
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	currency : 'cHyUYXoW6Rk9lLOd',
	amount : -3475004416291021709,
);
```