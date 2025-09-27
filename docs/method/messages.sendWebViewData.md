# messages.sendWebViewData

**Description** : *Used by the user to relay data from an opened reply keyboard bot mini app to the bot that owns it*

**Layer** : 214

```tl
messages.sendWebViewData#dc0242c8 bot:InputUser random_id:long button_text:string data:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the web app |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID to prevent duplicate sending of the same event |
| <mark>button_text</mark> | [`string`](type/string) | Text of the keyboardButtonSimpleWebView that was pressed to open the web app |
| <mark>data</mark> | [`string`](type/string) | Data to relay to the bot, obtained from a web_app_data_send JS event |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$updates = $client->messages->sendWebViewData(
	bot : $client->inputUserEmpty(),
	random_id : -6943976999181267311,
	button_text : '0o3Gt8UrJZ7z5Bnu',
	data : 'IQPpuoZsmb0xW1g4',
);
```