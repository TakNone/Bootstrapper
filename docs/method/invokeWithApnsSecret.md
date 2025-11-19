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
	nonce : 'IbBo3CAJOxaVvDu2',
	secret : '8NnQIyp6UMq3udAY',
	query : $client->help->getConfig(raw : true),
);
```