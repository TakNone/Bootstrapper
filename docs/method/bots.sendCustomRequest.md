# bots.sendCustomRequest

**Description** : *Sends a custom request; for bots only*

**Layer** : 218

```tl
bots.sendCustomRequest#aa2769ed custom_method:string params:DataJSON = DataJSON;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>custom_method</mark> | [`string`](type/string) | The method name |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | JSON-serialized method parameters |

---

## Result

[DataJSON](type/DataJSON)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |
| **METHOD_INVALID** | `400` | The specified method is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$dataJSON = $client->bots->sendCustomRequest(
	custom_method : 'PG23tcxsgYUR5kSH',
	params : $client->dataJSON(
		data : 'tsWp0m9PM3eBSi6O',
	),
);
```