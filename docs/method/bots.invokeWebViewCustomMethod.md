# bots.invokeWebViewCustomMethod

**Description** : *Send a custom request from a mini bot app, triggered by a web_app_invoke_custom_method event »*

**Layer** : 211

```tl
bots.invokeWebViewCustomMethod#87fc5e7 bot:InputUser custom_method:string params:DataJSON = DataJSON;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Identifier of the bot associated to the mini bot app |
| <mark>custom_method</mark> | [`string`](type/string) | Identifier of the custom method to invoke |
| <mark>params</mark> | [`DataJSON`](type/DataJSON) | Method parameters |

---

## Result

[DataJSON](type/DataJSON)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **DATA_JSON_INVALID** | `400` | The provided JSON data is invalid |

---

## Example

```php
$dataJSON = $client->bots->invokeWebViewCustomMethod(
	bot : $client->inputUserEmpty(),
	custom_method : 'Vjxf4DY6aRGnHLd8',
	params : $client->dataJSON(
		data : 'tYq9VSl3byhmPi1J',
	),
);
```