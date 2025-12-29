# bots.checkDownloadFileParams

**Description** : *Check if a mini app can request the download of a specific file: called when handling web\_app\_request\_file\_download events &raquo;*

**Layer** : 218

```tl
bots.checkDownloadFileParams#50077589 bot:InputUser file_name:string url:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the mini app that requested the download |
| <mark>file_name</mark> | [`string`](type/string) | The filename from the web_app_request_file_download event » |
| <mark>url</mark> | [`string`](type/string) | The url from the web_app_request_file_download event » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->bots->checkDownloadFileParams(
	bot : $client->get_input_user(user : '@TakNone'),
	file_name : 'ilN8cmDj6eSR7ntq',
	url : 'https://docs.liveproto.dev',
);
```