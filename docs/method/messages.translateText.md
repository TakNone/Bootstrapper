# messages.translateText

**Description** : *Translate a given text*

**Layer** : 218

```tl
messages.translateText#63183030 flags:# peer:flags.0?InputPeer id:flags.0?Vector<int> text:flags.1?Vector<TextWithEntities> to_lang:string = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : array(76),
	text : array(
		$client->textWithEntities(
			text : 'v08lNK5jm7IGFypY',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 23,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 16,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 73,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 81,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 94,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 99,
					language : 'q9lDfZBA3sJR7mTE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 44,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 35,
					user_id : -7228165896244562431,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 34,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 65,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : 4774830688115856569,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
			),
		),
	),
	to_lang : 'I92PY5n8HfW3rGUF',
);
```