# messages.translateText

**Description** : *Translate a given text*

**Layer** : 222

```tl
messages.translateText#63183030 flags:# peer:flags.0?InputPeer id:flags.0?Vector<int> text:flags.1?Vector<TextWithEntities> to_lang:string = messages.TranslatedText;
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
	id : array(20),
	text : array(
		$client->textWithEntities(
			text : 'WzJtecABNswZX9FU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 6,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 52,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 60,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 19,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 32,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 92,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 97,
					language : '0esxj2KOSRwfL3yT',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : -1497802124224787105,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 26,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 12,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 9,
					document_id : 8980923891163563701,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
			),
		),
	),
	to_lang : 'mUSrOFftawiZhXEe',
);
```