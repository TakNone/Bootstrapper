# inputPaymentCredentialsSaved

**Description** : *Saved payment credentials*

**Layer** : 211

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
	id : 'Fa4WEclj1RNyVHS5',
	tmp_password : 'D?n?LiveProto??W?',
);
```