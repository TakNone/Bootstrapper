# auth.cancelWebTokenAuthorization

**Layer** : 233

```tl
auth.cancelWebTokenAuthorization#490dada1 web_auth_token:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>web_auth_token</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->auth->cancelWebTokenAuthorization(
	web_auth_token : 'grqTpkvW9Nz4x3u7',
);
```