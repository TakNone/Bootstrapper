# bots.getRequestedWebViewButton

**Description** : *Fetch the peer request button a bot prepared for a Mini App with bots\.requestWebViewButton, invoked when the Mini App emits a web\_app\_request\_chat event, see here &raquo; for more info*

**Layer** : 233

```tl
bots.getRequestedWebViewButton#bf25b7f3 bot:InputUser webapp_req_id:string = KeyboardButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that owns the Mini App |
| <mark>webapp_req_id</mark> | [`string`](type/string) | The Mini App request ID, taken from the web_app_request_chat event's req_id |

---

## Result

[KeyboardButton](type/KeyboardButton)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_ID_INVALID** | `400` | The specified bot ID is invalid |
| **WEBAPP_REQ_ID_INVALID** | `400` | The specified webapp_req_id is invalid |

---

## Example

```php
$keyboardButton = $client->bots->getRequestedWebViewButton(
	bot : $client->get_input_user(user : '@TakNone'),
	webapp_req_id : 'cDtbPsoSAx8H60Ca',
);
```