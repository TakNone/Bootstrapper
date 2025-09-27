# inputStorePaymentStarsGift

**Description** : *Used to gift Telegram Stars to a friend*

**Layer** : 216

```tl
inputStorePaymentStarsGift#1d741ef7 user_id:InputUser stars:long currency:string amount:long = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user to which the stars should be gifted |
| <mark>stars</mark> | [`long`](type/long) | Amount of stars to gift |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentStarsGift(
	user_id : $client->inputUserEmpty(),
	stars : 1508838890186792196,
	currency : 'k7CNa6zXQmPwoyKx',
	amount : 4394438972469485711,
);
```