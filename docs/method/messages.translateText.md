# messages.translateText

**Description** : *Translate a given text*

**Layer** : 211

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
	id : array(22),
	text : array(
		$client->textWithEntities(
			text : 'LVWnOgt9FjweohPX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 11,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 81,
					length : 99,
				),
				$client->messageEntityHashtag(
					offset : 4,
					length : 45,
				),
				$client->messageEntityBotCommand(
					offset : 82,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 68,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 69,
					length : 5,
				),
				$client->messageEntityBold(
					offset : 37,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 23,
					length : 62,
				),
				$client->messageEntityCode(
					offset : 80,
					length : 20,
				),
				$client->messageEntityPre(
					offset : 45,
					length : 0,
					language : 'Fv9ahicpmZrq8glA',
				),
				$client->messageEntityTextUrl(
					offset : 56,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 1,
					length : 53,
					user_id : 7096472157849564409,
				),
				$client->inputMessageEntityMentionName(
					offset : 50,
					length : 96,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 93,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 41,
					length : 62,
				),
				$client->messageEntityUnderline(
					offset : 79,
					length : 78,
				),
				$client->messageEntityStrike(
					offset : 77,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 67,
					length : 88,
				),
				$client->messageEntitySpoiler(
					offset : 58,
					length : 66,
				),
				$client->messageEntityCustomEmoji(
					offset : 13,
					length : 24,
					document_id : 782729482194439235,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 96,
					length : 90,
				),
			),
		),
	),
	to_lang : 'mKkBADRpw2PFqGXv',
);
```