# invokeWithApnsSecret

**Description** : *Official clients only, invoke with Apple push verification*

**Layer** : 227

```tl
invokeWithApnsSecret#0dae54f8 {X:Type} nonce:string secret:string query:!X = X;
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
	nonce : 'cE5bpuj6NtlSo1Fh',
	secret : 'bDZ92S4ntyNciuaU',
	query : $client->help->getConfig(raw : true),
);
```