# invokeWithApnsSecret

**Description** : *Official clients only, invoke with Apple push verification*

**Layer** : 216

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
	nonce : 'pJlR2ayWI0iqfZrQ',
	secret : 'jbS9A8cC1TynpXq3',
	query : $client->help->getConfig(raw : true),
);
```