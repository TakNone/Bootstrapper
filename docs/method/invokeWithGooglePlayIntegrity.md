# invokeWithGooglePlayIntegrity

**Description** : *Official clients only, invoke with Google Play Integrity token*

**Layer** : 218

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
	nonce : 'sLUPFrTvDSwaGp5J',
	token : 'SMXrNJa6gsKQZID4',
	query : $client->help->getConfig(raw : true),
);
```