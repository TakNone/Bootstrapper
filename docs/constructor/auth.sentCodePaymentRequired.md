# auth.sentCodePaymentRequired

**Description** : *Official apps may receive this constructor, indicating that due to the high cost of SMS verification codes for the user&#039;s country/provider, the user must purchase a Telegram Premium subscription in order to proceed with the login/signup, see here &raquo; for more info*

**Layer** : 233

```tl
auth.sentCodePaymentRequired#f8827ebf store_product:string phone_code_hash:string support_email_address:string support_email_subject:string premium_days:int currency:string amount:long = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>store_product</mark> | [`string`](type/string) | For official apps, tore identifier of the Telegram Premium subscription |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash, to be stored and later re-used with auth.signIn |
| <mark>support_email_address</mark> | [`string`](type/string) | An email address that can be contacted for more information about this request |
| <mark>support_email_subject</mark> | [`string`](type/string) | The mandatory subject for the email |
| <mark>premium_days</mark> | [`int`](type/int) | Duration in days of the Telegram Premium subscription granted by this purchase |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodePaymentRequired(
	store_product : 'ktDvLCERoN0spje7',
	phone_code_hash : '+1234567890',
	support_email_address : 'reply@liveproto.dev',
	support_email_subject : 'reply@liveproto.dev',
	premium_days : 87,
	currency : 'GlUyzAaLCiNB4c9k',
	amount : -3604545496250608338,
);
```