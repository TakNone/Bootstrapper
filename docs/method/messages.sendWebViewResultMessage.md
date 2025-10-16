# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 216

```tl
messages.sendWebViewResultMessage#a4314f5 bot_query_id:string result:InputBotInlineResult = WebViewMessageSent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_query_id</mark> | [`string`](type/string) | Webview interaction ID obtained from messages.requestWebView |
| <mark>result</mark> | [`InputBotInlineResult`](type/InputBotInlineResult) | Message to send |

---

## Result

[WebViewMessageSent](type/WebViewMessageSent)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_ID_INVALID** | `400` | The query ID is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$webViewMessageSent = $client->messages->sendWebViewResultMessage(
	bot_query_id : 'hnT1KBAdgWkMtC0f',
	result : $client->inputBotInlineResult(
		id : 'bmZieMGVyEu3xsk2',
		type : 'WxDTYdX248thgflr',
		title : 'nvN2wirmJxk6a4gB',
		description : 'oIWgPUQmL2ZcGsNe',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 60,
			mime_type : 'r8jstpqXJvdwb9Kg',
			attributes : array(
				$client->documentAttributeImageSize(...),
				$client->documentAttributeAnimated(...),
				$client->documentAttributeSticker(...),
				$client->documentAttributeVideo(...),
				$client->documentAttributeAudio(...),
				$client->documentAttributeFilename(...),
				$client->documentAttributeHasStickers(...),
				$client->documentAttributeCustomEmoji(...),
			),
		),
		content : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 48,
			mime_type : 'uNlc6rkYEw0sDmgo',
			attributes : array(
				$client->documentAttributeImageSize(...),
				$client->documentAttributeAnimated(...),
				$client->documentAttributeSticker(...),
				$client->documentAttributeVideo(...),
				$client->documentAttributeAudio(...),
				$client->documentAttributeFilename(...),
				$client->documentAttributeHasStickers(...),
				$client->documentAttributeCustomEmoji(...),
			),
		),
		send_message : $client->inputBotInlineMessageMediaAuto(
			invert_media : true,
			message : 'sSL4E6YXo8CQK0zW',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
			reply_markup : $client->replyKeyboardHide(...),
		),
	),
);
```