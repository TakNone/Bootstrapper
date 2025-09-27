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
	id : array(94),
	text : array(
		$client->textWithEntities(
			text : 'xhqie3gBKo2PDT7O',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 10,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 91,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 7,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 23,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 76,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 0,
					language : 'D9Y5ptX0QwylxnfU',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 71,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 45,
					user_id : -4153848337334383727,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 33,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 21,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 30,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 8,
					document_id : 5027640084416285014,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 1,
				),
			),
		),
	),
	to_lang : 'HCQlaTrWt5h7u6R0',
);
```