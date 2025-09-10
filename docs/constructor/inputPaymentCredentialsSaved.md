# inputPaymentCredentialsSaved

**Description** : *Saved payment credentials*

**Layer** : 214

```tl
inputPaymentCredentialsSaved#c10eb2cf id:string tmp_password:bytes = InputPaymentCredentials;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Credential ID |
| <mark>tmp_password</mark> | [`bytes`](type/bytes) | Temporary password |

---

## Type

[InputPaymentCredentials](type/InputPaymentCredentials)

---

## Example

```php
$inputPaymentCredentials = $client->inputPaymentCredentialsSaved(
	id : 'iHJ8okf5UAYOy4gF',
	tmp_password : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```