# messages.translateText

**Description** : *Translate a given text*

**Layer** : 216

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
	id : array(15),
	text : array(
		$client->textWithEntities(
			text : 'QiuIbTxAEtBXpYNr',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 50,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 81,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 64,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 95,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 88,
					language : 'kCBdDlVfWgmIY756',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 37,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 58,
					user_id : 2787832453283909509,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 46,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 86,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 83,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 92,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 53,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 70,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 63,
					document_id : 4031018867113121068,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 9,
				),
			),
		),
	),
	to_lang : '1ZcGBs5lWn7dyUwt',
);
```