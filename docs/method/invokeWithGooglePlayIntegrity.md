# invokeWithGooglePlayIntegrity

**Description** : *Official clients only, invoke with Google Play Integrity token*

**Layer** : 216

```tl
invokeWithGooglePlayIntegrity#1df92984 {X:Type} nonce:string token:string query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>nonce</mark> | [`string`](type/string) | Nonce |
| <mark>token</mark> | [`string`](type/string) | Token |
| <mark>query</mark> | [`!X`](type/X) | Query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithGooglePlayIntegrity(
	nonce : 'um9ect5xSJkbCsUE',
	token : '8wWdDBmnU7KrcELj',
	query : $client->help->getConfig(raw : true),
);
```