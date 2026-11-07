# messages.translateText

**Description** : *Translate a given text*

**Layer** : 233

```tl
messages.translateText#a5eec345 flags:# peer:flags.0?InputPeer id:flags.0?Vector<int> text:flags.1?Vector<TextWithEntities> to_lang:string tone:flags.2?string = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.0?InputPeer`](type/InputPeer) | If the text is a chat message, the peer ID |
| **id** | [`flags.0?Vector<int>`](type/int) | A list of message IDs to translate |
| **text** | [`flags.1?Vector<TextWithEntities>`](type/TextWithEntities) | A list of styled messages to translate |
| <mark>to_lang</mark> | [`string`](type/string) | Two-letter ISO 639-1 language code of the language to which the message is translated |
| **tone** | [`flags.2?string`](type/string) | If set, rephrases the translation using the specified AI composer tone » (pass the tone identifier) |

---

## Result

[messages.TranslatedText](type/messages.TranslatedText)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_TEXT_EMPTY** | `400` | The specified text is empty |
| **INPUT_TEXT_TOO_LONG** | `400` | The specified text is too long |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TO_LANG_INVALID** | `400` | The specified destination language is invalid |
| **TRANSLATE_REQ_FAILED** | `500` | Translation failed, please try again later |
| **TRANSLATE_REQ_QUOTA_EXCEEDED** | `400` | Translation is currently unavailable due to a temporary server-side lack of resources |
| **TRANSLATIONS_DISABLED** | `406` | Translations are unavailable, a detailed and localized description for the error will be emitted via an updateServiceNotification as specified here » |
| **TRANSLATION_TIMEOUT** | `500` | A timeout occurred while translating the specified text |

---

## Example

```php
$messagesTranslatedText = $client->messages->translateText(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(47),
	text : array(
		$client->textWithEntities(
			text : '4TY7z0eQFVkGP3CA',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 53,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 87,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 1,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 43,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 41,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 13,
					language : 'YQW1e5BAT8HwXclk',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 32,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 12,
					user_id : -5080117180847384234,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 99,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 75,
					document_id : 636217831601335769,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 62,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 42,
					date : 48,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 96,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 81,
					old_text : 'kZCw1KLJRp9xV86d',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 13,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 3,
				),
			),
		),
	),
	to_lang : 'rRgmxCft0LD5QIWY',
	tone : 'UQbZBF5NYSrpf9sj',
);
```