# payments.getBankCardData

**Description** : *Get info about a credit card*

**Layer** : 218

```tl
payments.getBankCardData#2e79d779 number:string = payments.BankCardData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>number</mark> | [`string`](type/string) | Credit card number |

---

## Result

[payments.BankCardData](type/payments.BankCardData)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BANK_CARD_NUMBER_INVALID** | `400` | The specified card number is invalid |

---

## Example

```php
$paymentsBankCardData = $client->payments->getBankCardData(
	number : '9cHMlWmI0As3XdCn',
);
```