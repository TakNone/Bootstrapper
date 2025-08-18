# bots.sendCustomRequest

**Description** : *Sends a custom request; for bots only*

**Layer** : 211

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
| **USER_BOT_INVALID** | `403` | User accounts must provide the bot method parameter when calling this method. If there is no such method parameter, this method can only be invoked by bot accounts |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$dataJSON = $client->bots->sendCustomRequest(
	custom_method : '0OYxWroI8neztf9c',
	params : $client->dataJSON(
		data : 'sU7gyXGJnxpSaQEm',
	),
);
```