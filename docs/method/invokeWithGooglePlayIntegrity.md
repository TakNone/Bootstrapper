# invokeWithGooglePlayIntegrity

**Description** : *Official clients only, invoke with Google Play Integrity token*

**Layer** : 227

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
	nonce : '7H40zBTcyPYGoS8r',
	token : '5o8CP7YK2yMRgGEU',
	query : $client->help->getConfig(raw : true),
);
```