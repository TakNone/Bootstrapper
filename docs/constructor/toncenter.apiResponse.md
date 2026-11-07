# toncenter.apiResponse

**Layer** : 233

```tl
toncenter.apiResponse#ac8dfe19 response:DataJSON = toncenter.ApiResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>response</mark> | [`DataJSON`](type/DataJSON) | NOTHING |

---

## Type

[toncenter.ApiResponse](type/toncenter.ApiResponse)

---

## Example

```php
$toncenterApiResponse = $client->toncenter->apiResponse(
	response : $client->dataJSON(
		data : 'hEJ4RP8kQ0FXZTGy',
	),
);
```