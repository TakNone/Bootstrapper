# messages.translateText

**Description** : *Translate a given text*

**Layer** : 227

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
| **tone** | [`flags.2?string`](type/string) | NOTHING |

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
	id : array(8),
	text : array(
		$client->textWithEntities(
			text : 'RtvnwOUc5eDHI0Qb',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 70,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 34,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 26,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 55,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 25,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 35,
					language : '830MNZ6RzAon5fwm',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 53,
					user_id : 1130611527999817500,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 26,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 0,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 62,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 55,
					document_id : -4205951095691893569,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 54,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 97,
					date : 17,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 85,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 40,
					old_text : 'rHTaGmqt7Ok1VLAW',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 66,
				),
			),
		),
	),
	to_lang : 'bRZXU8QK3o4OPDJm',
	tone : 'q5uEDoMI81VFHN9R',
);
```