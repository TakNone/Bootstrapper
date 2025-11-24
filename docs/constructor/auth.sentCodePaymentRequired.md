# auth.sentCodePaymentRequired

**Description** : *Official apps may receive this constructor, indicating that due to the high cost of SMS verification codes for the user&#039;s country/provider, the user must purchase a Telegram Premium subscription in order to proceed with the login/signup*

**Layer** : 218

```tl
auth.sentCodePaymentRequired#e0955a3c store_product:string phone_code_hash:string support_email_address:string support_email_subject:string currency:string amount:long = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>store_product</mark> | [`string`](type/string) | Store identifier of the Telegram Premium subscription |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash, to be stored and later re-used with auth.signIn |
| <mark>support_email_address</mark> | [`string`](type/string) | An email address that can be contacted for more information about this request |
| <mark>support_email_subject</mark> | [`string`](type/string) | The mandatory subject for the email |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[auth.SentCode](type/auth.SentCode)

---

## Example

```php
$authSentCode = $client->auth->sentCodePaymentRequired(
	store_product : '7DcuTzQKUx9sRA4j',
	phone_code_hash : '+1234567890',
	support_email_address : 'reply@liveproto.dev',
	support_email_subject : 'reply@liveproto.dev',
	currency : 't8usCxj0BVf91OAN',
	amount : -3456732134824797489,
);
```