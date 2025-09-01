# messages.translateText

**Description** : *Translate a given text*

**Layer** : 214

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

---

## Example

```php
$messagesTranslatedText = $client->messages->translateText(
	peer : $client->inputPeerEmpty(),
	id : array(17),
	text : array(
		$client->textWithEntities(
			text : '0lAqI81WgmMnkcU2',
			entities : array(
				$client->messageEntityUnknown(
					offset : 42,
					length : 23,
				),
				$client->messageEntityMention(
					offset : 37,
					length : 64,
				),
				$client->messageEntityHashtag(
					offset : 63,
					length : 56,
				),
				$client->messageEntityBotCommand(
					offset : 36,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 81,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 62,
					length : 55,
				),
				$client->messageEntityBold(
					offset : 24,
					length : 1,
				),
				$client->messageEntityItalic(
					offset : 2,
					length : 98,
				),
				$client->messageEntityCode(
					offset : 91,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 21,
					length : 72,
					language : 'Y3PgW0IsHoE9yxRV',
				),
				$client->messageEntityTextUrl(
					offset : 92,
					length : 25,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 87,
					length : 9,
					user_id : -350055318601754393,
				),
				$client->inputMessageEntityMentionName(
					offset : 7,
					length : 24,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 70,
					length : 8,
				),
				$client->messageEntityCashtag(
					offset : 27,
					length : 35,
				),
				$client->messageEntityUnderline(
					offset : 77,
					length : 11,
				),
				$client->messageEntityStrike(
					offset : 8,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 30,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 32,
					length : 42,
				),
				$client->messageEntityCustomEmoji(
					offset : 18,
					length : 9,
					document_id : -4094517889714253386,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 44,
					length : 38,
				),
			),
		),
	),
	to_lang : 'LBXo1gtEq0vpr6b9',
);
```