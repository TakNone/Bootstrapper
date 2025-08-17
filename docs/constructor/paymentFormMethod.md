# paymentFormMethod

**Description** : *Represents an additional payment method*

**Layer** : 211

```tl
paymentFormMethod#88f8f21b url:string title:string = PaymentFormMethod;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | URL to open in a webview to process the payment |
| <mark>title</mark> | [`string`](type/string) | Payment method description |

---

## Type

[PaymentFormMethod](type/PaymentFormMethod)

---

## Example

```php
$paymentFormMethod = $client->paymentFormMethod(
	url : 'https://docs.liveproto.dev',
	title : 'Z0Nknqto84Xglwh9',
);
```