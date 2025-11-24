# bots.invokeWebViewCustomMethod

**Description** : *Send a custom request from a mini bot app, triggered by a web\_app\_invoke\_custom\_method event &raquo;*

**Layer** : 218

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
| **METHOD_INVALID** | `400` | The specified method is invalid |

---

## Example

```php
$dataJSON = $client->bots->invokeWebViewCustomMethod(
	bot : $client->get_input_user(user : '@TakNone'),
	custom_method : 'OaF7GeC8vky1JjEm',
	params : $client->dataJSON(
		data : 'J5UlegNVOp3ykwYo',
	),
);
```