# messages.requestWebView

**Description** : *Open a bot mini app, sending over user information after user confirmation*

**Layer** : 211

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
	start_param : 'ae1BgMvWXiurwUZF',
	theme_params : $client->dataJSON(
		data : 'YlyosSqpEBt3WgFP',
	),
	platform : 'Vwk6MgXe8rup9m4F',
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 84,
		top_msg_id : 10,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'pdgsQf8URIl0wvZH',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 18,
				length : 66,
			),
			$client->messageEntityMention(
				offset : 48,
				length : 18,
			),
			$client->messageEntityHashtag(
				offset : 61,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 82,
				length : 41,
			),
			$client->messageEntityUrl(
				offset : 5,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 80,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 78,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 10,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 6,
				length : 71,
			),
			$client->messageEntityPre(
				offset : 82,
				length : 61,
				language : 'ZnDbtQ2LCzEejSAR',
			),
			$client->messageEntityTextUrl(
				offset : 30,
				length : 80,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 72,
				length : 20,
				user_id : 6839629915538633148,
			),
			$client->inputMessageEntityMentionName(
				offset : 36,
				length : 9,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 48,
				length : 44,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 14,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 40,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 54,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 94,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 32,
				length : 62,
				document_id : 6070106394543681333,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 64,
				length : 9,
			),
		),
		quote_offset : 3,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 64,
	),
	send_as : $client->inputPeerEmpty(),
);
```