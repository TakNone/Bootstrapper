# messages.requestWebView

**Description** : *Open a bot mini app, sending over user information after user confirmation*

**Layer** : 214

```tl
messages.requestWebView#269dc2c1 flags:# from_bot_menu:flags.4?true silent:flags.5?true compact:flags.7?true fullscreen:flags.8?true peer:InputPeer bot:InputUser url:flags.1?string start_param:flags.3?string theme_params:flags.2?DataJSON platform:string reply_to:flags.0?InputReplyTo send_as:flags.13?InputPeer = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **from_bot_menu** | [`flags.4?true`](type/true) | Whether the webview was opened by clicking on the bot's menu button » |
| **silent** | [`flags.5?true`](type/true) | Whether the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent silently (no notifications for the receivers) |
| **compact** | [`flags.7?true`](type/true) | If set, requests to open the mini app in compact mode (as opposed to normal or fullscreen mode). Must be set if the mode parameter of the attachment menu deep link is equal to compact |
| **fullscreen** | [`flags.8?true`](type/true) | If set, requests to open the mini app in fullscreen mode (as opposed to normal or compact mode). Must be set if the mode parameter of the attachment menu deep link is equal to fullscreen |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Dialog where the web app is being opened, and where the resulting message will be sent (see the docs for more info ») |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the web app |
| **url** | [`flags.1?string`](type/string) | Web app URL |
| **start_param** | [`flags.3?string`](type/string) | If the web app was opened from the attachment menu using a attachment menu deep link, start_param should contain the data from the startattach parameter |
| **theme_params** | [`flags.2?DataJSON`](type/DataJSON) | Theme parameters » |
| <mark>platform</mark> | [`string`](type/string) | Short name of the application; 0-64 English letters, digits, and underscores |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent in reply to the specified message or story |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Open the web app as the specified peer, sending the resulting the message as the specified peer |

---

## Result

[WebViewResult](type/WebViewResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **BOT_WEBVIEW_DISABLED** | `400` | A webview cannot be opened in the specified conditions: emitted for example if from_bot_menu or url are set and peer is not the chat with the bot |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PRIVACY_PREMIUM_REQUIRED** | `403` | You need a Telegram Premium subscription to send a message to this user |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |
| **THEME_PARAMS_INVALID** | `400` | The specified theme_params field is invalid |
| **URL_INVALID** | `400` | Invalid URL provided |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$webViewResult = $client->messages->requestWebView(
	from_bot_menu : true,
	silent : true,
	compact : true,
	fullscreen : true,
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
	url : 'https://docs.liveproto.dev',
	start_param : 'oOKZl7eHtkVJQhvb',
	theme_params : $client->dataJSON(
		data : 'RujcnA3pwrXf26N0',
	),
	platform : 'lCR9PtakVhz0ryHd',
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 81,
		top_msg_id : 29,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'Y1JtMChkzjrfWA6E',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 70,
				length : 71,
			),
			$client->messageEntityMention(
				offset : 53,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 32,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 82,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 73,
				length : 21,
			),
			$client->messageEntityEmail(
				offset : 72,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 46,
				length : 72,
			),
			$client->messageEntityItalic(
				offset : 40,
				length : 76,
			),
			$client->messageEntityCode(
				offset : 95,
				length : 16,
			),
			$client->messageEntityPre(
				offset : 97,
				length : 28,
				language : '3wDvj9Lcm0IJAUeE',
			),
			$client->messageEntityTextUrl(
				offset : 78,
				length : 48,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 55,
				length : 79,
				user_id : 2334796694449244391,
			),
			$client->inputMessageEntityMentionName(
				offset : 62,
				length : 78,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 6,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 4,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 86,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 43,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 78,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 84,
				length : 7,
			),
			$client->messageEntityCustomEmoji(
				offset : 66,
				length : 33,
				document_id : 2820039357494901898,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 6,
				length : 59,
			),
		),
		quote_offset : 41,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 3,
	),
	send_as : $client->inputPeerEmpty(),
);
```