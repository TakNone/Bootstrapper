# toncenter.performApiRequest

**Layer** : 233

```tl
toncenter.performApiRequest#8d7bdd61 flags:# post:flags.0?true endpoint:string query:flags.1?string payload:flags.2?string = toncenter.ApiResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **post** | [`flags.0?true`](type/true) | NOTHING |
| <mark>endpoint</mark> | [`string`](type/string) | NOTHING |
| **query** | [`flags.1?string`](type/string) | NOTHING |
| **payload** | [`flags.2?string`](type/string) | NOTHING |

---

## Result

[toncenter.ApiResponse](type/toncenter.ApiResponse)

---

## Example

```php
$toncenterApiResponse = $client->toncenter->performApiRequest(
	post : true,
	endpoint : 'KpnNdyUah6wYtq0V',
	query : 'jGzyq9khS3OPU84W',
	payload : 'KfkqLicyW0SprGRC',
);
```