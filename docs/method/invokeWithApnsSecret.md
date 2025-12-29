# invokeWithApnsSecret

**Description** : *Official clients only, invoke with Apple push verification*

**Layer** : 218

```tl
invokeWithApnsSecret#dae54f8 {X:Type} nonce:string secret:string query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>nonce</mark> | [`string`](type/string) | Nonce |
| <mark>secret</mark> | [`string`](type/string) | Secret |
| <mark>query</mark> | [`!X`](type/X) | Query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithApnsSecret(
	nonce : '2gWpCtYxfmkndDlO',
	secret : 'sBEQ8ma2o34NXLKn',
	query : $client->help->getConfig(raw : true),
);
```