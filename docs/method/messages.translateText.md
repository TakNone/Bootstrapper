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
	id : array(27),
	text : array(
		$client->textWithEntities(
			text : 'iChOz9UlcexJNIWv',
			entities : array(
				$client->messageEntityUnknown(
					offset : 51,
					length : 94,
				),
				$client->messageEntityMention(
					offset : 22,
					length : 96,
				),
				$client->messageEntityHashtag(
					offset : 2,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 89,
					length : 5,
				),
				$client->messageEntityUrl(
					offset : 39,
					length : 23,
				),
				$client->messageEntityEmail(
					offset : 5,
					length : 43,
				),
				$client->messageEntityBold(
					offset : 84,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 19,
					length : 75,
				),
				$client->messageEntityCode(
					offset : 85,
					length : 18,
				),
				$client->messageEntityPre(
					offset : 42,
					length : 18,
					language : 'sjiSoqAUIVQ89fW2',
				),
				$client->messageEntityTextUrl(
					offset : 93,
					length : 3,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 43,
					length : 79,
					user_id : -8217862284288634382,
				),
				$client->inputMessageEntityMentionName(
					offset : 93,
					length : 21,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 100,
					length : 78,
				),
				$client->messageEntityCashtag(
					offset : 17,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 17,
					length : 3,
				),
				$client->messageEntityStrike(
					offset : 72,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 51,
					length : 88,
				),
				$client->messageEntitySpoiler(
					offset : 53,
					length : 76,
				),
				$client->messageEntityCustomEmoji(
					offset : 87,
					length : 22,
					document_id : 3248895326763589706,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 35,
					length : 71,
				),
			),
		),
	),
	to_lang : 'AWeKsqXfiJBmP4QN',
);
```