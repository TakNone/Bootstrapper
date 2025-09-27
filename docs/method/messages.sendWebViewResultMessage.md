# messages.sendWebViewResultMessage

**Description** : *Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*

**Layer** : 214

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
	bot_query_id : '2JHq57KvoUfQyOnZ',
	result : $client->inputBotInlineResult(
		id : 'NbtgAydzfimeHQVr',
		type : 'yRBxcnz1K06sow3t',
		title : 'SbwVGd3oKpHy5WZ1',
		description : 'GlAEqyhaJNT1buxi',
		url : 'https://docs.liveproto.dev',
		thumb : $client->inputWebDocument(
			url : 'https://docs.liveproto.dev',
			size : 24,
			mime_type : 'H1faxYvjyJc3IG96',
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
			size : 22,
			mime_type : 'lt6Ah7cjYiFkzSBC',
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
			message : 'MOaKS5wsUj4BvI9d',
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