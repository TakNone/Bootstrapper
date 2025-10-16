# inputStorePaymentAuthCode

**Description** : *Indicates payment for a login code*

**Layer** : 216

```tl
inputStorePaymentAuthCode#9bb2636d flags:# restore:flags.0?true phone_number:string phone_code_hash:string currency:string amount:long = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **restore** | [`flags.0?true`](type/true) | Set this flag to restore a previously made purchase |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | phone_code_hash returned by auth.sendCode |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

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
	currency : 'C3oEOA26vIFtu70y',
	amount : 6481700226028826762,
);
```