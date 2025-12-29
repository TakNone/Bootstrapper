# messages.requestWebView

**Description** : *Open a bot mini app, sending over user information after user confirmation*

**Layer** : 218

```tl
messages.requestWebView#269dc2c1 flags:# from_bot_menu:flags.4?true silent:flags.5?true compact:flags.7?true fullscreen:flags.8?true peer:InputPeer bot:InputUser url:flags.1?string start_param:flags.3?string theme_params:flags.2?DataJSON platform:string reply_to:flags.0?InputReplyTo send_as:flags.13?InputPeer = WebViewResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	bot : $client->get_input_user(user : '@TakNone'),
	url : 'https://docs.liveproto.dev',
	start_param : 'kaAlGvdRjXV25sNn',
	theme_params : $client->dataJSON(
		data : 'sv0m6xVX5qGhjUpL',
	),
	platform : 'GxCRWjB0AMfFZkQs',
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 12,
		top_msg_id : 55,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'qe8oEP9YhLgRfU3c',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 65,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 69,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 33,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : '7qEoAdTtfXZQecBk',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : 4181760707360538229,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 95,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 93,
				document_id : 6365175208231917480,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 27,
			),
		),
		quote_offset : 97,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 0,
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```