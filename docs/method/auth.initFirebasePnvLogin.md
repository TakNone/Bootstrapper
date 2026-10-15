# auth.initFirebasePnvLogin

**Layer** : 229

```tl
auth.initFirebasePnvLogin#777df37a api_id:int api_hash:string = auth.FirebasePnvIntent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>api_id</mark> | [`int`](type/int) | NOTHING |
| <mark>api_hash</mark> | [`string`](type/string) | NOTHING |

---

## Result

[auth.FirebasePnvIntent](type/auth.FirebasePnvIntent)

---

## Example

```php
$authFirebasePnvIntent = $client->auth->initFirebasePnvLogin(
	api_id : 82,
	api_hash : 'OqckVaMi1nyxblWN',
);
```