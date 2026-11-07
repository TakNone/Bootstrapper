# inputInvoicePremiumAuthCode

**Description** : *Used to pay for login codes, in case of high cost of SMS verification codes for the user&#039;s country/provider, see here &raquo; for more info*

**Layer** : 233

```tl
inputInvoicePremiumAuthCode#3e77f614 purpose:InputStorePaymentPurpose = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Must contain an inputStorePaymentAuthCode |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoicePremiumAuthCode(
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```