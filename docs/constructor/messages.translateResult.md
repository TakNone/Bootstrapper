# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 216

```tl
messages.translateResult#33db32f8 result:Vector<TextWithEntities> = messages.TranslatedText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>result</mark> | [`Vector<TextWithEntities>`](type/TextWithEntities) | Text+entities, for each input message |

---

## Type

[messages.TranslatedText](type/messages.TranslatedText)

---

## Example

```php
$messagesTranslatedText = $client->messages->translateResult(
	result : array(
		$client->textWithEntities(
			text : 'H2Pj68GnVxQ9Lv4K',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 27,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 14,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 8,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 76,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 58,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 98,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 66,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 98,
					language : 'nidqlsmvNfgUCMW0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 51,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 25,
					user_id : 1724604173377384211,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 0,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 61,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 18,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 15,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 34,
					document_id : -6353858715942911552,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 69,
				),
			),
		),
	),
);
```