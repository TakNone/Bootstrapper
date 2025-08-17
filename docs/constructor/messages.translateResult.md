# messages.translateResult

**Description** : *Translated text with entities*

**Layer** : 211

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
			text : 'ceK82UgF7dhJ1QiO',
			entities : array(
				$client->messageEntityUnknown(
					offset : 41,
					length : 75,
				),
				$client->messageEntityMention(
					offset : 86,
					length : 2,
				),
				$client->messageEntityHashtag(
					offset : 88,
					length : 8,
				),
				$client->messageEntityBotCommand(
					offset : 6,
					length : 15,
				),
				$client->messageEntityUrl(
					offset : 76,
					length : 100,
				),
				$client->messageEntityEmail(
					offset : 11,
					length : 2,
				),
				$client->messageEntityBold(
					offset : 96,
					length : 24,
				),
				$client->messageEntityItalic(
					offset : 100,
					length : 24,
				),
				$client->messageEntityCode(
					offset : 27,
					length : 2,
				),
				$client->messageEntityPre(
					offset : 46,
					length : 76,
					language : 'SzxnJHuLO0CRiIBa',
				),
				$client->messageEntityTextUrl(
					offset : 63,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 37,
					length : 25,
					user_id : -4427724168834123406,
				),
				$client->inputMessageEntityMentionName(
					offset : 77,
					length : 21,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 41,
					length : 49,
				),
				$client->messageEntityCashtag(
					offset : 22,
					length : 38,
				),
				$client->messageEntityUnderline(
					offset : 96,
					length : 1,
				),
				$client->messageEntityStrike(
					offset : 29,
					length : 52,
				),
				$client->messageEntityBankCard(
					offset : 67,
					length : 71,
				),
				$client->messageEntitySpoiler(
					offset : 5,
					length : 82,
				),
				$client->messageEntityCustomEmoji(
					offset : 26,
					length : 18,
					document_id : -4057816319264073247,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 83,
					length : 5,
				),
			),
		),
	),
);
```