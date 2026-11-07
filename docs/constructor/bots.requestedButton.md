# bots.requestedButton

**Description** : *Contains the request ID a bot should pass to a Mini App after preparing a peer request button with bots\.requestWebViewButton, see here &raquo; for more info*

**Layer** : 233

```tl
bots.requestedButton#f13bbcd7 webapp_req_id:string = bots.RequestedButton;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>webapp_req_id</mark> | [`string`](type/string) | Mini App request ID, to be passed by the bot to the Mini App and then back to bots.getRequestedWebViewButton and messages.sendBotRequestedPeer |

---

## Type

[bots.RequestedButton](type/bots.RequestedButton)

---

## Example

```php
$botsRequestedButton = $client->bots->requestedButton(
	webapp_req_id : '2UpIc8vKmfsFruPo',
);
```