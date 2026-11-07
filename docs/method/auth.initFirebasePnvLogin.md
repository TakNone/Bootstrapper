# auth.initFirebasePnvLogin

**Layer** : 233

```tl
auth.initFirebasePnvLogin#644f15c0 flags:# except_ids:flags.0?Vector<long> api_id:int api_hash:string = auth.FirebasePnvIntent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **except_ids** | [`flags.0?Vector<long>`](type/long) | NOTHING |
| <mark>api_id</mark> | [`int`](type/int) | NOTHING |
| <mark>api_hash</mark> | [`string`](type/string) | NOTHING |

---

## Result

[auth.FirebasePnvIntent](type/auth.FirebasePnvIntent)

---

## Example

```php
$authFirebasePnvIntent = $client->auth->initFirebasePnvLogin(
	except_ids : array(3671150435191710004),
	api_id : 85,
	api_hash : '5hIQdo3plxLj7AmU',
);
```